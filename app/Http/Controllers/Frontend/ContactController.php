<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Website;

class ContactController extends Controller
{

    public function index(){
        $contact=Website::find(1);
       return view('frontend.contact',compact('contact'));
    }

    public function store(Request $request){
        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'email'=>'required|email',
            'phone'=>'required',
            'msg'=>'required',

        ]);
        try {
           
       
        $cont=new Contact;
        $cont->fname=$request->fname;
        $cont->lname=$request->lname;
        $cont->email=$request->email;
        $cont->phone=$request->phone;
        $cont->msg=$request->msg;
        $cont->save();
        $notification=array(
            'alert-type'=>'success',
            'messege'=>'Your query hasbeen recived.We will get back to you as soon as possible.',
            
         );
         return redirect()->back()->with($notification);

    } catch (\Throwable $th) {
        //throw $th;
        $notification=array(
            'alert-type'=>'error',
            'messege'=>'Something went wrong.Please try again later',
            
         );
         return redirect()->back()->with($notification);
    }

    }

}
