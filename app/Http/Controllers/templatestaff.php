<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Staff;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class templatestaff extends Controller
{
    //function newusers(){
        //return view('newstaff');
    //}

    function newadd(Request $request){

        $request->validate([
            'id'=>'required',
            'profilephoto'=>'required',
            'name'=>'required',
            'email'=>'required|email|unique:staffs',
            'special'=>'required',
            'gender'=>'required',
            'salary'=>'required'
        ]);



        $query = DB::table('staffs')->insert([
            'staff_id'=>$request->input('id'),
            'Image'=>$request->input('profilephoto'), //first name from  serve table itself
            'Full name'=>$request->input('name'),
            'Email'=>$request->input('email'),
            'Speciality_name'=>$request->input('special'),
            'gender'=>$request->input('gender'),
            'Salary'=>$request->input('salary')
        ]);

        if($query){

            return back()->with('success','New Staff added succefully');
        }
        else{
            return back()->with('Failed', 'Some thing went wrong');
        }
    }

    public function desto($id){

        $$query = Staff::Find($id);

            $$query->delete();
            return redirect('newstaff')->with('status', "category deleted successfully");

        }


}
