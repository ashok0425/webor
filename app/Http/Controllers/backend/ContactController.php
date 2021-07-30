<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Traits\status;
use App\Mail\contactmail;
use App\Models\Contact;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
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
        $contact=Contact::orderBy('id','desc')->get();
       return view('backend.contact.index',compact('contact'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
     $con=Contact::find($id);
       return view('backend.contact.create',compact('con'));
        
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
            'email'=>'required|unique:subscribers',

        ]);
        try {
            $category=new Subscriber;  
            $file=$request->file('file');

            $category->email=$request->email;

    
            if($category->save()){
                $notification=array(
                    'alert-type'=>'success',
                    'messege'=>'Thankyou for Subscribing our Newsletter',
                   
                 );
                 return redirect()->back()->with($notification);
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'Something wrong.Try again later',
                   
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
  

     public function sendmail(Request $request){

        // $file=$request->file('file');
     $data=[];
        $set['email']=$request->email;
        $set['name']=$request->name;

        $set['title']=$request->title;
        $set['detail']=$request->detail;
        
        Mail::send('mail.sendmailtocontact', $set, function($message)use($set) {
            $message->to($set['email'])
                    ->subject($set['title']);
        });
       
            $notification=array(
                'alert-type'=>'success',
                'messege'=>'Email sucessfully send to selected client',
               
             );
             return redirect()->back()->with($notification);
     }
}
