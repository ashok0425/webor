<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Apponitment;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Modal;
use App\Models\Part;
use App\Models\Time;

use App\Models\ApponitmentDetail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Carbon\Carbon as CarbonCarbon;
use Illuminate\Support\Facades\DB;
class AppointmentController extends Controller
{
    public function index(){
        return view('frontend.appointment.appointment');
    }

    public function repair($device){
        $device=$device;
        return view('frontend.appointment.appointment',compact('device'));
    }


    
    public function loadData($table,$id,$option1,$option2){
     
        if($table=='category'){
           
            $sub=Subcategory::where('category_id',$id)->get();
            $data='';

        foreach ($sub as $value) {
            $data.="<option value='".$value->id."'>".$value->subcategory."</option>";
        }
                    return response()->json($data);
        }
        if($table=='subcategory'){
            $sub=Modal::where('category_id',$option1)->where('subcategory_id',$id)->get();
            $data='';

        foreach ($sub as $value) {
            $data.="<option value='".$value->id."'>".$value->modal."</option>";
        }
                    return response()->json($data);
        }

        if($table=='model'){
            $sub=Part::where('category_id',$option1)->where('subcategory_id',$option2)->where('modal_id',$id)->get();
            $data='';
       
        foreach ($sub as $value) {
            
            $data.="<option value='".$value->id."' data-price='".$value->price."'>".$value->part."</option>";
        }
                    return response()->json($data);
        }
        
    }

   public function loadPrice($id){
       $price=Part::where('id',$id)->value('price');
        return response()->json($price);
    }


    public function store(Request $request){
        $request->validate([
            'device'=>'required',
            'brand'=>'required',
            'model'=>'required',
            'name'=>'required',
            'email'=>'email|required',
            'phone'=>'required',
            'address'=>'required',
            'date'=>'required',
            'time'=>'required',
            'price'=>'required',




        ]);
        try {
            $appo=new Apponitment;           
     
            $appo->name=$request->name;
            $appo->phone=$request->phone;
            $appo->address=$request->address;
            $appo->email=$request->email;
            $appo->date=$request->date;
            $appo->total=$request->price;
            $appo->time=$request->time;
            $appo->store=$request->store;


            if($appo->save()){
            $appoD=new ApponitmentDetail;           
                    $appoD->device=DB::table('categories')->where('id',$request->device)->value('category');;
                    $appoD->brand=DB::table('subcategories')->where('id',$request->brand)->value('subcategory');
                    $appoD->appointment_id=$appo->id;
                    $appoD->modal=DB::table('modals')->where('id',$request->model)->value('modal');
                    $appoD->part=DB::table('parts')->where('id',$request->part)->value('part');
                    $appoD->price=$request->price;
                    $appoD->msg=$request->msg;
                  if(  $appoD->save()){
                    $notification=array(
                        'alert-type'=>'success',
                        'messege'=>'Thank you for choosing us.We are happy to see you at our store',
                       
                     );
                     return redirect()->back()->with($notification);
                  }


           
            }else{
                $notification=array(
                    'alert-type'=>'info',
                    'messege'=>'opps.we are having problem right now.Try again later.',
                   
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


    public function history(){

        if(Auth::check()){
            try {
                //code...
           
            $appointment=Apponitment::where('user_id',Auth::user()->id)->get();
            return view('frontend.appointment.history',compact('appointment'));
        } catch (\Throwable $th) {
            $notification=array(
                'alert-type'=>'error',
                'messege'=>'Something went wrong.Try again later',
               
             );
             return redirect()->back()->with($notification);
        }
        }else{
            $notification=array(
                'alert-type'=>'error',
                'messege'=>'Please login',
               
             );
             return redirect()->route('/')->with($notification);
        }
      
    }


    public function show($id){

        if(Auth::check()){
            try {
                //code...
           
            $appointment=Apponitment::where('user_id',Auth::user()->id)->where('id',$id)->first();
            if($appointment){
                $appo=ApponitmentDetail::where('appointment_id',$id)->get();
                return view('frontend.appointment.show',compact('appointment','appo'));
            }else{
                $notification=array(
                    'alert-type'=>'error',
                    'messege'=>'Something went wrong.Try again later',
                   
                 );
                 return redirect()->route('/')->with($notification);
            }
          

        } catch (\Throwable $th) {
            $notification=array(
                'alert-type'=>'error',
                'messege'=>'Something went wrong.Try again later',
               
             );
             return redirect()->back()->with($notification);
        }
        }else{
            $notification=array(
                'alert-type'=>'error',
                'messege'=>'Please login',
               
             );
             return redirect()->route('/')->with($notification);
        }
      
    }

public function time(Request $request){
    // return Carbon::parse(today());
    if(Carbon::parse($request->date)==today()){
       $time=Time::where('times','>=',date('H:i:s'))->get();
       

    }else{
        $time=Time::all();

    }
    $data='';
    
    foreach ($time as  $value) {
$data.="<label class=' ajax_time  mx-2'><input value='".$value->times."' type='radio' class='d-none' name='time' required='required'/><span>$value->times $value->unit</span></label>";
        
    }
    return response()->json($data );
}

}
