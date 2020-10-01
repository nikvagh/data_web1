<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\users;
use Storage;
use DB;


class Charity extends Controller
{
    public function index()
    {
    	return view('front.Charity');
    }
    public function Charity(Request $request)
    {    
    
    	$this->validate($request, [
            'name' => 'required',
            'CEO_details' => 'required',
            'address' => 'required',
            'business_registration' => 'required',
            // 'Member_names[]' => 'required',
            'need_funding' => 'required',
            'background_check' => 'required',
        ]);
             // print_r($request->input('Member_names'));
    	

        $Member_names=implode(', ', $request->input('Member_names'));
             // exit();
                $date=date("Y-m-d h:i:s");
		        DB::table('charity')->insert(
		                    	    ['name' => $request->input('name'),
		                    	     'CEO_details' => $request->input('CEO_details'),
		                    	     'address' => $request->input('address'),
		                    	     'business_registration' => $request->input('business_registration'),
		                    	     'Member_names' => $Member_names,
		                    	     'need_funding' => $request->input('need_funding'),
		                    	     'background_check' => $request->input('background_check'),
		                    	     'created_at'=>$date,
		                    	    ]
		                    	);
		        // echo "Record inserted successfully.<br/>";
		        return redirect('/Charity')->with('success','Record inserted successfully.');



    }
}
