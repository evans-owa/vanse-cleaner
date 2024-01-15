<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function gory(
    ){
        $category = category::all();
        return view('myServices.categories.addCategory', compact('category'));
    }

    public function more(Request $request)
    {

        $request->validate([
            'image'=>'required',
            'name'=>'required',
            'Areas'=>'required',
            'Description'=>'required',
        ]);

        $category = new category();
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category/',$filename);
            $category->image = $filename;

        }

        $category->name=$request->input('name');
        $category->Areas=$request->input('Areas');
        $category->description=$request->input('Description');
        $category->status=$request->input('Status') == TRUE?'1':'0';
        $category->meta_title=$request->input('metatitle');
        $category->save();

        //return redirect('addCategory')->with('status','category added succesfully');


        if($category){

            return redirect('addCategory')->with('status', "category added succefully");
        }
        else{
            return back()->with('Failed', 'Some thing went wrong');
        }
    }

    public function editcategory($id){

        $category = category::find($id);
        return view('myServices.categories.edit', compact('category'));
    }

    public function update(Request $request, $id){

        $category = category::find($id);

        if($request->hasFile('image'))
        {
            $path = 'assets/uploads/category/'.$category->image;

            if(File::exists($path))
            {
                File::delete($path);
            }
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time().'.'.$ext;
            $file->move('assets/uploads/category/',$filename);
            $category->image = $filename;
        }
        $category->name=$request->input('name');
        $category->Areas=$request->input('Areas');
        $category->description=$request->input('Description');
        $category->status=$request->input('Status') == TRUE?'1':'0';
        $category->meta_title=$request->input('metatitle');
        $category->update();

        return redirect('addCategory')->with('status', "category updated succefully");
    }

    public function destroy($id){

        $category = category::Find($id);

        if($category->image){

            $path = 'assets/uploads/category/'.$category->image;
            if(File::exists($path))
            {
                File::delete($path);
            }

            $category->delete();
            return redirect('addCategory')->with('status', "category deleted successfully");

        }
    }
}
