<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service1;
use App\Models\category;
use Illuminate\Support\Facades\File;

class Service1Controller extends Controller
{
    public function index(){

        $Service = service1::all();
        return view('myServices.service1.index', compact('Service'));
    }

    public function add(){

        $category = category::all();
        return view('myServices.service1.add', compact('category'));
    }

    public function insert(Request $request){

        // validation of the must fields
        $request->validate([
            'category_id'=>'required',
            'idservice'=> 'required',
            'servicename'=>'required',
            'Description'=>'required',
            'image'=>'required',
            'Category'=>'required',
            'keyword'=>'required',
            'price'=>'required',
        ]);

        // transfering to the database
        $services = new service1();

            //image transformation to the website
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/service1/',$filename);
            $services->image = $filename;
        }
        $services->category_id = $request->input('category_id');
        $services->idservice = $request->input('idservice');
        $services->service_name = $request->input('servicename');
        $services->description=$request->input('Description');
        $services->status=$request->input('Status') == TRUE ? '1':'0';
        $services->category=$request->input('Category');
        $services->Trending=$request->input('trending')== TRUE ? '1':'0';
        $services->meta_keywords=$request->input('keyword');
        $services->Price=$request->input('price');
        $services->save();

        return redirect('service1')->with('status', "services added succesfully");
        }
        // for displaying the file to be editted
        public function edit($id){

            $products = service1::Find($id);
            return view('myServices.service1.edit', compact('products'));
        }


        // conducting the deletion of the product
    public function remove($id){

            $services =service1::Find($id);

    if($services->image)
    {
        $path = 'assets/uploads/service1/'.$services->image;
            if(File::exists($path))
            {
                File::delete($path);
            }
            $services->delete();
            return redirect('service1')->with('status', "service deleted successfully");
        }
    }

        //conducting the update to the files
    public function Update(Request $request, $id
    ){
        $services = service1::find($id);


        if($request->hasFile('image'))
        {

            $path = 'assets/uploads/service1/'.$services->image;

            if(File::exists($path))
            {
                File::delete($path);
            }

            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/service1/',$filename);
            $services->image = $filename;
        }
        $services->category_id = $request->input('category_id');
        $services->idservice = $request->input('idservice');
        $services->service_name = $request->input('servicename');
        $services->description=$request->input('Description');
        $services->status=$request->input('Status') == TRUE ? '1':'0';
        $services->category=$request->input('Category');
        $services->Trending=$request->input('trending')== TRUE ? '1':'0';
        $services->meta_keywords=$request->input('keyword');
        $services->Price=$request->input('price');
        $services->update();

        return redirect('service1')->with('status', "services updated succesfully");
    }

}
