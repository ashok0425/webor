<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Productvariation;
use App\Models\Product;
use App\Models\Productcolor;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
{

    public function index(Request $request,$id=null){
        $categories=Category::all();

        if(isset($id)){
            $products=Product::where('category_id',$id)->orderBy('id','desc')->get();
            $category=Category::find($id);
       return view('frontend.product.index',compact('products','category','categories'));

        }else{
            $products=Product::orderBy('id','desc');
            if(isset($request->keyword)){
$products=$products->where('name','LIKE',"%".$request->keyword."%");
            }

            if(isset($request->category) && $request->category!=null){
$products=$products->where('category_id',$request->category);
                
            }

            $products=$products->get();
            $category=Category::query()->first();


       return view('frontend.product.index',compact('products','category','categories'));

        }
        

    }

   public function deatil($id){
       $product=Product::find($id);
       $sizes=Productvariation::where('product_id',$id)->get();
       $colors=Productcolor::where('product_id',$id)->get();
       $similar=Product::where('category_id',$product->id)->where('id','!=',$id)->limit(3)->get();



       return view('frontend.product.detail',compact('product','sizes','colors','similar'));

   }


   public function loadImage($id){
    $image=Productcolor::find($id);
    return response()->json(asset($image->image));
}
}

