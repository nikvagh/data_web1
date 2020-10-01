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

class Customer extends Controller
{
    public function index()
    {
    	 
    	 return view('client.dashboard');
       
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
}
