<?php
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
 function __getAdmin(){
return Auth::guard('admin')->user();
}

function __active($table,$id){
    $status=Category::find($id);
    $status->status=1;
    $status->save();
    $notification=array(
        'alert-type'=>'info',
        'messege'=>'Status Actived',
       
     );
     return redirect()->back()->with($notification);
}

function __deActive($table,$id){

}