<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Srmklive\PayPal\Services\ExpressCheckout;
// use Srmklive\PayPal\Services\ExpressCheckout;
use DB;
use Auth;
use Cart;
use PayPal;

class PaypalController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $price=Cart::session(Auth::user()->id)->getTotal();
        // $data = [];
        $data['items'] = [
            [
                'name' => 'ItSolutionStuff.com',
                'price' => $price,
                'desc'  => 'Description for ItSolutionStuff.com',
                'qty' => 1
            ]
        ];
  // echo (Cart::session(Auth::user()->id)->getTotal());
  // exit();
        $data['invoice_id'] = 1;
        $data['invoice_description'] = "Order #{$data['invoice_id']} Invoice";
        $data['return_url'] = route('paypal.success');
        $data['cancel_url'] = route('paypal.cancel');
        // print_r($price);
        // exit();
        $data['total'] = $price;

        // $provider = new PayPalClient;
        // $provider = PayPal::setProvider($data);

        $provider = new ExpressCheckout();
        $response = $provider->setExpressCheckout($data);

        // print_r($response);
        // exit();
        
        return redirect($response['paypal_link']);
        // echo "<pre>";
        // print_r($provider);
        // exit;
        // echo "ddd";
    }

    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }

    public function success(Request $request)
    {
        // echo "<pre>";
        // print($request);
        // exit;

        $provider = new ExpressCheckout();
        $response = $provider->getExpressCheckoutDetails($request->token);
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            dd('Your payment was successfully. You can create success page here.');
        }
        dd('Something is wrong.');
    }

}
