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

class front extends Controller
{
    public function screenshots()
    {
    	   $data = DB::table('galleryvideos')
            ->where('type', 's')
            ->get();
             $video = DB::table('galleryvideos')
            ->where('type', 'v')
            ->get();
        // print_r($data);
        // exit();

		return view('front.gallery_screenshots',['data'=>$data,'video'=>$video]);
    }
     
    public function product_details($id)
    {
         $data = DB::table('products')
            ->where('id', $id)
            ->get()->first();
            // print_r($data);
            // exit();
       return view('front.product_details',['data'=>$data]);
    }
    public function order_user()
    {
        // print_r($id);
        // exit();
              $country = DB::table('country')->get();   
            // print_r($get);
            // exit();
       return view('front.order_user',['country'=>$country]);

    }
    public function order_usersubmit(Request $request)
    {
       
//         $this->validate($request, [
//             'fname' => 'required',
//             'lname' => 'required',
//              'country' => 'required',
//               'address' => 'required',
//                'State' => 'required',
//                 'City' => 'required',
//                  'Postcode/ZIP' => 'required',
//                   'Phone' => 'required',
//                    'email' => 'required',
//                  ]);
       
//  //order_user     
//         $date=date("Y-m-d h:i:s");
//         $order_user=DB::table('order_user')->insertGetId(
//                          ['fname' => $request->input('fname'),
//                          'lname' => $request->input('lname'),
//                          'country' => $request->input('country'),
//                          'address' => $request->input('address'),
//                          'State' => $request->input('State'),
//                          'City' => $request->input('City'),
//                          'Postcode/ZIP' => $request->input('Postcode/ZIP'),
//                          'Phone' => $request->input('Phone'),
//                          'email' => $request->input('email'),
//                          'created_at' => $date,
//                          ]);
// // package_user
//         // exit();
//          $carts = Cart::session(Auth::user()->id)->getContent();
//         $cart = $carts->toArray();
//        foreach ($cart as $key ) {
//         $ids=$key['id'];
//         $quantity=$key['quantity'];
//          // print_r($key['quantity']);
//           DB::table('package_user')->insert(
//                          ['Package_id' => $ids,
//                          'user_id' => Auth::user()->id,
//                           'quality' => $quantity,
//                          'created_at' => $date,
//                          ]);           

// //transactions
//         $product=DB::table('products')->where('id', $ids)->get()->first();
//          // print_r($product->amount);
//          // exit();
//          $settings = DB::table('settings')->where('settings_id', '1')->get()->first();   
//         $agentcopr = $settings->agentcommission;

//         $agentcommission= $product->amount*$agentcopr/'100'; 
        
//         $customer = DB::table('customer')->where('customer_id', Auth::user()->id)->get()->first();
//        // echo "<pre>";
      
//        $agent = DB::table('agent')->where('agent_id', $customer->agent_id)->get()->first();
//             //  print_r(count($agent));
//             // exit();
//        if (!$agent) {
         
//        $oldcommmissin=$agent->commission;
//        $newcommmissin=$oldcommmissin+$agentcommission;
//            DB::table('agent')->where('agent_id', $customer->agent_id)->update(['commission' => $newcommmissin]);
//        }

//         $amount=($product->amount)-$agentcommission;

//         DB::table('transactions')->insert(['customer_id' => Auth::user()->id, 'agent_id' =>$customer->agent_id,'agentcommission' => $agentcommission,
//             'commission' => $agentcopr, 'amount' => $amount, 'type' => 'd', 'deposittype' => '4', 'created_at' => $date]);
//         }
        // echo "Record inserted successfully.<br/>";
        $order_user="8";
        return redirect('/payment_successful')->with('payment_successful', $order_user);
        

    }

    

    
}