<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\Contact;

use Illuminate\Support\Facades\DB;
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
        'message'=>'required',

    ]);
    try {


    $cont=new Contact;
    $cont->fname=$request->name;
    $cont->email=$request->email;
    $cont->phone=$request->phone;
    $cont->msg=$request->message;
    $cont->save();
    $notification=array(
        'alert-type'=>'success',
        'messege'=>'Your query hasbeen recived.We will get back to you as soon as possible.',

     );


     $data=array(
        'msg'=>$request->msg,
        'name'=>$request->name,
        'address'=>$request->address,
        'email'=>$request->email,
        'phone'=>$request->phone
    );
    // $email=DB::table('websites')->value('email1');
    // Mail::to($data['email'])->send(new contactmail($data));
    // Mail::to($email)->send(new contactmail($data));

    $notification=array(
        'alert-type'=>'success',
        'messege'=>'Your query has been placed we will get back to you as soon as possible.',

     );
     return redirect()->back()->with($notification);

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

