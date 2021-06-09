<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    public function index(){
        return view('frontend.blog.index');
    }

    public function single($id){
        $blog=Blog::find($id);
        return view('frontend.blog.single',compact('blog'));
    }


    
}
