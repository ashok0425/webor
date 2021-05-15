<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Traits\status;
use File;
class BlogController extends Controller
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
        $blog=Blog::orderBy('id','desc')->get();
       return view('backend.blog.index',compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('backend.blog.create');
        
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
            'title'=>'required|max:255',
            'detail'=>'required',

        ]);
        try {
 
            $category=new Blog;
            
            $file=$request->file('file');
           
            if($file){
                // File::delete(__getAdmin()->profile_photo_path);
                $fname=rand().'blog.'.$file->getClientOriginalExtension();
                $category->image='upload/blog/'.$fname;
                // $path=Image::make($file)->resize(200,300);
                $file->move('upload/blog/',$fname);
            }
            $category->category_id=$request->category;
            $category->title=$request->title;
            $category->detail=$request->detail;
    
            if($category->save()){
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Blog  Added',
                   
                 );
                 return redirect()->back()->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Blog  not added',
                   
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
     * @param  \App\Models\Blog  $category
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog,$id)
    {
        $blog=Blog::find($id);
        return view('backend.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\blogcategory  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, blogcategory $category)
    {
        $request->validate([
            'title'=>'required|max:255',
            'detail'=>'required',

        ]);
        try {

            $category=Blog::find($request->id);
            
            $file=$request->file('file');
           
            if($file){
                File::delete($category->image);
                $fname=rand().'category.'.$file->getClientOriginalExtension();
                $category->image='upload/blog/'.$fname;
                // $path=Image::make($file)->resize(200,300);
                $file->move('upload/blog/',$fname);
            }
            $category->category_id=$request->category;
            $category->title=$request->title;
            $category->detail=$request->detail;
            if($category->save()){
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Blog  updated',
                   
                 );
                 return redirect()->route('admin.blogcategory')->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Blog  not updated',
                   
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
    
}
