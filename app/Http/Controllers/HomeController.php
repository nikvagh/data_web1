<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Agent;
use App\Models\Customer;
use DB;
use Mail;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }

    public function agent_register(){
      
        return view('agent_register');
    }

    public function agent_register_save(request $request){

        // echo "111";exit;

        $request->validate([
            // 'name' => 'required',
            'phone' => 'required',
            // 'email' => 'required|email:rfc,dns',
            'email' => 'required|email:rfc|unique:users,email',
            'password' => 'required|min:6',
            'business_name' => 'required',
            'abn' => 'required',
            'type_of_industry' => 'required',
        ]);

        $user = User::create([
            'name' => $request->business_name,
            'email' => $request->email,
            'role' => 3,
            'password' => bcrypt($request->password),
        ]);

        $agent_id = $user->id;
        $agent = Agent::create([
            'agent_id' => $agent_id,
            'business_name' => $request->business_name,
            'abn' => $request->abn,
            'type_of_industry' => $request->type_of_industry
        ]);
            
        // echo "<pre>";
        // print_r($user);
        // exit;

        $request->session()->flash('message_s','Account register Successfully!');
        return redirect('/agent_register');

        // print_r($Request->all());

        // return view('agent_register_save');
    }


    public function customer_register($id=""){
        return view('customer_register')->with(['agent_id'=>$id]);
    }

    public function customer_register_save(request $request){

        // print_r($_POST);
        // exit;

        $request->validate([
            'name' => 'required',
            'phone' => 'required',
            // 'email' => 'required|email:rfc,dns',
            'email' => 'required|email:rfc|unique:users,email',
            'password' => 'required|min:6',
            'address' => 'required',
            'abn' => 'required',
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 4,
            'password' => bcrypt($request->password),
        ]);

        $customer_id = $user->id;
        $agent = Customer::create([
            'agent_id' => $request->agent_id,
            'customer_id' => $customer_id,
            'address' => $request->address,
            'abn' => $request->abn,
            'profile_pic' => ''
        ]);

        // echo "<pre>";
        // print_r($user);
        // exit;

        $request->session()->flash('message_s','Account register Successfully!');
        return redirect('/customer_register');

        // print_r($Request->all());

        // return view('agent_register_save');
    }
    public function contact_us(request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $date=date("Y-m-d h:i:s");
        $alldata=['name' => $request->input('name'),
                         'email' => $email=$request->input('email'),
                         'subject' => $request->input('subject'),
                         'message' => $request->input('message'),
                         'created_at' => $date,];
        DB::table('contactus')->insert( $alldata);
        // echo "string";
        // exit();
        $data = array('name'=>$request->input('name'),
                         
                         'subject' => $request->input('subject'),
                         'message' => $request->input('message'),
                         'created_at' => $date,);
    
      // Mail::send('mail', $data, function($message,$email) {
      //    $message->to('php.devloper666@gmail.com', 'BizLand')->subject
      //       ('Contact Us');
      //    $message->from('$email','Virat Gandhi');
      // });
      // echo "HTML Email Sent. Check your inbox.";
        return redirect('/contact_us')->with('success', 'Your Message Has Been Sent.');

    }
    
}
