<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{

    
public function store(Request $request)
{
   
    $email=Subscriber::where('email',$request->email)->first();
    if(!$email){
         $request->validate([
        'email'=>'required|unique:subscribers',
    ]);
    $newslater=new Subscriber;
    $newslater->email=$request->email;
    $newslater->save();
        $notification=array(
            'messege'=>'Thankyou for subscribing our newslater',
            'alert-type'=>'success'  
             );
            //  Mail::to($request->email)->send(new news);
    }else{
        $notification=array(
            'messege'=>'Already Subscribed from this email !',
            'alert-type'=>'error'
             );
    }
   
       return Redirect()->back()->with($notification); 
}



}
