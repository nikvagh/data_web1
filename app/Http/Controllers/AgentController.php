<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\users;
use Storage;
use DB;
use App\model\Admin;
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
        return view('agent.dashboard');
    }
    public function profile()
        {
        	$id= Auth::user()->id;
            
      
            $users = DB::table('users')
                ->where('users.id', $id)
                ->rightJoin('agent', 'agent_id', '=', 'users.id')
                ->get();
            // print_r($users);
            // exit();  

             return view('agent.Agentprofile',['users' => $users]);
        }
    public function Submitprofile(request $request)
        {
            $id=$request->input('id');
               $this->validate($request, [
                'address' => 'required',
                'abn' => 'required',
                'business_name' => 'required',
                
            ]);
        // print_r($request->file());
        // exit();
               if ($file=$request->file('profile_pic')) {
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
                    'profile_pic' => $img];

             
            // echo "string";
             return redirect('/agent')->with('success', 'Record inserted successfully.');
                
        }
     public function agentprofilepdf($id)
    {

        $pro = DB::table('agent')
             ->where('agent_id', $id)
            ->get();
               
                // print_r($pro[0]);
                // return view('agent.agentprofilepdf',['pro' => $pro]);
                // exit();
            
        $pdf = PDF::loadView('agent.agentprofilepdf',['pro' => $pro]);
  
        return $pdf->download('agentprofilepdf.pdf');
    }
    public function addcustomer()
    {
             return view('agent.addcustomer');
        
    }
    public function submitcustomer(request $request)
    {
           // print_r($request->all());
           // exit();
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
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
        
       $data['title'] = 'Customer list';
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
        return view('agent.customeredit',['get'=>$get]);
         
    }
    public function customerupdate(request $request)
    {
        $id= $request->input('id');
         // print_r($request->all());
           // exit();
        $this->validate($request, [
            'name' => 'required',
            'phone' => 'required',
            'email' => 'required|email',
            
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


       $data['title'] = 'Customer list';
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
        $data= DB::table('transactions')
                ->where('transactions.transactions_id', $id)
                ->Join('users', 'users.id', '=', 'transactions.customer_id')
                ->Join('customer', 'customer.customer_id', '=', 'transactions.customer_id')
                ->Join('agent', 'agent.agent_id', '=', 'transactions.agent_id')
                
                ->get();
                // print_r($data);
                // exit();

        return view('agent.agenttaranjesonview',['data'=>$data]);

    }
    public function withdraw(request $request)
    {
       return view('agent.withdraw_agent');
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

            return redirect('/withdraw')->with('success', 'Record Update successfully.');

          }
          else{
             return redirect('/withdraw')->with('error', 'Withdrawal Amount In Not Available In Accounty.');
                }
       // print_r($agent[0]->wallet);
       // exit();

         }
    public function membershiprenew()
    {
        $oneYearOn = date('Y-m-d',strtotime(date("Y-m-d", ) . " + 365 day"));
                DB::table('agent')
            ->where('agent_id', Auth::user()->id)
             ->update(['membership_end' => $oneYearOn]);

             return redirect('/agent');

    }
}
