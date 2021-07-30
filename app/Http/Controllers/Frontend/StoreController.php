<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Productcolor;

use App\Models\Productvariation;

use App\Models\Category;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;
class StoreController extends Controller
{
    public function allProduct(){
        $product=Product::where('status',1)->orderBy('id','desc')->paginate(12);
        $category=Category::orderBy('id','desc')->get();
        $subcategory=Subcategory::orderBy('id','desc')->get();
        $space=Productvariation::orderBy('id','desc')->select('variation')->groupBy('variation')->get();
        $color=Productcolor::orderBy('id','desc')->select('color')->groupBy('color')->get();
        return view('frontend.store',compact('product','category','subcategory','space','color'));
    }



    
  public function filterProductAjax(Request $request){
    $category_all="SELECT products.name,products.price,products.image,products.id FROM products  INNER JOIN  ON productvariations.product_id=products.id  WHERE products.status=1 ";
//  if(isset($request->min) || isset($request->max)  && !empty($request->min) && !empty( $request->max)){

//    $category_all .= " AND products.price BETWEEN $request->min AND $request->max";


//  }
 
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

if(isset($request->order)&&$request->order==6){
  $category_all .= "    ORDER BY products.id ASC ";
 }
if(isset($request->order)&&$request->order==5){
 $category_all .= "    ORDER BY products.id DESC ";
}
if(isset($request->order)&&$request->order==4){

  $category_all .= "   ORDER BY products.name DESC ";
 
 
 }
if(isset($request->order)&&$request->order==3){

     $category_all .= "   ORDER BY products.name ASC ";

    }
    if(isset($request->order)&&$request->order==2){

         $category_all .= "  ORDER  BY  products.price  DESC ";

        }
        if(isset($request->order)&&$request->order==1){

             $category_all .= "  ORDER  BY  products.price  ASC ";

            }
           
            
$cat=DB::select($category_all);
    $data='';
    foreach($cat as $item){

$data.=	"<div class='col-md-4 col-12'>
<div class='card border-0'>
  <a href='".route('product.detail',['id'=>$item->id,'name'=>$item->name])."'>
  <img src='".asset($item->image)."' alt='product thumbnail' />
</a>

  <div class='card-body p-0 d-flex justify-content-between align-items-center padx-4'>
      <div>
  <a href='".route('product.detail',['id'=>$item->id,'name'=>$item->name])."'>

       <span class='custom-fs-28 custom-fw-500 custom-text-secondary'>$item->name</span>
      </a>

          <p class='custom-text-secondary custom-text-secondary custom-fs-18'>";
          $data.=__getPriceunit().$item->price;
          
            $data.=" /-</p>
      </div>
  
      <form action='".route('addtocart.cart')."' method='GET'>
         
          <input type='hidden' value='".$item->id."' name='pid'>
          <button class='cartbtn'>

          <span><i class='fas fa-shopping-cart custom-text-secondary custom-fs-28'></i></span>       
      </button>
      </form>
      </div>
</div>
</div>";
        }   
return response()->json($data);


  }

  public function store($id,$name){
    $product=Product::where('category_id',$id)->where('status',1)->paginate(12);
    $category=Category::orderBy('id','desc')->get();
        $subcategory=Subcategory::orderBy('id','desc')->get();
        $space=Productvariation::orderBy('id','desc')->select('variation')->groupBy('variation')->get();
        $color=Productcolor::orderBy('id','desc')->select('color')->groupBy('color')->get();
        return view('frontend.store',compact('product','category','subcategory','space','color'));
  }

public function search(Request $request){
  $product=Product::where('name','like','%'.$request->product.'%')->where('status',1)->paginate(12);
  $category=Category::orderBy('id','desc')->get();
  $subcategory=Subcategory::orderBy('id','desc')->get();
  $space=Productvariation::orderBy('id','desc')->select('variation')->groupBy('variation')->get();
  $color=Productcolor::orderBy('id','desc')->select('color')->groupBy('color')->get();
  return view('frontend.store',compact('product','category','subcategory','space','color'));
}


}
