<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServiceController extends Controller
{
    public function store(){

        return view('myServices.addServices');
    }

    function serviceadd(Request $request){

        $request->validate([
            'serviceid'=>'required',
            'service'=>'required',
            'Description'=>'required',
            'Category'=>'required'
        ]);

        $query = DB::table('services')->insert([
            'service_id'=>$request->input('serviceid'),
            'service_name'=>$request->input('service'),
            'description'=>$request->input('Description'),
            'category'=>$request->input('Category'),
        ]);

        if($query){

        return back()->with('success', 'data added to store succefully');
    }else {
        return back()->with('fail', 'data NOT added to teh database');
    }
    }

    function deleteService(){

        
    }

}
