<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use DB;
use App\models\User;
use App\models\Customer;
use App\models\sale;
use Intervention\Image\ImageManagerStatic as Image;
use Yajra\DataTables\Html\Builder;

use Auth;

class AdminController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {   
        // User::factory()->count(10)->create();
        // Customer::factory()->count(10)->make();

            $Transactions =  DB::table('transactions')
             
            ->select(DB::raw("SUM(amount) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("Month(created_at)"))
            ->get()->toArray();
            $Transactions = array_column($Transactions, 'count');

            $agent_commission =  DB::table('transactions')
                ->select(DB::raw("SUM(agentcommission) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("Month(created_at)"))
            ->get()->toArray();
            $agent_commission = array_column($agent_commission, 'count');

             $withdraw =  DB::table('transactions')
             ->where('type', 'w')
            ->select(DB::raw("SUM(amount) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("Month(created_at)"))
            ->get()->toArray();
            $withdraw = array_column($withdraw, 'count');

             $deposit =  DB::table('transactions')
             ->where('type', 'd')
            ->select(DB::raw("SUM(amount) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("Month(created_at)"))
            ->get()->toArray();
            $deposit = array_column($deposit, 'count');


            $year =  DB::table('transactions')
                ->select(DB::raw("created_at as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("Month(created_at)"))
            ->get()->toArray();
            $year = array_column($year, 'count');
       
             $totalproducts= DB::table('package_user')->count();
             $totalcustomer= DB::table('customer')->count();
             $totalagent= DB::table('agent')->count();
             $totatransactions= DB::table('transactions')->where('type', 'd')->get();
             $totatcommission = DB::table('agent')->get();

             $agentcommission= DB::table('agent')->select('commission as count')->pluck('count');
              $agentsellamount=DB::table('transactions')->select(DB::raw("sum(amount) as count"))
                  ->groupBy(\DB::raw("agent_id"))->pluck('count');
              $agentname=DB::table('agent')->select('business_name')
                  ->groupBy(\DB::raw("business_name"))->pluck('business_name'); 
             // print_r($agentname);
             // exit();
        
        return view('admin.dashboard',['totalproducts'=>$totalproducts,'totalcustomer'=>$totalcustomer,'totalagent'=>$totalagent,'totatransactions'=>$totatransactions,'totatcommission'=>$totatcommission])
         ->with('Transactions',json_encode($Transactions,JSON_NUMERIC_CHECK))
        ->with('agent_commission',json_encode($agent_commission,JSON_NUMERIC_CHECK))
        ->with('withdraw',json_encode($withdraw,JSON_NUMERIC_CHECK))
        ->with('deposit',json_encode($deposit,JSON_NUMERIC_CHECK))
        ->with('year',json_encode($year,JSON_NUMERIC_CHECK))
        ->with('agentsellamount',json_encode($agentsellamount,JSON_NUMERIC_CHECK))
        ->with('agentname',json_encode($agentname,JSON_NUMERIC_CHECK))
        ->with('agentcommission',json_encode($agentcommission,JSON_NUMERIC_CHECK));
    }


    public function customer(){
      // $users = DB::table('users')->where('role', 4)->get();

        $data['title'] = 'Customers';
        return view('admin.customer_list')->with($data);
    }

    public function customer_data(){
        // echo "string";
        // exit();
        
        $builder = User::query()->select('*')->where('role',4);
        // print_r($builder);
        // exit();

        return datatables()->eloquent($builder)
                        //   ->editColumn('id', function ($user) {
                        //       return $user->id;
                        //   })
                        //   ->editColumn('created_at', function ($user) {
                        //       return date('Y-m-d h:i:s',strtotime($user->created_at));
                        //   })
                        //   ->addColumn('action', 'eloquent.tables.users-action')
                        //   ->rawColumns([1,2])
                          ->make();
    }

    public function agent(){
      
        $data['title'] = 'Agents';
        return view('admin.agent_list')->with($data);
    }

    public function agent_data(){
        $builder =  DB::table('agent')->get();

        // $builder = sale::query();
        
        return datatables($builder)
                        //   ->editColumn('id', function ($user) {
                        //       return $user->id;
                        //   })
                            // ->editColumn('created_at', function ($user) {
                            //     return date('Y-m-d H:i:s',strtotime($user->created_at));
                            // })
                            // ->setRowClass(function ($user) {
                            //     return $user->id % 2 == 0 ? 'alert-success' : 'alert-warning';
                            // })
                            ->addColumn('action', function ($user) {
                                return '<a href="'.url('/admin/agent/view').'/'.$user->id.'" class="btn btn-sm btn-primary">View</a>';
                            })
                        //   ->rawColumns([1,2])
                          ->make();
    }
    public function agentview($id)
    {
       $get = DB::table('agent')
            ->where('id', $id)
            ->get()->first();  
            // print_r($get);
            // exit();
             $data['title'] = 'Agents Viwe';
      return view('admin.agentview', ['get' => $get])->with($data); 

    }
   
    public function agent_sales(){

        $data['title'] = 'Agents';
        return view('admin.agent_list')->with($data);
    }
   
    public function agent_sales_data(){
        // $builder = User::query()->select('*')->where('role',3);
        return datatables()->eloquent($builder)
                        //   ->editColumn('id', function ($user) {
                        //       return $user->id;
                        // //   })
                        //     ->editColumn('created_at', function ($user) {
                        //         return date('Y-m-d H:i:s',strtotime($user->created_at));
                        //     })
                            // ->setRowClass(function ($user) {
                            //     return $user->id % 2 == 0 ? 'alert-success' : 'alert-warning';
                            // })
                            ->addColumn('action', function ($user) {
                                // return '<a href="'.$this->url->to('/').'agent/sales/'.$user->id.'" class="btn btn-sm btn-primary">Sales</a>';
                            })
                        //   ->rawColumns([1,2])
                          ->make();
    }


    public function deposite(){
        // $users = DB::table('users')->where('role', 4)->get();
        return view('admin.deposite_list');

        // echo "<pre>";
        // print_r($users);
    }

    public function withdraw(){
        // $users = DB::table('users')->where('role', 4)->get();
        return view('admin.withdraw_list');

        // echo "<pre>";
        // print_r($users);
    }
    public function salesview($id)
    {
       $salesdata = DB::table('sales')->where('id', $id)->get();    

       // print_r($salesdata[0]);
       // exit();
       return view('admin.sales_view',['salesdata' => $salesdata]);
    }
    public function GalleryVideos()
    {
      
            $data['title'] = 'Trading Videos';
       return view('admin.Gallery_Videos_list')->with($data);
        
    }
    public function video_data()
   {
        $builder = DB::table('galleryvideos') ->where('type', 'v')->get();


        return datatables($builder)
                             ->editColumn('video', function ($user) {
                                return $user->video;
                                // return '<img src="'.url('/uploads/Videos/').'/'.$user->video.'" width="20" height="20">';
                                // return view('<img src="'.url('/uploads/Videos/').'/'.$user->video.'" width="20" height="20">')->render();
                            })
                           ->addColumn('action', function ($user) {
                                return '<a href="'.url('/Gallery/Videos/delete/').'/'.$user->video_id.'" class="btn btn-sm btn-danger">Delete</a>';
                            })
                       
                          ->make();
    }
    public function video_delete($id)
    {
        $get = DB::table('galleryvideos')
            ->where('video_id', $id)
            ->get()->first();
            // print_r($get->video);
            // exit();
        @unlink('uploads/Videos/' . $get->video);

          DB::table('galleryvideos')
            ->where('video_id', $id)
            ->delete();
        return redirect('/Gallery/Videos')->with('success', 'Record Delete successfully.');


    }
    public function addVideos()
    {
       $data['title'] = 'Add Videos';
       return view('admin.GalleryVideos')->with($data);
       
    }
    public function addVideossubmit(Request $request)
    {
         $this->validate($request, [
            'Videos' => 'required']);

              $file=$request->file('Videos');

                    $Videos=time().rand(1,100).'.'.$file->extension();
                    $file->move('uploads/Videos',$Videos);
                     $date=date("Y-m-d h:i:s");
              DB::table('galleryvideos')->insert(
                         ['video' => $Videos,
                         'type' => 'v',
                         'created_at' =>$date,
                         ]);
              return redirect('/Gallery/Videos')->with('success', 'Record inserted successfully.');

    }
     public function Trading_screenshots()
    {
       $data['title'] = 'Trading Screenshots';
        return view('admin.screenshot_list')->with($data);
    }
    public function screenshot_data()
   {
        $builder = DB::table('galleryvideos') ->where('type', 's')->get();


        return datatables($builder)
                           ->editColumn('image', function ($user) {
                                return $user->video;
                                // return '<img src="'.url('/uploads/Videos/').'/'.$user->video.'" width="20" height="20">';
                                // return view('<img src="'.url('/uploads/Videos/').'/'.$user->video.'" width="20" height="20">')->render();
                            })
                           ->addColumn('action', function ($user) {
                                return '<a href="'.url('/Gallery/Screenshot/delete/').'/'.$user->video_id.'" class="btn btn-sm btn-danger">Delete</a>';
                            })
                            
                          ->make();
    }
    public function addscreenshots()
    {
      $data['title'] = 'Add screenshots';
       return view('admin.addscreenshots')->with($data);
    }
    public function addScreenshotssubmit(Request $request)
    {
     
         $this->validate($request, [
            'Videos' => 'required',]);

              $file=$request->file('Videos');

                    $filename=time().rand(1,100).'.'.$file->extension();
                     $image_resize = Image::make($file->getRealPath());              

                      $image_resize->resize(300, 300);
                      $image_resize->save(public_path('uploads/Videos/thumb/' .'300X300_'.$filename));
                    $file->move('uploads/Videos',$filename);

                     $date=date("Y-m-d h:i:s");
              DB::table('galleryvideos')->insert(
                         ['video' => $filename,
                         'type' => 's',
                         'created_at' =>$date,
                         ]);
              return redirect('/Gallery/Trading_screenshots')->with('success', 'Record inserted successfully.');
          // if($request->ajax())
          //    {
          //     // print_r($request->all());
          //     $image_data = $request->image;
          //     $image_array_1 = explode(";", $image_data);
          //     $image_array_2 = explode(",", $image_array_1[1]);
          //     $data = base64_decode($image_array_2[1]);
          //     $image_name =time().rand(1,100).'.'.'.png';

          //     $upload_path = public_path('uploads/Videos/' . $image_name);
          //     file_put_contents($upload_path, $data);

          //     $date=date("Y-m-d h:i:s");
          //     // DB::table('galleryvideos')->insert(
          //     //            ['video' => $image_name,
          //     //            'type' => 's',
          //     //            'created_at' =>$date,
          //     //            ]);
          //     return response()->json();
          //    }

    }
     public function Screenshot_delete($id)
    {
        $get = DB::table('galleryvideos')
            ->where('video_id', $id)
            ->get()->first();
            // print_r($get->video);
            // exit();
        @unlink('uploads/Videos/' . $get->video);

          DB::table('galleryvideos')
            ->where('video_id', $id)
            ->delete();
        return redirect('/Gallery/Trading_screenshots')->with('success', 'Record Delete successfully.');


    }
     public function admin_packag_list()
        {   
            
             $data['title'] = 'Packages';
           return view('admin.customer_packag_list')->with($data);
        }
     public function admin_packag_view($id)
        {
          $Package =  DB::table('package_user')->where('PackageUser_id', $id)
                ->Join('products', 'package_user.Package_id', '=', 'products.id')->get()->first();
                   $data['title'] = 'Package';
            return view('admin.packag_view',['Package'=>$Package])->with($data);
        }
    public function admin_packag_data()
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
                                    return '<a href="'.url('/admin/packag/view/').'/'.$Package->PackageUser_id.'" class="btn btn-sm btn-primary">View</a>';
                                })
                            //   ->rawColumns([1,2])
                              ->make();
        }
}
