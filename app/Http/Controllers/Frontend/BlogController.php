<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        $blogs=Blog::orderBy('id','desc')->paginate(12);
        $featured=Blog::where('featured',1)->orderBy('id','desc')->first();
        $featured2=Blog::where('featured',1)->skip(1)->take(1)->orderBy('id','desc')->first();


        return view('frontend.blog.index',compact('blogs','featured','featured2'));
    }

    public function detail($id){
        $blog=Blog::find($id);
        if(!$blog){
          return  abort(404);
        }
        $blogs=Blog::InRandomOrder()->limit(4)->get();

        return view('frontend.blog.detail',compact('blog','blogs'));
    }


    
}
