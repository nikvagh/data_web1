<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PolipayController extends Controller
{
     public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }

    public function success(Request $request)
    {
        echo "<pre>";
        print($request);
        exit;

        $provider = new ExpressCheckout();
        $response = $provider->getExpressCheckoutDetails($request->token);
        if (in_array(strtoupper($response['ACK']), ['SUCCESS', 'SUCCESSWITHWARNING'])) {
            dd('Your payment was successfully. You can create success page here.');
        }
        dd('Something is wrong.');
    }
}
