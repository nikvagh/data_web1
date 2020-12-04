<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\users;
use Carbon\Carbon;
use Storage;
use DB;
use Auth;
use Cart;
use Session;
use Validator;
    

class Frontcontroller extends Controller
{
     public function home()
    {
        $INVESTORS = DB::table('transactions')->where([['type', 'd']])
                   ->join('customer', 'transactions.customer_id', '=', 'customer.customer_id')
                   ->selectRaw('*, sum(amount) as sum')
                   ->groupBy('transactions.customer_id') ->take(10)->get();

                     $products = DB::table('products')->get();

        $transactionsbyday =  DB::table('transactions')->whereDate('transactions.created_at', Carbon::today())->where('type', 'w') ->join('agent', 'agent.agent_id', '=', 'transactions.agent_id')->select('transactions_id','amount','business_name','profile_pic','agent.agent_id')->orderBy('transactions_id','desc') ->take(5)->get();

        $transactionsbymonth =  DB::table('transactions')-> whereMonth('transactions.created_at', date('m'))->where('type', 'w')->join('agent', 'agent.agent_id', '=', 'transactions.agent_id')->select('transactions_id','amount','business_name','profile_pic','agent.agent_id')->orderBy('transactions_id','desc') ->take(5)->whereYear('transactions.created_at', date('Y'))->get(['created_at']);

        

        $UsersCount= DB::table('users')->get()->count();
        $Investment= DB::table('transactions')->where('type', 'd')->select('amount')->get();

        $min= DB::table('agent_commission_rules')->get()->min('from');
        $max= DB::table('agent_commission_rules')->get()->max('to');
        // print_r($INVESTORS);
        // exit();
        // return view('front._home', ['products' => $products]);
        return view('front.home', ['products' => $products,'transactionsbyday' => $transactionsbyday,'transactionsbymonth' => $transactionsbymonth,'UsersCount' => $UsersCount,'Investment' => $Investment,'min' => $min,'max' => $max,'INVESTORS' => $INVESTORS]);
    }
    public function get_recod()
    { 
        $amount= $_GET["amount"];
        $earning_type= $_GET["earning_type"];
      // print_r($amount);
        // DB::enableQueryLog();
        $products = DB::table('agent_commission_rules')->where([['from', '<=', $amount],['to', '>=', $amount]])->get()->first();
        // dd(DB::getQueryLog());

        // print_r($products);
        // exit();
        // foreach ($products as $key ) {
        //     // echo $key->to;
        //     if ($key->to <= $amount && $key->from >= $amount) {
        //         // print_r($key);
        //         // echo $key->earning;
        //         // return $key;
        //         // return $key;
        //     }
        // }


        $result = array("month"=>$products->earning/12,"daily"=>$products->earning/365);
        echo json_encode($result);
        
    }
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
                $total= $request->get('total');
                // $total= '50';
                $SuccessURL= url('payment_successful');
                $CancellationURL= url('/payment/cancel');
                $json_builder = '{
                    "Amount":"'.$total.'",
                    "CurrencyCode":"AUD",
                    "MerchantReference":"CustomerRef12345",
                    "MerchantHomepageURL":"https://www.mycompany.com",
                    "SuccessURL":"'.$SuccessURL.'",
                    "FailureURL":"'.$CancellationURL.'",
                    "CancellationURL":"'.$CancellationURL.'",
                    "NotificationURL":"'.url('/').'" 
                }';
              
                $auth = env('Authorization');
                $header = array();
                $header[] = 'Content-Type: application/json';
                $header[] = 'Authorization: Basic '.$auth;
                 
                $ch = curl_init("https://poliapi.apac.paywithpoli.com/api/v2/Transaction/Initiate");
                //See the cURL documentation for more information: http://curl.haxx.se/docs/sslcerts.html
                //We recommend using this bundle: https://raw.githubusercontent.com/bagder/ca-bundle/master/ca-bundle.crt
                curl_setopt( $ch, CURLOPT_CAINFO, "ca-bundle.crt");
                curl_setopt( $ch, CURLOPT_SSLVERSION, CURL_SSLVERSION_TLSv1_2);
                curl_setopt( $ch, CURLOPT_HTTPHEADER, $header);
                curl_setopt( $ch, CURLOPT_HEADER, 0);
                curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, FALSE);
                curl_setopt( $ch, CURLOPT_POST, 1);
                // curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, false);
                curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_builder);
                curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 0);
                curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close ($ch);
                $json = json_decode($response, true);
                if (isset($json['NavigateURL'])) {
                   return redirect($json["NavigateURL"]);
                }else{
                   return redirect('payment/testing');
                }
               
                 
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
    public function subscribe_uesr()
    {
        $validator = Validator::make(request()->all(), [
                'email' => 'required|email|unique:subscribes'
        ]);
        if ($validator->fails()) {
            return response()->json(['status' => '310', 'message' => $validator->errors()->first()]);
        }

        if(DB::table('subscribes')->insert(
            ['email' => request()->input('email'),'created_at' =>  date('Y-m-d H:i:s'),]  
        )){
            return response()->json(['status' => '200', 'message' => 'Email subscribe successfully.']);
        }

    }
}
