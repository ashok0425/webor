<?php

namespace App\Http\Controllers\backend;
use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;
use App\Http\Traits\status;
use App\Mail\newslater;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
class SubscriberController extends Controller
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
        $subscriber=Subscriber::orderBy('id','desc')->get();
       return view('backend.subscriber.index',compact('subscriber'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $email=[];
     foreach ($request->subscriber as  $value) {
       $email[]=$value;
     }
       return view('backend.subscriber.create',compact('email'));
        
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
  

     public function send(Request $request){
       
         foreach ($request->email as $value) {
             $set['email']=$value;
             $set['title']=$request->title;
             $set['detail']=$request->detail;

            Mail::send('mail.subscriberemail', $set, function($message)use($set) {
        $message->to($set['email'])
                ->subject($set['title']);
    });

         }
         return redirect()->route('admin.subscriber');
     }

  
}
