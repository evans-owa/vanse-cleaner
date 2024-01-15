<?php

namespace App\Http\Controllers\Frontservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\service1;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addService(Request $request)
    {

        $service_id = $request->input('service2_id');
        $areaOfService = $request->input('areaService');
        //edited
        $auttoid = $request ->input('auttoid');
        $orgname = $request ->input('orgname');


        if(Auth::check())
        {
            //check on the id
            $service_check = service1::where('idservice',$service_id)->first();


                if($service_check){

                if(cart::where('idservice', $service_id)->where('user_id',Auth::id())->exists())
                {
                    return response()->json(['status' => $service_check->service_name." Already Added to Waiting"]);
                }
                else
                {
                //coded first
                    $cartItem = new cart();
                    $cartItem->user_id = Auth::id();
                    $cartItem->idservice =$service_id;
                    $cartItem->Area =$areaOfService;
                    //edited
                    $cartItem->nameservices=$orgname;
                    $cartItem->orginalid=$auttoid;
                    $cartItem->save();
                    return response()->json(['status' => $service_check->service_name." Added to Waiting"]);
                }
            }
        }

        else
        {
            return response()->json(['status' => "login to Continue"]);
        }
    }

    public function viewwaiting()
    {
        $waitingItems = cart::where('user_id',Auth::id())->get();
        return view('categorydisplay.CateService.waitingview', compact('waitingItems'));
    }

    public function updatewait(Request $request)
    {
        $service_id =$request->input('serve_id');
        $AreaService =$request->input('AreaOfService');

        if(Auth::check())
        {

            if(cart::where('idservice', $service_id)->where('user_id', Auth::id())->exists())
            {
                $wait = cart::where('idservice', $service_id)->where('user_id', Auth::id())->first();

                $wait->Area = $AreaService;
                $wait->update();
                return response()->json(['status'=> "Area updated"]);
            }
        }
    }

    public function deleteService(Request $request)
    {

        if(Auth::check())
        {
            $serviceCartDel = $request->input('services_id');
            if(cart::where('idservice', $serviceCartDel)->where('user_id', Auth::id())->exists())
            {
                $itemWait = cart::where('idservice', $serviceCartDel)->where('user_id', Auth::id())->first();
                $itemWait->delete();
                return response()->json(['status' => "service deleted succefully"]);
            }
        }
        else
        {
            return response()->json(['status' => "login to Continue"]);
        }
    }
}
