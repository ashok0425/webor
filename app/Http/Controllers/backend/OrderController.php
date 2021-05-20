<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Traits\status;
use App\Models\Order;
use App\Models\order_detail;
use App\Models\shipping;

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
$order=Order::find($hid);
$order->status=$id;
$order->save();
     return response()->json('success');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
     
        try {
 
            $category=Apponitment::find($request->id);
            $category->status=$request->status;
            if($category->save()){
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Status  updated',
                   
                 );
                 return redirect()->back()->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Status  not updated',
                   
                 );
                 return redirect()->route('admin.appointment')->with($notification);
            }
            
           
        } catch (\Throwable $th) {
            $notification=array(
                'alert-type'=>'error',
                'messege'=>'Something went wrong.Please try again later',
                
             );
             return redirect()->back()->with($notification);
        
        }
    
    }




    public function paidStatus(Request $request)
    {
        try {

            $category=Apponitment::find($request->id);
            $category->ispaid=$request->ispaid;
            if($category->save()){
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Paid status  updated',
                   
                 );
                 return redirect()->back()->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Paid status  not updated',
                   
                 );
                 return redirect()->route('admin.appointment')->with($notification);
            }
            
           
        } catch (\Throwable $th) {
            $notification=array(
                'alert-type'=>'error',
                'messege'=>'Something went wrong.Please try again later',
                
             );
             return redirect()->back()->with($notification);
        
        }
    
    }
  /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Apponitment $appointment,$id)
    {
        $appo=ApponitmentDetail::where('appointment_id',$id)->get();
        $appointment=Apponitment::find($id);
        return view('backend.appointment.edit',compact('appointment','appo'));
    }


    public function complete(Apponitment $appointment)
    {
        $appointment=Apponitment::where('status',2)->get();
        return view('backend.appointment.complete',compact('appointment'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id){
    $order=Order::find($id);
    $shipping=shipping::where('order_id',$id)->first();
    $product=order_detail::where('order_id',$id)->get();
    return view('backend.order.show',compact('order','shipping','product'));
    }
}
