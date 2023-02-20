<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Productvariation;
use App\Models\Product;
use App\Models\Productcolor;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{

    public function index($id=null){
        if(isset($id)){
            $products=DB::table('products')->where('category_id',$id)->orderBy('id','desc')->get();
        }else{
            $products=DB::table('products')->orderBy('id','desc')->get();
        }
        

       return view('frontend.product.index',compact('products'));
    }

   public function deatil($id){
       $product=Product::find($id);
       $sizes=Productvariation::where('product_id',$id)->get();
       $colors=Productcolor::where('product_id',$id)->get();
       $similar=Product::where('category_id',$id)->where('id','!=',$id)->limit(3)->get();



       return view('frontend.product.detail',compact('product','sizes','colors','similar'));

   }


   public function loadImage($id){
    $image=Productcolor::find($id);
    return response()->json(asset($image->image));
}
}

