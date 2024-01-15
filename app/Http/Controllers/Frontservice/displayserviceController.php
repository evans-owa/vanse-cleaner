<?php

namespace App\Http\Controllers\Frontservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\service1;
use App\Models\category;

class displayserviceController extends Controller
{
    public function showservice()
    {
        $trending_service =service1::where('Trending', '1')->take(5)->get();
        $glass_service = service1::where('category', 'Glass cleaning')->get();
        $house_service = service1::where('category', 'House cleaning')->get();
        $commercial_service = service1::where('category', 'Commercial cleaning')->get();
        $industrial_service = service1::where('category', 'Industrial cleaning')->get();
        return view('services', compact('trending_service','glass_service','house_service','commercial_service','industrial_service'));
    }

    public function showsoncontacts()
    {
        $glass_cleaning = service1::where('category', 'Glass cleaning')->take(3)->get();
        return view('contacts', compact('glass_cleaning'));
    }

    public function categoryshow()
    {
        $category = category::where('status', '0')->get();
        return view('categorydisplay.category',compact('category'));
    }

    public function viewcategory($name)
    {
        if(category::where('name', $name)->exists())
        {
            $category = category::where('name', $name)->first();
            $cateService = service1::where('category_id', $category->id)->where('status', '0')->get();
            return view('categorydisplay.CateService.index', compact('category','cateService'));
        }
        else{
            return redirect('/')->with('status',"category doesnot exists");
        }
        //$service = service1::where('name', '');
        //return view('');
    }

    public function productview($name,$service_name)
    {
        if(category::where('name', $name)->exists())
        {
            if(service1::where('service_name',$service_name)->exists())
            {
                $service = service1::where('service_name',$service_name)->first();
                return view('categorydisplay.CateService.viewservice', compact('service'));
            }
            else{
                return redirect('/')->with('status', 'the link was not found');
            }
        }
        else{
            return redirect('/')->with('status', 'no such category found');
        }
    }


    public function serviceView($name,$service_name)
    {
        if(category::where('name', $name)->exists())
        {
            if(service1::where('service_name',$service_name)->exists())
            {
                $service = service1::where('service_name',$service_name)->first();
                return view('categorydisplay.CateService.serviceview', compact('service'));
            }
            else{
                return redirect('/')->with('status', 'the link was not found');
            }
        }
        else{
            return redirect('/')->with('status', 'no such category found');
        }
    }
}


