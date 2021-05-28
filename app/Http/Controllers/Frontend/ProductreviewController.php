<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Productvariation;
use App\Models\Product;
use App\Models\Productreview;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProductreviewController  extends Controller
{
    public function store(Request $request)
    {
        // if(Auth::check()){
          $review=new Productreview;
          $review->uid=1;
          $review->pid=$request->pid;

          $review->rating=$request->rating;
          $review->feedback=$request->review;
$review->save();
$notification=array(
    'messege'=>'Thank you for your Feedback',
    'alert-type'=>'success'
     );
   return Redirect()->back()->with($notification);

        // }else{
            $notification=array(
                'messege'=>'Please Login',
                'alert-type'=>'info'
                 );
            return redirect()->route('login')->with($notification);
        // }
    }

    public function edit(Productreview $review,$id)
    {
        $re=Productreview::find($id);
        return response()->json($re);
  
    }




    public function update(Productreview $request)
    {
        dd($request->review);
        $id=$request->vid;
        $re=Productreview::find($id);
        $re->feedback=$request->review;
        $re->save();
        $notification=array(
            'messege'=>'Your feedback updated',
            'alert-type'=>'success'
             );
        return redirect()->back()->with($notification);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productreview $review,$id)
    {
        $re=Productreview::find($id);
        $re->delete();
        $notification=array(
            'messege'=>'Your review was deleted',
            'alert-type'=>'success'
             );
           return Redirect()->back()->with($notification);
    }
}




