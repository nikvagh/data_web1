<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use App\models\Customer;

class FackController extends Controller
{
    public function fuser()
    {
    	User::factory()->count(10)->create();
    	// Customer::factory()->count(10)->create();

    }
}
