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
    	// print_r($request->Member_names);
    	exit();
    	$this->validate($request, [
            'name' => 'required',
            'CEO_details' => 'required',
            'address' => 'required',
            'business_registration' => 'required',
            'Member_names[]' => 'required',
            'need_funding' => 'required',
            'background_check' => 'required',
        ]);


    }
}
