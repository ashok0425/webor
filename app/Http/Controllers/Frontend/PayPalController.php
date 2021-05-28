<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Mail\checkoutmail;
use Illuminate\Support\Facades\Mail;
use App\Services\PaypalService;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
class PayPalController extends Controller
{
    private $paypalService;

    function __construct(PaypalService $paypalService){
        

        $this->paypalService = $paypalService;

    }


    public function getExpressCheckout($orderId)
    {

    

         $response = $this->paypalService->createOrder($orderId);

        if($response->statusCode !== 201) {
            abort(500);
        }

        $order = Order::find($orderId);
        $order->payment_id = $response->result->id;
        $order->save();

        foreach ($response->result->links as $link) {

            if($link->rel == 'approve') {


                return redirect($link->href);
            }
        }
   
    }



    public function cancelPage()
    {
        return redirect()->route('payment.failed');
    }


    public function getExpressCheckoutSuccess(Request $request,$orderId)
    {
      $order = Order::find($orderId);
      if(Session::has('sess')){


        $order = Order::find($orderId);
        // dd($order->paypal_orderid);
        $response = $this->paypalService->captureOrder($order->paypal_orderid);

        if ($response->result->status == 'COMPLETED') {
            $order->ispaid = 1;
            $order->save();

            




            
          DB::table('carts')->where('user_id',Auth::user()->id)->delete();
          if (Session::has('coupon')) {
              Session::forget('coupon');
          }
           Session::forget('sess');

       
            return redirect('errors.Thankyou')->route('payment.success')->with('code',$order->tracking_code);

        
    
          }else{

            return redirect()->route('payment.failed');

          }

    } else{
      
           return Redirect()->route('/');
    }
}}
