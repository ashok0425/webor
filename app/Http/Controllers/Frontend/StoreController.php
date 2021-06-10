<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Productvariation;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;
class StoreController extends Controller
{
    public function allProduct(){
        $product=Product::orderBy('id','desc')->get();
        $device=Category::orderBy('id','desc')->get();
        $brand=Subcategory::orderBy('id','desc')->get();
        $space=Productvariation::orderBy('id','desc')->select('variation')->groupBy('variation')->get();

        return view('frontend.store',compact('product','device','brand','space'));
    }



    
  public function filterProductAjax(Request $request){
    $category_all="SELECT products.*,productvariations.variation,productvariations.price as vprice FROM products JOIN productvariations ON productvariations.product_id=products.id  WHERE products.status=1 ";
 if(isset($request->min) || isset($request->max)  && !empty($request->min) && !empty( $request->max)){

   $category_all .= " AND products.price BETWEEN $request->min AND $request->max";


 }
 
 if(isset($request->category )){
     $ex=implode("','",$request->category);
  $category_all .= " AND  products.category_id IN ('".$ex."')";

 }
 if(isset($request->subcategory )){
  $ex=implode("','",$request->subcategory);
$category_all .= " AND  products.subcategory_id IN ('".$ex."')";

}
 if(isset($request->space )){
  $ex=implode("','",$request->space);
 
$category_all .= " AND  productvariations.variation IN ('".$ex."')";

}


if(isset($request->order)&&$request->order==5){
 $category_all .= "   AND hotdeal=1 ";
}
if(isset($request->order)&&$request->order==1){

  $category_all .= "   ORDER BY selling_price DESC ";
 
 
 }
if(isset($request->order)&&$request->order==2){

     $category_all .= "   ORDER BY selling_price ASC ";

    }
    if(isset($request->order)&&$request->order==3){

         $category_all .= "  ORDER  BY  id  DESC ";

        }
        if(isset($request->order)&&$request->order==4){

             $category_all .= "   ORDER BY id ASC ";

            }
           
            
$cat=DB::select($category_all);
    $data='';
    foreach($cat as $item){

$data.=	"<div class='col-md-3 col-sm-4 col-6'><a href='".route('product.detail',['id'=>$item->id,'name'=>$item->name])."' class='swiper-slide sv-feature-product-box m-2'><div class='sv-feature-product-img'><img src='".asset($item->image)."'  class='img-fluid' /></div><div class='sv-feature-product-desc'>
  <p class='sv-feature-product-name'> $item->name </p>  <p class='sv-feature-product-price'>";
  if(isset($request->space )){
  
    $data.= __getPriceunit().number_format((float)$item->vprice,2);
  }else{
    $data.= __getPriceunit().number_format((float)$item->price,2);
  };
  
  $data.= "</p>
</div>
</a>
</div>";
        }   
return response()->json($data);


  }

}
