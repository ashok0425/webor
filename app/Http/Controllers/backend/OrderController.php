<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\status;
use App\Models\Order;
use App\Models\shipping;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Barryvdh\DomPDF\Facade as PDF;
use File;
class OrderController extends Controller
{

// Note :: active,deactive,destroy,method are place in Traits/status file


    use status;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newOrder()
    {
        $order=Order::where('status',0)->get();

       return view('backend.order.index',compact('order'));
    }

    public function processOrder()
    {
        $order=Order::where('status',1)->get();

       return view('backend.order.process',compact('order'));
    }

    public function shippingOrder()
    {
        $order=Order::where('status',2)->get();

       return view('backend.order.shipping',compact('order'));
    }

    public function deliverOrder()
    {
        $order=Order::where('status',3)->get();

       return view('backend.order.deliver',compact('order'));
    }

    public function cancelOrder()
    {
        $order=Order::where('status',4)->get();

       return view('backend.order.cancel',compact('order'));
    }

    public function changeOrderStatus($id,$hid)
    {
        $email=DB::table('shippings')->where('order_id',$hid)->value('email');
$order=Order::find($hid);
$order->status=$id;

$order->save();
// return response()->json('updated');
$data=DB::table('websites')->first();
$order=DB::table('orders')->where('id',$hid)->first();
$ship=DB::table('shippings')->where('order_id',$hid)->first();

$cart = DB::table('order_details')->join('products','order_details.product_id','products.id')->select('products.name','products.image','order_details.*')->where('order_details.order_id',$hid)->get();



if($id==1){

$set=[
    'image'=>$data->image,
    'cart'=>$cart,
    'address'=>$data->address1,
    'phone'=>$data->phone1,
    'email'=>$data->email1,

    'ship_email'=>$ship->email,
    'ship_name'=>$ship->name,
    'ship_phone'=>$ship->phone,
    'ship_address'=>$ship->state,
    'ship_city'=>$ship->city,
    'ship_zip'=>$ship->zip,
    'order_number'=>$order->tracking_code,
    'coupon'=>$order->coupon,
    'coupon_value'=>$order->coupon_value,
    'cart_value'=>$order->cart_value,
    'tax'=>$order->tax,
    'shipping'=>$order->shipping_charge,
    'order_id'=>$order->tracking_code,
    'total'=>$order->total,

    'payment_type'=>$order->payment_type,
    'order_date'=>$order->created_at,
     'hid'=>$order->tracking_code,
    'msg'=>"Your order $order->tracking_code is currently being reviewed and will be picked up for delivery soon.",

];




$pdf = PDF::loadView('mail.orderstatus', $set);



    Mail::send('mail.order', $set, function($message)use($set, $pdf) {
        $message->to($set['ship_email'])
                ->subject("Your order  is currently being reviewed and will be picked up for delivery soon.")
                ->attachData($pdf->output(), "orderinvoice.pdf");
    });

}
if($id==2){

    $set=[
    'image'=>$data->image,
    'cart'=>$cart,
    'address'=>$data->address1,
    'phone'=>$data->phone1,
    'email'=>$data->email1,

    'ship_email'=>$ship->email,
    'ship_name'=>$ship->name,
    'ship_phone'=>$ship->phone,
    'ship_address'=>$ship->state,
    'ship_city'=>$ship->city,
    'ship_zip'=>$ship->zip,
    'order_number'=>$order->tracking_code,
    'coupon'=>$order->coupon,
    'coupon_value'=>$order->coupon_value,
    'cart_value'=>$order->cart_value,
    'tax'=>$order->tax,
    'shipping'=>$order->shipping_charge,
    'order_id'=>$order->tracking_code,
    'total'=>$order->total,

    'payment_type'=>$order->payment_type,
    'order_date'=>$order->created_at,
     'hid'=>$order->tracking_code,
      'msg'=>"Your order $order->tracking_code is currently on its way to you. One of our representatives will contact you
soon.",

];
$pdf = PDF::loadView('mail.orderstatus', $set);

    Mail::send('mail.order', $set, function($message)use($set, $pdf) {
        $message->to($set['ship_email'])
                ->subject("Your order is currently on its way to you. One of our representatives will contact you
soon.")
                ->attachData($pdf->output(), "orderinvoice.pdf");
    });

}
if($id==3){
      $set=[
    'image'=>$data->image,
    'cart'=>$cart,
    'address'=>$data->address1,
    'phone'=>$data->phone1,
    'email'=>$data->email1,

    'ship_email'=>$ship->email,
    'ship_name'=>$ship->name,
    'ship_phone'=>$ship->phone,
    'ship_address'=>$ship->state,
    'ship_city'=>$ship->city,
    'ship_zip'=>$ship->zip,
    'order_number'=>$order->tracking_code,
    'coupon'=>$order->coupon,
    'coupon_value'=>$order->coupon_value,
    'cart_value'=>$order->cart_value,
    'tax'=>$order->tax,
    'shipping'=>$order->shipping_charge,
    'order_id'=>$order->tracking_code,
    'total'=>$order->total,

    'payment_type'=>$order->payment_type,
    'order_date'=>$order->created_at,
     'hid'=>$order->tracking_code,
      'msg'=>"Your order $order->tracking_code has been picked up. Thank you for shopping with us.
    Continue shopping at www.krafftbox.com",

];

    $pdf = PDF::loadView('mail.orderstatus', $set);

    Mail::send('mail.order', $set, function($message)use($set, $pdf) {
        $message->to($set['ship_email'])
                ->subject("Your order  has been picked up. Thank you for shopping with us.
                Continue shopping at www.krafftbox.com")
                ->attachData($pdf->output(), "orderinvoice.pdf");
    });

}
if($id==4){


          $set=[
    'image'=>$data->image,
    'cart'=>$cart,
    'address'=>$data->address1,
    'phone'=>$data->phone1,
    'email'=>$data->email1,

    'ship_email'=>$ship->email,
    'ship_name'=>$ship->name,
    'ship_phone'=>$ship->phone,
    'ship_address'=>$ship->state,
    'ship_city'=>$ship->city,
    'ship_zip'=>$ship->zip,
    'order_number'=>$order->tracking_code,
    'coupon'=>$order->coupon,
    'coupon_value'=>$order->coupon_value,
    'cart_value'=>$order->cart_value,
    'tax'=>$order->tax,
    'shipping'=>$order->shipping_charge,
    'order_id'=>$order->tracking_code,
    'total'=>$order->total,

    'payment_type'=>$order->payment_type,
    'order_date'=>$order->created_at,
     'hid'=>$order->tracking_code,
      'msg'=>"Your order $order->tracking_code has been successfully canceled.
    We’re sorry this order didn’t work out for you. But, we hope we’ll see you again later.",

];
 $pdf = PDF::loadView('mail.orderstatus', $set);
    Mail::send('mail.order', $set, function($message)use($set, $pdf) {
        $message->to($set['ship_email'])
                ->subject("Your order  has been successfully canceled.
                We’re sorry this order didn’t work out for you. But, we hope we’ll see you again later.")
                ->attachData($pdf->output(), "orderinvoice.pdf");
    });

}
  return response()->json('success');
    }


    public function show($id){
    $order=Order::find($id);
    $shipping=shipping::where('order_id',$id)->first();
    $product=DB::table('order_details')->join('products','products.id','order_details.product_id')->where('order_id',$id)->get();
    return view('backend.order.show',compact('order','shipping','product'));
    }
}
