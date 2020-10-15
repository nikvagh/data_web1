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

class Frontcontroller extends Controller
{
    public function contact()
    {
        $settings = DB::table('settings')
            ->where('settings_id', '1')
            ->get()
            ->first();
        // print_r($settings);
        // exit();

        return view('front.contact_us', ['settings' => $settings]);
    }
    public function contact_us(request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $date = date("Y-m-d h:i:s");
        $alldata = ['name' => $request->input('name'), 'email' => ($email = $request->input('email')), 'subject' => $request->input('subject'), 'message' => $request->input('message'), 'created_at' => $date];
        DB::table('contactus')->insert($alldata);
        // echo "string";
        // exit();
        $data = ['name' => $request->input('name'), 'subject' => $request->input('subject'), 'message' => $request->input('message'), 'created_at' => $date];

        // Mail::send('mail', $data, function($message,$email) {
        //    $message->to('php.devloper666@gmail.com', 'BizLand')->subject
        //       ('Contact Us');
        //    $message->from('$email','Virat Gandhi');
        // });
        // echo "HTML Email Sent. Check your inbox.";
        return redirect('/contact_us')->with('success', 'Your Message Has Been Sent.');
    }

    public function home()
    {
        $products = DB::table('products')->paginate(4);
        // print_r($products);
        // exit();
        return view('front.home', ['products' => $products]);
    }
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

        return view('front.gallery_screenshots', ['data' => $data, 'video' => $video]);
    }

    public function product_details($id)
    {
        $data = DB::table('products')
            ->where('id', $id)
            ->get()
            ->first();
        // print_r($data);
        // exit();
        return view('front.product_details', ['data' => $data]);
    }
    public function order_user()
    {
        $country = DB::table('country')->get();
        $payment = DB::table('customer')
            ->where('customer_id', Auth::user()->id)
            ->get()
            ->first();

        // print_r($payment->wallet);
        // exit();
        return view('front.checkout', ['country' => $country, 'payment' => $payment]);
    }
    public function order_usersubmit(Request $request)
    {
        $this->validate($request, [
            'Payment_Meaning' => 'required|wallet_balance',
            'fname' => 'required',
            'lname' => 'required',
            'country' => 'required',
            'address' => 'required',
            'State' => 'required',
            'City' => 'required',
            'Postcode/ZIP' => 'required',
            'Phone' => 'required',
            'email' => 'required',
        ],[
    'wallet_balance' => 'Wallet Balance is Not Sufficient!', // <---- pass a message for your custom validator
  ]);
        $date = date("Y-m-d h:i:s");
        $checkout_data = [
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'country' => $request->input('country'),
            'address' => $request->input('address'),
            'State' => $request->input('State'),
            'City' => $request->input('City'),
            'Postcode/ZIP' => $request->input('Postcode/ZIP'),
            'Phone' => $request->input('Phone'),
            'email' => $request->input('email'),
            'created_at' => $date,
        ];
        Session::put('checkout', $checkout_data);

        $payment = $request->get('Payment_Meaning');
        if ($payment == "Paypal") {
                // Paypal URL
        
                return redirect('/paypal');


        }
         elseif ($payment == "Polipay") {
 // Polipay URL
            echo "Polipay";
        }
         else {
            $wallet_balance = substr($request->get('Payment_Meaning'), 7);

            if ($wallet_balance >= $request->get('total')) {
                // echo "string";
                DB::table('customer')
                    ->where('customer_id', Auth::user()->id)
                    ->update(['wallet' => $wallet_balance - $request->get('total')]);
                return redirect('/payment_successful');
            }
        }
    }
}
