<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Traits\status;
use App\Models\Subcategory;
use App\Models\Modal;
use File;
class ModalController extends Controller
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
        $modal=Modal::orderBy('id','desc')->get();
       return view('backend.model.index',compact('modal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.model.create');
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

            'file'=>'required',


        ]);
        try {

            $category=new Modal;

            $file=$request->file('file');

            if($file){
                // File::delete(__getAdmin()->profile_photo_path);
                $fname=rand().'modal.'.$file->getClientOriginalExtension();
                $category->image='upload/model/'.$fname;
                // $path=Image::make($file)->resize(200,300);
                $file->move(public_path().'/upload/model/',$fname);
            }


            if($category->save()){
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Gallery  Added',

                 );
                 return redirect()->back()->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Modal  not added',

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
    public function edit(Category $category,$id)
    {
        $modal=Modal::find($id);
        $category=Category::all();
        $subcategory=Subcategory::all();


        return view('backend.model.edit',compact('modal','subcategory','category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'file'=>'required'
        ]);
        try {
            $category=Modal::find($request->id);

            $file=$request->file('file');

            if($file){
                File::delete($category->image);
                $fname=rand().'model.'.$file->getClientOriginalExtension();
                $category->image='upload/model/'.$fname;
                // $path=Image::make($file)->resize(200,300);
                $file->move(public_path().'/upload/model/',$fname);
            }



            if($category->save()){
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Gallery  updated',

                 );
                 return redirect()->route('admin.model')->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Modal  not updated',

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
    $category=Modal::find($id);
    return view('backend.model.show',compact('category'));
    }
}





