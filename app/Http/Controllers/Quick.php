<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\QuickMessage;

class Quick extends Controller
{
    //

    function quickmessage(Request $request){

        $request->validate([
            'email'=>'required|email|unique:quickmessage',
            'location'=>'required',
            'serviceneeded'=>'required'
        ]);

        $query = DB::table('quickmessage')->insert([
            'email'=>$request->input('email'),
            'location'=>$request->input('location'),
            'service needed'=>$request->input('serviceneeded'),
        ]);

        if($query){

            return back()->with('success','Message sent succefully');
        }
        else{
                return back()->with('Failed', 'Some thing went wrong');
        }
    }

    public function delete($customer_id){

        $quick = QuickMessage::Find($customer_id);

        $quick->delete();
            return redirect('message')->with('status',"deleted successfully");

    }
}
