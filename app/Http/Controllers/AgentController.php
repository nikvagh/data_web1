<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\users;
use Storage;
use DB;
use App\model\Admin;
use App\Models\Transactions;
use Auth;
use PDF;

class AgentController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {

            $viewer =  DB::table('transactions')
                ->where('agent_id', Auth::user()->id)
            ->select(DB::raw("SUM(amount) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("Month(created_at)"))
            ->get()->toArray();
            $viewer = array_column($viewer, 'count');

            $click =  DB::table('transactions')
                ->select(DB::raw("SUM(agentcommission) as count"))
                ->where('agent_id', Auth::user()->id)
                
            ->orderBy("created_at")
            ->groupBy(DB::raw("Month(created_at)"))
            ->get()->toArray();
            $click = array_column($click, 'count');

            $year =  DB::table('transactions')
                ->where('agent_id', Auth::user()->id)
                ->select(DB::raw("created_at as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("Month(created_at)"))
            ->get()->toArray();
            $year = array_column($year, 'count');

      $totalPackage= DB::table('customer')->join('package_user', 'package_user.user_id', '=', 'customer.customer_id')
        ->where('customer.agent_id', Auth::user()->id)->count();
       $totalPackagesell= DB::table('customer')->join('package_user', 'package_user.user_id', '=', 'customer.customer_id')
        ->join('products', 'products.id', '=', 'package_user.Package_id')->where('customer.agent_id', Auth::user()->id)->get();
        $totalCustomer= DB::table('customer')->where('agent_id', Auth::user()->id)->count();
        $totalcommission= DB::table('agent')->where('agent_id', Auth::user()->id)->get()->first();

        // print_r($totalcommission->commission);
        // exit();
        return view('agent.dashboard',['totalPackage'=>$totalPackage ,'totalPackagesell'=>$totalPackagesell,'totalCustomer'=>$totalCustomer,'totalcommission'=>$totalcommission])
         ->with('viewer',json_encode($viewer,JSON_NUMERIC_CHECK))
        ->with('year',json_encode($year,JSON_NUMERIC_CHECK))
        ->with('click',json_encode($click,JSON_NUMERIC_CHECK));
    }
    public function dashboard()
    {
 // line chart testing
        // $users = transactions::select(\DB::raw("SUM(amount) as total"))
        //             // ->whereYear('created_at', date('Y'))
        //             ->groupBy(\DB::raw("Month(created_at)"))
        //             ->pluck('total')->toArray();


         $users = DB::table('transactions')
                ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d") as created_at') ,\DB::raw("sum(amount) as total"))
                ->groupBy(\DB::raw("Month(created_at)"))
                ->orderBy(\DB::raw("created_at"))
                 ->pluck('total','created_at')->toArray();  

             $commission = DB::table('transactions')
                ->select(DB::raw('DATE_FORMAT(created_at, "%Y-%m-%d") as created_at') ,\DB::raw("sum(agentcommission) as total"))
                ->groupBy(\DB::raw("Month(created_at)"))
                ->orderBy(\DB::raw("created_at"))
                 ->pluck('total','created_at')->toArray();  

                    // echo "<pre>";
                    // print_r(compact('users_res'));
                    // echo "</pre>";

                    // $users = array();
                
                    // foreach($users_res as $key=>$val){
                    //     $graph_time = strtotime($key)*1000;
                    //     $users[] = "[$graph_time, $val]";
                    // }
                    
                    // print_r(compact('commission'));
                    // exit();


        return view('agent.dashboard1', compact('users'),compact('commission'));


        
        
    }
   
    public function profile()
        {
        	$id= Auth::user()->id;
            
      
            $users = DB::table('users')
                ->where('users.id', $id)
                ->rightJoin('agent', 'agent_id', '=', 'users.id')
                ->get()->first();
            // print_r($users);
            // exit();  
                 $data['title'] = 'Profile';
             return view('agent.Agentprofile',['users' => $users])->with($data);
        }
    public function Submitprofile(request $request)
        {
            $id=$request->input('id');
               $this->validate($request, [
                'address' => 'required',
                'abn' => 'required',
                'business_name' => 'required',
                
            ]);
        if ($request->file('profile_pic')) {
          $file=$request->file('profile_pic');
                    $img=time().rand(1,100).'.'.$file->extension();
                    $file->move('uploads/Profile',$img);
        }
        else{
              $img=$request->input('old_img');
        }
      
            
             


                $data = [
                    'address' => $request->input('address'),
                    'abn' => $request->input('abn'),
                    'business_name' => $request->input('business_name'),
                    'profile_pic' => $img,];
              $id=$request->input('id');       
             DB::table('agent')
            ->where('agent_id', $id)
            ->update($data);

             
            // echo "string";
             return redirect('/agent')->with('success', 'Record inserted successfully.');
                
        }
     public function agentprofilepdf($id)
    {

        $pro = DB::table('agent')
             ->where('agent_id', $id)
            ->get()->first();
               
                // print_r($pro[0]);
                // return view('agent.agentprofilepdf',['pro' => $pro]);
                // exit();
        $pdf = PDF::loadView('agent.agentprofilepdf',['pro' => $pro]);
          
              $pdf->setPaper('A5', 'Landscape');
            

        return $pdf->download('agentprofilepdf.pdf');
    }
    public function addcustomer()
    {
         $data['title'] = 'Add New customer';
             return view('agent.addcustomer')->with($data);
        
    }
    public function submitcustomer(request $request)
    {
           // print_r($request->all());
           // exit();
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'abn' => 'required',
            'address' => 'required',

        ]);
            // echo "string";
            //         exit();
        
        $date=date("Y-m-d h:i:s");
        $id=DB::table('users')->insertGetId(
                         ['name' =>$request->input('name'),
                         'phone' =>$request->input('phone'),
                         'email' =>$request->input('email'),
                         'role' =>'4',
                         'password' =>bcrypt($request->input('password')),
                         // 'remember_token'=>$request->input('_token'),
                         
                         'created_at'=> $date,
                         ]);
         DB::table('customer')->insert(
                         ['customer_id' =>$id,
                         'agent_id' =>Auth::user()->id,
                         'address' =>$request->input('address'),
                         'abn' =>$request->input('abn'),
                         'name' =>$request->input('name'),
                         'created_at'=> $date,
                         ]);
         // echo "string";
             return redirect('/customerlist')->with('success', 'Record inserted successfully.');
    }
    public function customerlist()
    {
        
       $data['title'] = ' Customer ';
        return view('agent.customerlist')->with($data);

    }
    public function customer_data()
    {
         $builder = DB::table('users')
                ->where('customer.agent_id', Auth::user()->id)
                ->Join('customer', 'customer.customer_id', '=', 'users.id')
                ->get();
                // print_r($builder);
                // exit();
      
         return datatables($builder)
                        //   ->editColumn('id', function ($user) {
                        //       return $user->id;
                        //   })
                        //   ->editColumn('created_at', function ($user) {
                        //       return date('Y-m-d h:i:s',strtotime($user->created_at));
                        //   })
                        ->addColumn('action', function ($product) {
                            return '<a href="'.url('/agent/customer/edit/').'/'.$product->customer_id .'" class="btn btn-sm btn-primary">Edit</a>
                                    <a href="'.url('/agent/customer/delete/').'/'.$product->customer_id .'" class="btn btn-sm btn-danger">Delete</a>';
                        })
                        //   ->rawColumns([1,2])
                          ->make();
    }
    public function customerdelete($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->delete();

             DB::table('customer')
            ->where('customer_id', $id)
            ->delete();
           
        echo "Record Delete successfully.<br/>";
        return redirect('/customerlist')->with('success', 'Record Delete successfully.');

    }
    public function customeredit($id)
    {
        $get = DB::table('users')
            ->where('users.id', $id)
             ->Join('customer', 'customer.customer_id', '=', 'users.id')
            ->get();

            // print_r($get);
            // exit();
             $data['title'] = 'customer edit';
        return view('agent.customeredit',['get'=>$get])->with($data);
         
    }
    public function customerupdate(request $request)
    {
        $id= $request->input('id');
         // print_r($request->all());
           // exit();
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required',
            
            'abn' => 'required',
            'address' => 'required',

        ]);
            // echo "string";
            //         exit();
        
        $date=date("Y-m-d h:i:s");
       DB::table('users')->where('id', $id)->update(
                         ['name' =>$request->input('name'),
                         'phone' =>$request->input('phone'),
                         'email' =>$request->input('email'),
                         'updated_at'=> $date,
                         ]);
         DB::table('customer')->where('customer_id', $id)->update(
                         ['agent_id' =>Auth::user()->id,
                         'address' =>$request->input('address'),
                         'abn' =>$request->input('abn'),
                         'name' =>$request->input('name'),
                         'updated_at'=> $date,
                         ]);
         // echo "string";
             return redirect('/customerlist')->with('success', 'Record Update successfully.');
    }

     public function taranjesonlist()
    {
        DB::enableQueryLog();

          // $builder = DB::table('transactions')
          //       ->where('transactions.agent_id', Auth::user()->id)
          //       ->Join('users', 'users.id', '=', 'transactions.customer_id')
          //       ->Join('customer', 'customer.customer_id', '=', 'transactions.customer_id')
          //       ->get();
          //           print_r($builder);
          //           exit();

                    // $query = DB::getQueryLog();
                    // $lastQuery = end($query);
                    // print_r($lastQuery);
                    // exit;


       $data['title'] = 'Commission';
        return view('agent.taranjesonlist')->with($data);

    }
    public function taranjeson_data()
    {
          
         $builder = DB::table('transactions')
                ->where('transactions.agent_id', Auth::user()->id)
                ->Join('users', 'users.id', '=', 'transactions.customer_id')
                ->Join('customer', 'customer.customer_id', '=', 'transactions.customer_id')
                ->get();
                // print_r($builder);
                // exit();
      
         return datatables($builder)
                        //   ->editColumn('id', function ($user) {
                        //       return $user->id;
                        //   })
                        //   ->editColumn('created_at', function ($user) {
                        //       return date('Y-m-d h:i:s',strtotime($user->created_at));
                        //   })
                        ->addColumn('action', function ($product) {
                            return '<a href="'.url('/agent/taranjeson/view/').'/'.$product->transactions_id.'" class="btn btn-sm btn-primary">View</a>';
                        })
                        //   ->rawColumns([1,2])
                          ->make();
    }
    public function agenttaranjesonview($id)
    {
         $data['title'] = 'Package View';
        $transactions= DB::table('transactions')
                ->where('transactions.transactions_id', $id)
                ->Join('users', 'users.id', '=', 'transactions.customer_id')
                ->Join('customer', 'customer.customer_id', '=', 'transactions.customer_id')
                ->Join('agent', 'agent.agent_id', '=', 'transactions.agent_id')
                
                ->get();
                // print_r($data);
                // exit();

        return view('agent.agenttaranjesonview',['transactions'=>$transactions])->with($data);

    }
    public function withdraw(request $request)
    {
        $data['title'] = 'Withdraw';
       return view('agent.withdraw_agent')->with($data);
    }
    public function addwithdraw(request $request)
    {
       $this->validate($request, [
            'amount' => 'required',]);

          $agent= DB::table('agent')->where('agent_id', Auth::user()->id)->get();
          $date=date("Y-m-d h:i:s");
          if ($agent[0]->wallet >= $request->input('amount')) {
             DB::table('transactions')->insert(
                         ['amount' => $request->input('amount'),
                         'agent_id'=>  Auth::user()->id,
                         'type'=>'w',
                         'deposittype'=>'3',
                         'customer_id'=>'0',
                         'agentcommission'=>'0',
                         'commission'=>'0',
                         'created_at'=>$date
                         ]);
            // print_r();
            // exit();
            $totalamount=$agent[0]->wallet - $request->input('amount');
         DB::table('agent')
            ->where('agent_id', Auth::user()->id)
            ->update(['wallet' => $totalamount]);

            return redirect('/withdraw')->with('success', 'withdraw successfully completed.');

          }
          else{
             return redirect('/withdraw')->with('error', 'Withdrawal Amount In Not Available In Accounty.');
                }
       // print_r($agent[0]->wallet);
       // exit();

         }
         public function renewmembership()
         {
             return view('agent.renewmembership');
         }
    public function membershiprenew(Request $request)
    {
          $this->validate($request, [
            'amount' => 'required', 
        ]);
          $date=date("Y-m-d h:i:s");
          DB::table('transactions')->insert(
                         [  'customer_id'=>'0',
                            'agent_id'=>Auth::user()->id,
                            'type'=>'d',
                            'amount' => $request->input('amount'),
                            'deposittype'=>'3',
                            'agentcommission'=>'0',
                            'commission'=>'0',
                            'created_at'=>$date,
                            ]);

        echo "Record inserted successfully.<br/>";


        $oneYearOn = date('Y-m-d',strtotime(date("Y-m-d") . " + 365 day"));
                DB::table('agent')
            ->where('agent_id', Auth::user()->id)
             ->update(['membership_end' => $oneYearOn]);

             return redirect('/agent')->with('success', 'Your Membership is Renew for one year.');

    }
      public function customer_packag_list()
        {   
            
             $data['title'] = 'Packages';
           return view('agent.customer_packag_list')->with($data);
        }
     public function customer_packag_view($id)
        {
            $data['title'] = 'Withdraw';
       

          $Package =  DB::table('package_user')->where('PackageUser_id', $id)
                ->Join('products', 'package_user.Package_id', '=', 'products.id')->get()->first();
            return view('agent.packag_view',['Package'=>$Package])->with($data);
        }
    public function customer_packag_data()
        {
           $builder =  DB::table('package_user')
                ->Join('products', 'package_user.Package_id', '=', 'products.id')->get();

            // $builder = sale::query();
            
            return datatables($builder)
                            //   ->editColumn('id', function ($Package) {
                            //       return $Package->id;
                            //   })
                                    // ->editColumn('created_at', function ($Package) {
                                    //     return date('Y-m-d H:i:s',strtotime($Package->created_at));
                                    // })
                                // ->setRowClass(function ($Package) {
                                //     return $Package->id % 2 == 0 ? 'alert-success' : 'alert-warning';
                                // })
                                ->addColumn('action', function ($Package) {
                                    return '<a href="'.url('/agent/packag/view/').'/'.$Package->PackageUser_id.'" class="btn btn-sm btn-primary">View</a>';
                                })
                            //   ->rawColumns([1,2])
                              ->make();
        }
    public function agent_commission()
      {
                $get = DB::table('customer')
            ->where('agent_id', Auth::user()->id)
            // ->join('users', 'users.id', '=', 'customer.agent_id')
            ->get();

            // print_r($get[0]->name);
            // exit();
            $data['title'] = 'Agent Commission';
            return view('agent.agent_commission',['get'=>$get])->with($data);
         
      }  
      public function agent_commission_data($id)
      { 
         $get = DB::table('transactions')
            ->where('customer_id',$id)
            // ->join('users', 'users.id', '=', 'customer.agent_id')
            ->get();
            // print_r($get);
            // exit();
           
            return view('agent.agent_commission_data',['get'=>$get]);
          # code...
      }
}
