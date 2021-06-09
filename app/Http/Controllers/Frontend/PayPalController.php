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

        
  // sending email 
  $data=DB::table('websites')->first();
  $order=DB::table('orders')->where('user_id',Auth::user()->id)->where('id',$order_id )->first();
  $ship=DB::table('shippings')->where('order_id',$order_id)->first();
  $cart = DB::table('products')->join('carts','carts.pid','products.id')->select('products.name','products.image','carts.*')->where('uid',Auth::user()->id)->get();

  $set=[
      'image'=>$data->image,
      'cart'=>$cart,
      'address'=>$data->address1,
      'phone'=>$data->phone1,
      'email'=>$data->email1,
      'order_id'=>$order_id,
      'coupon'=>$request->coupon,
      'coupon_value'=>$request->coupon_value,
      'tax'=>$request->vat,
      'total'=>$request->total,
      'order_id'=>$order_id,
      'ship_email'=>$ship->email,
      'ship_name'=>$ship->name,
      'ship_phone'=>$ship->phone,
      'ship_address'=>$ship->state,
      'ship_city'=>$ship->city,
      'ship_zip'=>$ship->zip,
      'order_number'=>$order->tracking_code,
      'shipping'=>$order->shipping_charge,
      'payment_type'=>$order->payment_type,
      'order_date'=>$order->created_at,
 


  ];

  $pdf = PDF::loadView('mail.checkout', $set);
  Mail::send('mail.checkout', $set, function($message)use($set, $pdf) {
      $message->to('abc@gmail.com','def@gmail.com')
              ->subject('Order Invoice Mail')
              ->attachData($pdf->output(), "orderinvoice.pdf");
  });

  DB::table('carts')->where('uid',Auth::user()->id)->delete();
  if (Session::has('coupon')) {
      Session::forget('coupon');

  }

  return redirect()->route('payment.success',['code'=>$order->tracking_code]);
        
    
          }else{

            return redirect()->route('payment.failed');

          }

    } else{
      
           return Redirect()->route('/');
    }
}}
