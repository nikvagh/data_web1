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

class addcart extends Controller
{
   public function addcart($id)
    {
           $data = DB::table('products')
            ->where('id', $id)
            ->get()->first();   
            // print_r($data);
            // exit();
            Cart::session(Auth::user()->id)->add(array(
                'id' => $data->id, // inique row ID
                'name' => $data->name,
                'price' =>$data->amount,
                'quantity' => 1,
                'attributes' => array()
            ));
            // print_r($data->id);
    }
    public function getcart()
    {

        // Cart::remove(3);
        $id=Auth::user()->id;
        // print_r( Cart::session($id)->getTotalQuantity());
        // $summedPrice =Cart::session($id)->get();
        // $cartCollection = Cart::getContent();

        // $cart = Cart::session($id)->get();

        $carts = Cart::session($id)->getContent();
        $cart = $carts->toArray();



        print_r($cart);
      
    }

    public function clear_cart()
    {
        Cart::clear();
        Cart::session(Auth::user()->id)->clear();  
    }
   }
