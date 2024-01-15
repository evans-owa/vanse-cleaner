<?php

namespace App\Http\Controllers\Frontservice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\cart;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderService;
use Illuminate\Support\Facades\Auth;
use Mpesa;

class CheckOutController extends Controller
{
    public function index()
    {
        $waitItem = cart::where('user_id', Auth::id())->get();
        return view('categorydisplay.CateService.checkoutWaiting', compact('waitItem'));
    }
    public function placewait(Request $request)
    {
        $order = new Order();
                $order->user_id=Auth::id();
                $order->fname = $request->input('firstname');
                $order->lname = $request->input('lastname');
                $order->email = $request->input('email');
                $order->phonenumber = $request->input('phonenumber');
                $order->specificl = $request->input('specificlocation');
                $order->address2 = $request->input('alternetivceaddress');
                $order->county = $request->input('county');
                $order->constituency = $request->input('constituency');
                $order->Ward = $request->input('ward');
                $order->landmark = $request->input('landmark');


                $total = 0;

                $waitItem_total = cart::where('user_id', Auth::id())->get();
                foreach($waitItem_total as $item)
                {
                    $total += $item->service->Price;

                }
                $order->total_price = $total;

                $name ='name';
                $nameserve = cart::where('user_id', Auth::id())->get();
                foreach($nameserve as $item)
                {
                    $name = $item->service->service_name;
                }
                $order->orgname= $name;
                $order->tracking_no = 'vcleaner'.rand(1111,8888);
                $order->save();

                $waitItem = cart::where('user_id', Auth::id())->get();
                foreach($waitItem as $item)
                {
                    OrderService::create([

                        'wait_id'=> $order->id,
                        'serviceid'=> $item->idservice,
                        'Area'=>$item->Area,
                        'price'=>$item->service->Price,
                        //updates
                        'orgname'=>$item->nameservices,
                        'orgid'=>$item->orginalid,

                    ]);
                }

                if(Auth::user()->lastname == null)
                {
                    $user = User::where('id', Auth::id())->first();
                    $user->name = $request->input('firstname');
                    $user->lname = $request->input('lastname');
                    $user->phonenumber = $request->input('phonenumber');
                    $user->specificl = $request->input('specificlocation');
                    $user->address2 = $request->input('alternetivceaddress');
                    $user->county = $request->input('county');
                    $user->constituency = $request->input('constituency');
                    $user->Ward = $request->input('ward');
                    $user->landmark = $request->input('landmark');
                    $user->update();
                }

                $waitItem = cart::where('user_id', Auth::id())->get();
                cart::destroy($waitItem);
                return redirect('/')->with('status',"Service requested  succefully");
    }

            public function razerpaycheck(Request $request)
            {
                $waitItem = cart::where('user_id', Auth::id())->get();
                $total_price = 0;

                foreach($waitItem as $item)
                {
                    $total_price += $item->service->price;
                }
                    $name = $request->input('name');
                    $lastname = $request->input('lastname');
                    $email = $request->input('email');
                    $number = $request->input('number');
                    $slocation = $request->input('slocation');
                    $altlocation = $request->input('altlocation');
                    $county = $request->input('county');
                    $consti = $request->input('consti');
                    $ward = $request->input('ward');
                    $markland = $request->input('markland');

                    return response()->json([
                                'name' => $name,
                                'lastname' => $lastname,
                                'email' => $email,
                                'number' => $number,
                                'slocation' => $slocation,
                                'altlocation' => $altlocation,
                                'county' => $county,
                                'consti' => $consti,
                                'ward' => $ward,
                                'markland' => $markland,
                                'total_price' => $total_price,
                    ]);
            }

    public function stk()
    {

        $mpesa= new \Safaricom\Mpesa\Mpesa();
        $BusinessShortCode = '174379';
        $LipaNaMpesaPasskey = 'bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919';
        $TransactionType = 'CustomerPayBillOnline';
        $Amount = 'total_price';
        $PartyA = '254757375511';
        $PartyB = '174379';
        $PhoneNumber = '25457375511';
        $CallBackURL = 'https://vansecleaners.com/mpesa/comfirmation';
        $AccountReference = 'Vancecleaners';
        $TransactionDesc = 'Cleaners';
        $Remarks = 'Remarks';


        $stkPushSimulation=$mpesa->STKPushSimulation(
            $BusinessShortCode,
            $LipaNaMpesaPasskey,
            $TransactionType,
            $Amount,
            $PartyA,
            $PartyB,
            $PhoneNumber,
            $CallBackURL,
            $AccountReference,
            $TransactionDesc,
            $Remarks
        );
        dd($STKPushSimulation);
    }

}

