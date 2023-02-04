<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Illuminate\Http\Request;
use App\Http\Traits\status;

use File;
class CouponController extends Controller
{

// Note :: active,deactive,destroy,method are place in Traits/status file


    use status;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coupon=Coupon::orderBy('id','desc')->get();
       return view('backend.coupon.index',compact('coupon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.coupon.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|unique:coupons',
            'description'=>'required',


        ]);
        try {

            $category=new Coupon;
            $category->title=$request->title;
            $category->description=$request->description;
                      if($category->save()){
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Service  Added',

                 );
                 return redirect()->back()->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Coupon  not added',

                 );
                 return redirect()->back()->with($notification);
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
    public function edit(Coupon $coupon,$id)
    {
        $service=Coupon::find($id);
        return view('backend.coupon.edit',compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        try {
            $category=Coupon::find($request->id);
            $category->title=$request->title;
            $category->description=$request->description;
            

            if($category->save()){
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Service  updated',
                 );
                 return redirect()->route('admin.coupon')->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Coupon  not updated',

                 );
                 return redirect()->back()->with($notification);
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
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id){
    $coupon=Coupon::find($id);
    return view('backend.coupon.show',compact('coupon'));
    }
}
