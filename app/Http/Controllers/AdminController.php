<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use DB;
use App\models\User;
use App\models\Customer;
use App\models\sale;

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
        return view('admin.dashboard');
    }

    public function customer(){
       
        // $users = DB::table('users')->where('role', 4)->get();
        $data['title'] = 'Customers';
        return view('admin.customer_list')->with($data);
    }

    public function customer_data(){
        $builder = User::query()->select('*')->where('role',4);

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
        // $builder =  DB::table('sales')->join('customer', 'customer.customer_id', '=', 'sales.customer_id')->get();

        $builder = sale::query();
        
        return datatables($builder)
                        //   ->editColumn('id', function ($user) {
                        //       return $user->id;
                        //   })
                            ->editColumn('created_at', function ($user) {
                                return date('Y-m-d H:i:s',strtotime($user->created_at));
                            })
                            // ->setRowClass(function ($user) {
                            //     return $user->id % 2 == 0 ? 'alert-success' : 'alert-warning';
                            // })
                            ->addColumn('action', function ($user) {
                                return '<a href="'.url('/admin/agent/sales/view/').'/'.$user->id.'" class="btn btn-sm btn-primary">View</a>';
                            })
                        //   ->rawColumns([1,2])
                          ->make();
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
                        //   })
                            ->editColumn('created_at', function ($user) {
                                return date('Y-m-d H:i:s',strtotime($user->created_at));
                            })
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
       

       return view('admin.Gallery_Videos_list');
        
    }
    public function video_data()
   {
        $builder = DB::table('galleryvideos') ->where('type', 'v')->get();


        return datatables($builder)
                             ->editColumn('video', function ($user) {
                                return url('/uploads/Videos/').'/'.$user->video;
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
       return view('admin.GalleryVideos');
       
    }
    public function addVideossubmit(Request $request)
    {
         $this->validate($request, [
            'Videos' => 'required',]);

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
        return view('admin.screenshot_list');
    }
    public function screenshot_data()
   {
        $builder = DB::table('galleryvideos') ->where('type', 's')->get();


        return datatables($builder)
                           ->editColumn('image', function ($user) {
                                return url('/uploads/Videos/').'/'.$user->video;
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
       return view('admin.addscreenshots');
    }
    public function addScreenshotssubmit(Request $request)
    {
        
         $this->validate($request, [
            'Videos' => 'required',]);

              $file=$request->file('Videos');

                    $Videos=time().rand(1,100).'.'.$file->extension();
                    $file->move('uploads/Videos',$Videos);
                     $date=date("Y-m-d h:i:s");
              DB::table('galleryvideos')->insert(
                         ['video' => $Videos,
                         'type' => 's',
                         'created_at' =>$date,
                         ]);
              return redirect('/Gallery/Trading_screenshots')->with('success', 'Record inserted successfully.');
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
}
