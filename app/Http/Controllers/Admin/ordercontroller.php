<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderService;

class ordercontroller extends Controller
{
    public function orderAdmin()
    {
        $order = Order::where('status','0')->get();
        return view('admin.orders', compact('order'));

    }

        public function Toa($id){

            $orderADMIN2 =order::Find($id);
            $orderADMIN2->delete();
            return redirect('admin.orders')->with('status', "order deleted successfully");
        }

        public function onaOrders($id)
        {
            $adminorder = Order::where('id', $id)->first();
            return view('admin.view-order', compact('adminorder'));
        }
        public function orgservice($orgid)
        {
            $adminOrg = OrderService::where('orgid', $orgid)->first();
            return view('admin.view-order', compact('adminOrg'));
        }

        public function OnaServices()
        {
            $onaservice = OrderService::all();
            return view('admin.viewOrderservice', compact('onaservice'));
        }

        public function updateRequest(Request $request, $id)
        {
            $order = Order::find($id);
            $order->status = $request->input('order_status');
            $order->update();

        return redirect('admin.orders')->with('status', "Request Updated successfully");
        }

        public function requestHistory()
        {
            $order = Order::where('status','1')->get();
            return view('admin.historyrequest', compact('order'));
        }

}
