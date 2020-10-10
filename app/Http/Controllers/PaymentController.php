<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\users;
use Storage;
use DB;
use Auth;
use Cart;
use Session;

class PaymentController extends Controller
{
    public function payment_successful()
    {
// checkout
        $order_user=DB::table('order_user')->insertGetId(Session::get('checkout'));
             Cart::clear();
        // print_r(Session::get('checkout'));
        // exit();
        
    	$date=date("Y-m-d h:i:s");
// package_user
         $carts = Cart::session(Auth::user()->id)->getContent();
        $cart = $carts->toArray();

       foreach ($cart as $key ) {
        $ids=$key['id'];
        $quantity=$key['quantity'];
         // print_r($key['quantity']);
          $package_user=DB::table('package_user')->insertGetId(
                         ['Package_id' => $ids,
                         'user_id' => Auth::user()->id,
                          'quality' => $quantity,
                         'created_at' => $date,
                         ]);           
       // exit();
//transactions
        $product=DB::table('products')->where('id', $ids)->get()->first();
      
        $settings = DB::table('settings')->where('settings_id', '1')->get()->first();   
        $agentcopr = $settings->agentcommission;

        $agentcommission= $product->amount*$agentcopr/'100'; 
        
        $customer = DB::table('customer')->where('customer_id', Auth::user()->id)->get()->first();

        $agent = DB::table('agent')->where('agent_id', $customer->agent_id)->get()->first();
         
        if (!$agent) {
         
       $oldcommmissin=$agent->commission;
       $newcommmissin=$oldcommmissin+$agentcommission;
           DB::table('agent')->where('agent_id', $customer->agent_id)->update(['commission' => $newcommmissin]);
       }

        $amount=($product->amount)-$agentcommission;
            // print_r($amount);
            // exit();
        DB::enableQueryLog();
        DB::table('transactions')->insert(['customer_id' => Auth::user()->id, 'agent_id' =>$customer->agent_id,'agentcommission' => $agentcommission,
            'commission' => $agentcopr, 'amount' => $amount, 'type' => 'd', 'deposittype' => '4', 'created_at' => $date]);
        }
        $query = DB::getQueryLog();
        $query = end($query);

        // $order_user="8";
        
        Cart::session(Auth::user()->id)->clear(); 
        Session::flush('checkout');
// ------------------------------------------------------------------------------------------
        $order_user=8;
        if($order_user){
            $data = DB::table('order_user')
                ->where('id', $order_user)
                ->get()->first();  


            // $carts = Cart::session(Auth::user()->id)->getContent();
            // $cart = $carts->toArray(); 
            $products = DB::table('package_user')
                ->where('package_user.PackageUser_id', $package_user)
                ->leftJoin('products', 'package_user.Package_id', '=', 'products.id')
                ->get();   
                 // send mail
                // if (Auth::user()->email) {
                //   $data = array('name'=>Auth::user()->name);
                //      Mail::send('front.payment_successful_mail',$datas, function($message) {
                //      $message->to('abc@gmail.com', 'web_data')->subject
                //       ('Order Successful');
                //      $message->from(Auth::user()->email, Auth::user()->name);
                //     });
                // }
                 // exit();

            return view('front.payment_successful',['data'=>$data,'products'=>$products]);
           
        }
    }
    public function payment_cancel()
    {
        Session::flash('message_e','Your Transaction  in Field Pulse Try Again');
        return redirect('/checkout');
       
    }
}