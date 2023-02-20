<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        $blogs=Blog::orderBy('id','desc')->get();
        return view('frontend.blog.index',compact('blogs'));
    }

    public function detail($id){
        $blog=Blog::find($id);
        return view('frontend.blog.detail',compact('blog'));
    }


    
}
