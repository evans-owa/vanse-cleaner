<?php

namespace App\Http\Controllers\staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\staff;
use App\Models\service1;
use Illuminate\Support\Facades\File;

class staffcontroller extends Controller
{
    public function staff(){

        $staff = staff::all();
        return view('staff.Veiwstaff', compact('staff'));
    }

    public function addstaffs(){

        $Service = service1::all();
        return view('staff.addstaff', compact('Service'));
    }

    public function insert(Request $request)
    {

        $request->validate([

        'id'=>'required',
        'image'=>'required',
        'Fullname'=>'required',
        'Email'=>'required',
        'service_name'=>'required',
        'gender'=>'required',
        'Salary'=>'required',
        ]);


        $staff = new staff();

        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/staffs/',$filename);
            $staff->image = $filename;
        }
        $staff->staffid=$request->input('id');
        $staff->Fullname=$request->input('Fullname');
        $staff->Email=$request->input('Email');
        $staff->service_name=$request->input('service_name');
        $staff->gender=$request->input('gender');
        $staff->Salary=$request->input('Salary');
        $staff->save();

        return redirect('Veiwstaff')->with('status',"staff added successfully");
    }
    // deleting of staffs
    public function desto($id){

        $staff = staff::Find($id);

        if($staff->image){

            $path = 'assets/uploads/staffs/'.$staff->image;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $staff->delete();
            return redirect('Veiwstaff')->with('status',"staff deleted successfully");

        }
    }

    public function staffedit($id){

        $staff = staff::find($id);
        $Servicename = service1::all();
        return view('staff.edit', compact('staff', 'Servicename' ));

        $Service = service1::all();
    }

    public function updatestaff(Request $request, $id){

        $staff = staff::find($id);

        if($request->hasFile('image'))
        {
            $path = 'assets/uploads/category/'.$staff->image;

            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/staffs/',$filename);
            $staff->image = $filename;
        }
        $staff->staffid=$request->input('id');
        $staff->Fullname=$request->input('Fullname');
        $staff->Email=$request->input('Email');
        $staff->service_name=$request->input('service_name');
        $staff->gender=$request->input('gender');
        $staff->Salary=$request->input('Salary');
        $staff->update();

        return redirect('Veiwstaff')->with('status', "staff profile updated succefully");
    }

}
