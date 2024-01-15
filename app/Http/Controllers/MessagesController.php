<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuickMessage;

class MessagesController extends Controller
{
    function show(){
    }
        public function fastmessage(){

        $data = QuickMessage::all();
        return view('message', compact('data'));

        }

}
