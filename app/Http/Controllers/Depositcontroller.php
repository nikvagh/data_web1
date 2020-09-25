<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\users;
use Storage;
use DB;
use PDF;
use Illuminate\Support\Facades\Auth;

class Depositcontroller extends Controller
{
    public function transaction()
    {
        $data = DB::table('users')
            // ->where('transactions.customer_id', Auth::user()->id)
            ->join('transactions', 'users.id', '=', 'transactions.customer_id')
            ->join('agent', 'transactions.agent_id', '=', 'agent.agent_id')
            ->get();
           
        // print_r($data);
        // exit();

        return view('client.taranjeson', ['data' => $data]);
    }
    public function taranjeson_viwe($id)
    {
        $data = DB::table('users')
            ->where('transactions.transactions_id', $id)
            ->join('transactions', 'users.id', '=', 'transactions.customer_id')
            ->join('agent', 'transactions.agent_id', '=', 'agent.agent_id')
            ->get();
        // print_r($data);
        // exit();
        return view('client.taranjeson_viwe', ['data' => $data]);
    }
    public function index()
    {
        return view('client.deposit');
    }
    public function carddetails()
    {
        $get = DB::table('customer')
            ->where('customer_id', Auth::user()->id)
            ->get();
        // print_r($get);
        // exit();
        return view('client.cardpayment', ['get' => $get]);
    }
    public function Invoice($id)
    {
          $get = DB::table('settings')
            ->where('settings_id','1')
            ->get();    
        // print_r($get);
        // exit();  
             $customer = DB::table('customer')
            ->where('customer_id', Auth::user()->id)
            ->get();
         
             $data = DB::table('users')
            ->where('transactions.customer_id', Auth::user()->id)
            ->join('transactions', 'users.id', '=', 'transactions.customer_id')
            ->join('agent', 'transactions.agent_id', '=', 'agent.id')
            ->get();
        // echo "<pre>";
        // print_r($data);
        // exit();
        return view('client.invoice',['get' => $get,'customer' => $customer,'data' => $data]);
        
    }
    public function Invoicepdf()
    {

          $get = DB::table('settings')
            ->where('settings_id','1')
            ->get();    
        // print_r($get);
        // exit();  
             $customer = DB::table('customer')
            ->where('customer_id', Auth::user()->id)
            ->get();
         
             $data = DB::table('users')
            ->where('transactions.customer_id', Auth::user()->id)
            ->join('transactions', 'users.id', '=', 'transactions.customer_id')
            ->join('agent', 'transactions.agent_id', '=', 'agent.id')
            ->get();

// return view('client.invoicepdf',['get' => $get,'customer' => $customer,'data' => $data]);
// exit();
         $pdf = PDF::loadView('client.invoicepdf',['get' => $get,'customer' => $customer,'data' => $data]);
  
        return $pdf->download('1.pdf');
    }
    public function cardinsert(Request $request)
    {

        $this->validate($request, [
            'amount' => 'required',
            'card_number' => 'required',
            'expiry_month' => 'required|max:2',
            'expiry_year' => 'required',
            'cvv' => 'required',
            'card_name' => 'required',
        ]);
// echo "string";
//         exit();
          $settings = DB::table('settings')->where('settings_id', '1')->get();   
        $agentcopr = $settings[0]->agentcommission;
        $agentcommission= $request->input('amount')*$agentcopr/'100'; 
        
        $customer = DB::table('customer')->where('customer_id', Auth::user()->id)->get();
       // echo "<pre>";
      
       $agent = DB::table('agent')->where('agent_id', $customer[0]->agent_id)->get();
        //  print_r(count($agent));
        // exit();
       if (!count($agent)=="0") {
         
       $oldcommmissin=$agent[0]->commission;
       $newcommmissin=$oldcommmissin+$agentcommission;
           DB::table('agent')->where('agent_id', $customer[0]->agent_id)->update(['commission' => $newcommmissin]);
       }



// print_r($newcommmissin);
// exit();
        
        
        if ($request->input('agent_id')) {
            $agent = $request->input('agent_id');
        } else {
            $agent = '';
        }
        $amount=($request->input('amount'))-$agentcommission;
        $id = DB::table('carddetails')->insertGetId([
            'card_number' => $request->input('card_number'),
            'expiry_month' => $request->input('expiry_month'),
            'expiry_year' => $request->input('expiry_year'),
            'cvv' => $request->input('cvv'),
            'card_name' => $request->input('card_name'),
        ]);
        $date = date("Y-m-d h:i:s");
        // DB::enableQueryLog();
        DB::table('transactions')->insert(['customer_id' => Auth::user()->id, 'agent_id' => $agent,'agentcommission' => $agentcommission,
            'commission' => $agentcopr, 'amount' => $amount, 'type' => 'd', 'deposittype' => '2', 'created_at' => $date]);
        

// $query = DB::getQueryLog();
// $lastQuery = end($query);
// print_r($lastQuery);

        // print_r($id);
        // exit();
        echo "Record inserted successfully.<br/>";
        return redirect('/transaction');
    }
}
