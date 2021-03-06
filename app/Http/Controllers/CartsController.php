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
use Mail;
use Session;

class CartsController extends Controller
{
 
   public function addcart(Request $request,$id)
    {
        $path=$request->input('path');
             // return redirect($path)->with('cart', 'Product been Added to your Cart.');
             // exit();
        $products_id=$request->input('id');

           $data = DB::table('products')
            ->where('id', $products_id)
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
            Session::flash('message_s','Product been Added to your Cart');


             return redirect($path);

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

        // print_r($cart);
        // exit();
        return view('front.cart',['cart'=>$cart]);

      
    }

    public function clear_cart($id)
    {
        Cart::session(Auth::user()->id)->remove($id);
        // Cart::clear();
        // Cart::session(Auth::user()->id)->clear();  
       // return redirect('/getcart')->with('success', 'Product successfully Add in Cart.');
        echo json_encode(true);


    }
    public function pluscart($id)
    {
        

        // echo $id;exit;

        Cart::session(Auth::user()->id)->update($id, array(
          'quantity' => +1, 
        )); 

        echo json_encode(true);

  //    Cart::session(Auth::user()->id)->update($id, array(
        //   'quantity' => +1, 
        // ));  

        

        // return redirect('/getcart');


    }
    public function minuscart($id)
    {

        Cart::session(Auth::user()->id)->update($id, array(
          'quantity' => -1, 
        )); 
        echo json_encode(true);
           
             // return redirect('/getcart');

    }
      
    public function load_cart_block(Request $request){
        $carts = Cart::session(Auth::user()->id)->getContent()->sortBy('id');
          $data = $carts->toArray();
       
          
        $data['view_data'] = view('front.cart_block',['data'=>$data])->render();
        return response()->json($data);
    return redirect('/');
    }
  
    // return redirect('order_user');

    
   
    public function remove_cart()
    {
         Cart::clear();
        Cart::session(Auth::user()->id)->clear();  
       return redirect('/');
    }
   }
