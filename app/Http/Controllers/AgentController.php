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
    public function addcustomary()
    {
             return view('agent.addcustomary');
        
    }
}
