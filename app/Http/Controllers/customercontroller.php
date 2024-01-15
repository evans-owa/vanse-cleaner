<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;

class customercontroller extends Controller
{

    public function customerView(){

        $customer = customer::all();
        return view('dashboard', compact('customer'));
    }
}
