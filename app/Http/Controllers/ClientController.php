<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\model\Admin;
use Auth;

class ClientController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    {
        return view('client.dashboard');
    }

}
