<?php

namespace App\Http\Controllers;
// use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;
use DB;
use App\models\User;
use App\models\sale;

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

}
