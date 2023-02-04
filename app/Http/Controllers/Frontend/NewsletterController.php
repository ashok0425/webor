<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\newslater;

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
            'messege'=>'Thankyou for subscribing our newsletter',
            'alert-type'=>'success'
             );
             $data=[
                 'title'=>'Subscriber Email.Thank you for subscribing our Newsletter.'
             ];
            //  Mail::to($request->email)->send(new newslater($data));
    }else{
        $notification=array(
            'messege'=>'Already Subscribed from this email !',
            'alert-type'=>'error'
             );
    }

       return Redirect()->back()->with($notification);
}



}
