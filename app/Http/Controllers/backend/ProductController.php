<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Traits\status;
use App\Models\Part;
use App\Models\Product;
use App\Models\Productcolor;
use App\Models\Productvariation;


use File;
class ProductController extends Controller
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
        $product=Product::orderBy('id','desc')->get();
       return view('backend.product.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
       return view('backend.product.create',compact('category'));

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
            'category'=>'required',
            'name'=>'required',
            'price'=>'required',
            'descr'=>'required',

        ]);
        try {
            $category=new Product;

            $file=$request->file('file');

            if($file){
                // File::delete(__getAdmin()->profile_photo_path);
                $fname=rand().'product.'.$file->getClientOriginalExtension();
                $category->image='upload/product/'.$fname;
                // $path=Image::make($file)->resize(200,300);
                $file->move(public_path().'/upload/product/',$fname);
            }

            $category->category_id=$request->category;
            $category->short_desc=$request->short_desc;
            $category->price=$request->price;
            $category->name=$request->name;
            $category->long_desc=$request->descr;

            $category->featured=$request->featured;
            $category->top_rated=$request->top_rated;
            $category->bestseller=$request->bestseller;



            if($category->save()){

                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Product  Added',

                 );
                 return redirect()->back()->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Product  not added',

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
    public function edit(Product $product,$id)
    {
        $product=Product::find($id);
        $category=Category::all();
        // $subcategory=Subcategory::all();




        return view('backend.product.edit',compact('product','category'));
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
            'category'=>'required',
            'name'=>'required',
            'price'=>'required',
        ]);

        try {
            $category=Product::find($request->id);

            $file=$request->file('file');

            if($file){
                File::delete($category->image);
                $fname=rand().'product.'.$file->getClientOriginalExtension();
                $category->image='upload/product/'.$fname;
                // $path=Image::make($file)->resize(200,300);
                $file->move(public_path().'/upload/product/',$fname);
            }
            $category->category_id=$request->category;
            $category->short_desc=$request->short_desc;
            $category->name=$request->name;
            $category->price=$request->price;
            $category->featured=$request->featured;
            $category->long_desc=$request->descr;

            $category->top_rated=$request->top_rated;
            $category->bestseller=$request->bestseller;



            if($category->save()){

                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Product  updated',

                 );
                 return redirect()->route('admin.product')->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Product  not updated',

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
    $category=Part::find($id);
    return view('backend.product.show',compact('category'));
    }


    public function deactiveproduct(){
        $product=Product::where('status',0)->get();
        return view('backend.product.deactiveproduct',compact('product'));
        }


    public function addAttribute($id){
        $color=Productcolor::where('product_id',$id)->get();
        $variation=Productvariation::where('product_id',$id)->get();
$pid=$id;
        return view('backend.product.attribute',compact('color','pid','variation'));
        }
}
