<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Session;
use Barryvdh\DomPDF\Facade as PDF;
use App\Mail\checkoutmail;
use Illuminate\Support\Facades\Mail;
use App\Models\Cart;
use GuzzleHttp\Middleware;
use App\Models\Order;
use App\Models\order_detail;


class PaymentController extends Controller
{


  public function store(Request $request)
  {
    $request->validate([
      'name'=>'required',
      'email'=>'required|email',
      'zip'=>'required',
      'state'=>'required',
      'address'=>'required',
      'phone'=>'required',



    ]);
      if(Auth::check()){

          $cart = DB::table('carts')->where('uid',Auth::user()->id)->get();


          if(count($cart)<=0){

         return redirect()->route('/');
          }



// try {
    $data=new Order;
    $data->user_id = Auth::user()->id;
    $data->total = $request->total;
    $data->shipping_charge = $request->charge;
    $data->tax = $request->vat;

    $data->payment_id = rand();
    $data->payment_type ='cod';
    $data->tracking_code =  uniqid();
    $data->cart_value = $request->cart_value;
    if(Session::has('coupon')){
    $data->coupon =  Session::get('coupon')['name'];
    $data->coupon_value =  Session::get('coupon')['discount'];
}
    $data->status = 0;
  $data->save();
  $order_id=$data->id;
    /// Insert Shipping Table
    $shipping = array();
    $shipping['order_id'] = $order_id;
    // $shipping['vendor_id'] = $request->Auth::user()->id;
    $shipping['name'] = $request->name;
    $shipping['email'] = $request->email;
    $shipping['phone'] = $request->phone;
    $shipping['state'] = $request->state;
    $shipping['city'] = $request->address;

    $shipping['zip'] = $request->zip;


    DB::table('shippings')->insert($shipping);




      $content =  DB::table('carts')->where('carts.uid',Auth::user()->id)->get();

// inserting all cart item

    foreach ($content as $row) {

      $details=new order_detail;
    $details->order_id = $order_id;
    $details->product_id = $row->pid;
    $details->color = $row->color;
    $details->size = $row->size;
    $details->qty = $row->qty;
    $details->price = $row->price;



$details->save();

    }

    // return redirect()->/route('payment.success',['orderid'=>$data->tracking_code]);

// sending email
$data=DB::table('websites')->first();
$order=DB::table('orders')->where('user_id',Auth::user()->id)->where('id',$order_id )->first();
$ship=DB::table('shippings')->where('order_id',$order_id)->first();


    $cart = DB::table('products')->join('carts','carts.pid','products.id')->select('products.name','products.image','carts.*')->where('carts.uid',Auth::user()->id)->get();



$set=[
    'image'=>$data->image,
    'email'=>$data->email1,
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
      'msg'=>"Thank you for your order. Your order number $order->tracking_code has been placed.",

];

// return response()->json('success');


$pdf = PDF::loadView('mail.orderstatus', $set);



    Mail::send('mail.order', $set, function($message)use($set, $pdf) {
        $message->to($set['ship_email'])
                ->subject("Thank you for your order. Your order number has been placed.")
                ->attachData($pdf->output(), "orderinvoice.pdf");
    });


    Mail::send('mail.order', $set, function($message)use($set, $pdf) {
        $message->to($set['email'])
                ->subject("Thank you for your order. Your order number has been placed.")
                ->attachData($pdf->output(), "orderinvoice.pdf");
    });

  $cart = DB::table('carts')->where('uid',Auth::user()->id)->delete();


if (Session::has('coupon')) {
    Session::forget('coupon');

}


  return redirect()->route('payment.success',['orderid'=>$order->tracking_code]);

// }

//  catch (\Throwable $th) {
//   $notification=array(
//     'messege'=>'Something went wrong. Please try again later..',
//     'alert-type'=>'error'
//      );
// return redirect()->route('payment.error')->with($notification);
// }


}else{
$notification=array(
  'messege'=>'Please login first !',
  'alert-type'=>'error'
   );
return redirect()->route('login')->with($notification);
}


}



 public  function success($orderid){
return view('frontend.order.success',compact('orderid'));
}



public  function failed(){
  return view('frontend.order.failed');
  }



    public function myorder()
    {
        if(Auth::check()){
            $order = DB::table('orders')->where('user_id',Auth::id())->orderBy('id','desc')->limit(10)->get();
            return view('frontend.myorder',compact('order'));
        }else{
            $notification=array(
                'messege'=>'Please login first !',
                'alert-type'=>'error'
                 );
            return redirect()->route('login')->with($notification);
        }
    }






    public function vieworder($id){
if(Auth::check()){
        $order = DB::table('orders')

                ->where('orders.id',$id)->where('user_id',Auth::user()->id)
                ->first();
                // dd($order);

         $shipping = DB::table('shipping')->where('order_id',$id)->first();
         // dd($shipping);

         $details = DB::table('orders_details')
                     ->join('products','orders_details.product_id','products.id')
                     ->select('orders_details.*','products.product_code','products.image_one')
                     ->where('orders_details.order_id',$id)
                     ->get();
                     // dd($details);
             return view('frontend.view_order',compact('order','shipping','details'));

        }}


    public function orderTrack(Request $request)
    {

        $track=DB::table('orders')->where('status_code',$request->code)->first();
        if($track){
            return view('frontend.trackorder',compact('track'));

        }else{
            $notification=array(
                'messege'=>'Please insert valid order status key',
                'alert-type'=>'error'
                 );
            return redirect()->back()->with($notification);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function SuccessList($id){

        $row = DB::table('orders')->where('user_id',Auth::id())->where('id',$id)->first();
        return view('frontend.returnorder',compact('row'));


        }

        public function returnRequest(Request $request,$id){

            $row = DB::table('orders')->where('user_id',Auth::id())->where('status_code',$id)->update(['return_id'=>1]);
            $row = DB::table('return')->insert(['user_id'=>Auth::user()->id,'order_id'=>$id,'message'=>$request->return]);
            $notification=array(
                'messege'=>'Return order request send',
                'alert-type'=>'success'
                 );
               return Redirect()->route('/')->with($notification);


            }
}
