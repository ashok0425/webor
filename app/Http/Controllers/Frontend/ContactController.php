<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\Contact;
use App\Models\Subscriber;
use App\Models\Contactvendor;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Mail\newslater;
use App\Mail\contactmail;

use Illuminate\Support\Facades\Mail;
class ContactController  extends Controller
{
  public function index(){
    $contact=Website::find(1);
   return view('frontend.contact',compact('contact'));
}

public function store(Request $request){
    $request->validate([

        'email'=>'required|email',
        'phone'=>'required',
        'msg'=>'required',

    ]);
    try {


    $cont=new Contact;
    $cont->name=$request->name;
    $cont->email=$request->email;
    $cont->phone=$request->phone;
    $cont->address=$request->address;

    $cont->msg=$request->msg;
    $cont->save();
    $notification=array(
        'alert-type'=>'success',
        'messege'=>'Your query hasbeen recived.We will get back to you as soon as possible.',

     );
     return redirect()->back()->with($notification);

     $data=array(
        'msg'=>$request->msg,
        'name'=>$request->name,
        'address'=>$request->address,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'address'=>$request->address,





    );
    // Mail::to(Auth::user()->email)->send(new contactmail($data));


} catch (\Throwable $th) {
    //throw $th;
    $notification=array(
        'alert-type'=>'error',
        'messege'=>'Something went wrong. Please try again later.',

     );
     return redirect()->back()->with($notification);
}

}


public function subscribe(Request $request)
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
            'messege'=>'Thankyou for subscribing our Newsletter',
            'alert-type'=>'success'
             );
             Mail::to($request->email)->send(new newslater);
    }else{
        $notification=array(
            'messege'=>'Already Subscribed from this email !',
            'alert-type'=>'error'
             );
    }

       return Redirect()->back()->with($notification);
}





public function contactvendorstore(Request $request){
    $request->validate([

        'title'=>'required',
        'message'=>'required',

    ]);
    try {
       if(Auth::check()){
        $cont=new Contactvendor;
        $cont->user_id=Auth::user()->id;
        $cont->title=$request->title;
        $cont->message=$request->message;
        $cont->vendor_id=$request->vendor_id;
        $cont->save();
        $notification=array(
            'alert-type'=>'success',
            'messege'=>'Your query hasbeen recived.We will get back to you as soon as possible.',

         );
         return redirect()->back()->with($notification);
       }else{
        $notification=array(
            'alert-type'=>'info',
            'messege'=>'Please Login.',

         );
         return redirect()->route('login')->with($notification);

       }



} catch (\Throwable $th) {
    //throw $th;
    $notification=array(
        'alert-type'=>'error',
        'messege'=>'Something went wrong. Please try again later.',

     );
     return redirect()->back()->with($notification);
}

}



}

