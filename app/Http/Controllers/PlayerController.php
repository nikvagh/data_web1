<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    //
    public function index()
    {
        // return view('admin');
        echo "player";
        return view('home');
        // exit;
    }

}
