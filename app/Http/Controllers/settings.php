<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\users;
use Storage;
use DB;


class Settings extends Controller
{
       public function adminsettings()
    {
        //echo $id;

        $data = DB::table('settings')
            ->where('settings_id', '1')
            ->get()->first();;
        // print_r($data);
        // exit();
        return view('admin.settings', ['data' => $data]);
    }
    public function updatedata(request $request)
    {
        $id = $request->input('id');

           $request->validate([
            'company_name' => ['required'],
            'Email' => ['required'],
            'mobile_number' => ['required'],
            'address' => ['required'],
            'twitter' => ['required'],
            'facebook' => ['required'],
            'instagram' => ['required'],
            'skype' => ['required'],
            'linkedin' => ['required'],
            'map_key' => ['required'],
            'map_ip1' => ['required'],
            'map_ip2' => ['required'],

            ]); 
       
        $data = ['company_name' =>$request->input('company_name')  ,  'Email' =>$request->input('Email') ,'mobile_number' =>$request->input('mobile_number') ,'address' =>$request->input('address') ,'terms_conditions' =>$request->input('terms_conditions'),'twitter' =>$request->input('twitter') ,'facebook' =>$request->input('facebook') ,'instagram' =>$request->input('instagram') ,'skype' =>$request->input('skype') ,'linkedin' =>$request->input('linkedin') ,'map_key' =>$request->input('map_key') ,'map_ip1' =>$request->input('map_ip1') ,'map_ip2' =>$request->input('map_ip2') , ];
      

        // echo "<pre>";
        // print_r($data);
        // exit();
        DB::table('settings')
            ->where('settings_id', $id)
            ->update($data);

        echo "Record update successfully.<br/>";
         return redirect('/admin')->with('success', 'Settings update successfully.');
    }
}


