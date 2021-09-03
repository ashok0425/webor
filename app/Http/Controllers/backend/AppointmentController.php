<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Apponitment;
use App\Models\Category;

use Illuminate\Http\Request;
use App\Http\Traits\status;
use App\Models\ApponitmentDetail;
use File;
class AppointmentController extends Controller
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
        $ambassador=Apponitment::all();

       return view('backend.ambassador.index',compact('ambassador'));
    }


public function create()
    {

       return view('backend.ambassador.create');
    }


    public function store(Request $request)
    {

        try {

            $category=new Apponitment;
            $category->name=$request->name;
            $file=$request->file('file');

            if($file){
                // File::delete(__getAdmin()->profile_photo_path);
                $fname=rand().'ambassador.'.$file->getClientOriginalExtension();
                $category->image='upload/ambassador/'.$fname;
                // $path=Image::make($file)->resize(200,300);
                $file->move(public_path().'/upload/ambassador/',$fname);
            }
            if($category->save()){
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Ambassador  updated',

                 );
                 return redirect()->back()->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Ambassador  not updated',

                 );
                 return redirect()->route('admin.ambassador')->with($notification);
            }


        } catch (\Throwable $th) {
            $notification=array(
                'alert-type'=>'error',
                'messege'=>'Something went wrong.Please try again later',

             );
             return redirect()->back()->with($notification);

        }

    }



    public function update(Request $request)
    {

        try {

            $category=Apponitment::find($request->id);
            $category->status=$request->status; $category->name=$request->name;
            $file=$request->file('file');

            if($file){
                // File::delete(__getAdmin()->profile_photo_path);
                $fname=rand().'ambassador.'.$file->getClientOriginalExtension();
                $category->image='upload/ambassador/'.$fname;
                // $path=Image::make($file)->resize(200,300);
                $file->move(public_path().'/upload/ambassador/',$fname);
            }
            if($category->save()){
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Ambassador  updated',

                 );
                 return redirect()->back()->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Ambassador  not updated',

                 );
                 return redirect()->route('admin.ambassador')->with($notification);
            }


        } catch (\Throwable $th) {
            $notification=array(
                'alert-type'=>'error',
                'messege'=>'Something went wrong.Please try again later',

             );
             return redirect()->back()->with($notification);

        }

    }

    public function edit(Apponitment $appointment,$id)
    {

        $outlook=Apponitment::find($id);
        return view('backend.ambassador.edit',compact('outlook'));
    }




}
