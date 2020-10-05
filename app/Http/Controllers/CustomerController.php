<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\users;
use Storage;
use DB;
use PDF;
use Auth;

class CustomerController extends Controller
{
    public function index()
    {
    	   $deposit =  DB::table('Transactions')
             ->where('type', 'd')
            ->select(DB::raw("SUM(amount) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("Month(created_at)"))
            ->get()->toArray();
            $deposit = array_column($deposit, 'count');

            $year =  DB::table('Transactions')
                ->select(DB::raw("created_at as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("Month(created_at)"))
            ->get()->toArray();
            $year = array_column($year, 'count');

            $packag= DB::table('package_user')->where('user_id', Auth::user()->id)->orderBy('package_user.created_at', 'desc')
            ->rightJoin('products', 'package_user.Package_id', '=', 'products.id')->get();
             $packagcount= DB::table('package_user')->where('user_id', Auth::user()->id)->count();
            // print_r($packagcount);
            // print_r($year);
            // exit();

    	 return view('client.dashboard',['packag'=>$packag,'packagcount'=>$packagcount])
        ->with('year',json_encode($year,JSON_NUMERIC_CHECK))
        ->with('deposit',json_encode($deposit,JSON_NUMERIC_CHECK));
       
    }
    public function Profile()
    {
    	$id= Auth::user()->id;
    	
  
    	$users = DB::table('users')
            ->where('users.id', $id)
            ->rightJoin('customer', 'customer_id', '=', 'users.id')
            ->get();
        // print_r($users);
        // exit();	

     	 return view('client.Profile',['users' => $users]);
    }
    public function Submitprofile(request $request)
    {
        $id=$request->input('id');
    	   $this->validate($request, [
            'address' => 'required',
            'abn' => 'required',
            'name' => 'required',
            'old_img' => 'required',   
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
                'name' => $request->input('name'),
                'profile_pic' => $img];

          print_r($id);
            DB::table('customer')
            ->where('customer_id',$id)
            ->update($data);
         return redirect('/customer')->with('success', 'Record inserted successfully.');
            
    }
    public function idcardPDF($id)
    {

        $pro = DB::table('customer')
             ->where('customer_id', $id)
            ->get();
               
                // print_r($pro[0]);
                // return view('client.pdf',['pro' => $pro]);
                // exit();
            
        $pdf = PDF::loadView('client.pdf',['pro' => $pro]);
      $pdf->setPaper('A5', 'Landscape');
        return $pdf->download('client Card.pdf');
    }
     public function customer_packag_list()
        {   
            
             $data['title'] = 'Packages';
           return view('client.customer_packag_list')->with($data);
        }
     public function customer_packag_view($id)
        {
          $Package =  DB::table('package_user')->where('PackageUser_id', $id)
                ->Join('products', 'package_user.Package_id', '=', 'products.id')->get()->first();
            return view('client.customer_packag_view',['Package'=>$Package]);
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
                                    return '<a href="'.url('/customer/packag/view/').'/'.$Package->PackageUser_id.'" class="btn btn-sm btn-primary">View</a>';
                                })
                            //   ->rawColumns([1,2])
                              ->make();
        }
 
}
