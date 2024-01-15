<?php

namespace App\Http\Controllers\Frontservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\service1;

class UserController extends Controller
{
    public function myorder()
    {
        $orders = Order::where('user_id', Auth::id())->get();
        return view('frontside.orders.index', compact('orders'));
    }

    public function view($id)
    {
        $userorder =Order::where('id', $id)->where('user_id', Auth::id())->first();
        return view('frontside.orders.view', compact('userorder'));
    }


    public function userview($wait_id)
    {
        $userview = OrderService::where('wait_id', Auth::id())->first();
        return view('frontside.orders.view', compact('userview'));
    }
}

