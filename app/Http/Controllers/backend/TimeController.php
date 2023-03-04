<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Time;
use Illuminate\Http\Request;
use App\Http\Traits\status;

use File;
class TimeController extends Controller
{

// Note :: active,deactive,destroy,method are place in Traits/status file


    use status;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

     
        $coupon=Time::orderBy('id','desc')->get();

       return view('backend.time.index',compact('coupon'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if($request->type==2){
                return view('backend.partner.create');
    
            }
       return view('backend.time.create');
        
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
            'name'=>'required',
            'review'=>'required',


        ]);
        try {

            $category=new Time;
            $category->name=$request->name;
            $category->review=$request->review;
            $category->star=$request->star;
            $category->position=$request->position;
            $category->title=$request->title;

        

            if($category->save()){
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Review  Added',
                   
                 );
                 return redirect()->back()->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Review  not added',
                   
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
    public function edit(Time $time,$id)
    {
        $review=Time::find($id);
        return view('backend.time.edit',compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Time $time)
    {
        $request->validate([
            'name'=>'required',
            'review'=>'required',

        ]);
        // try {

            $category=Time::find($request->id);
            $category->name=$request->name;
            $category->review=$request->review;
            $category->star=$request->star;
            $category->position=$request->position;
            $category->title=$request->title;
            if($category->save()){
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Review  updated',
                   
                 );
                 return redirect()->route('admin.review')->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Review  not updated',
                   
                 );
                 return redirect()->back()->with($notification);
            }
            
           
        // } catch (\Throwable $th) {
        //     $notification=array(
        //         'alert-type'=>'error',
        //         'messege'=>'Something went wrong.Please try again later',
                
        //      );
        //      return redirect()->back()->with($notification);
        
        // }
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    // public function show($id){
    // $coupon=Time::find($id);
    // return view('backend.coupon.show',compact('coupon'));
    // }
}
