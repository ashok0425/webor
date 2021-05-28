<?php
namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use Illuminate\Http\Request;
use App\Models\Productvariation;
use App\Models\Product;
use App\Models\Productcolor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Session;
class CartController  extends Controller
{
    

    public function store(Request $request){
 
       $request->validate([
           'pid'=>'required'
       ]);
      try {
          //checking whether same product is already store in cart or not
       if(Auth::check()){
        $check=DB::table('carts')->where('uid',Auth::user()->id)->where('pid',$request->pid)->first();
        if($check){
       $notification=array(
            'alert-type'=>'info',
            'messege'=>'Product already exist in cart',
           
         );
         return redirect()->back()->with($notification);
}else{
  $cart=new Cart;
          //checking whether the selected product have attribute or not

    $color=ProductColor::find($request->color);
    $size=Productvariation::find($request->storage);
    $product=Productvariation::find($request->pid);

        if(isset($request->color)){
          $cart->color=$color->color;
        }
        if(isset($request->storage)){
          $cart->size=$size->variation;
          $cart->price=$size->price;
        }else{
          $cart->price=$product->price;

        }
            $cart->pid=$request->pid;
            $cart->uid=Auth::user()->id;
        
            $cart->qty=1;


        if($cart->save()){
          $notification=array(
                'alert-type'=>'success',
                'messege'=>'sucessfully added to cart',
              
            );
         return redirect()->back()->with($notification);
     }else{
       $notification=array(
            'alert-type'=>'info',
            'messege'=>'Something went wrong.please try again',
           
         );
         return redirect()->back()->with($notification);
     }
}
  }else{
        $notification=array(
            'alert-type'=>'info',
            'messege'=>'Please login.',
           
         );
         return redirect()->route('login')->with($notification);
       }
    }     

catch (\Throwable $th) {
    $notification=array(
        'alert-type'=>'error',
        'messege'=>'Something went wrong please try again later.',
       
     );
     return redirect()->back()->with($notification);
    }
    }


    public function index(){
        if(Auth::check()){
  
          $cart = DB::table('carts')->join('products','carts.pid','products.id')->select('carts.*','products.name','products.image','products.id as pid')->where('carts.uid',Auth::user()->id)->get();
        return view('frontend.cart',compact('cart'));
      }else{
        return redirect()->route('login');
  
      }
      }



      public function destroy($id){
    
        $cart = DB::table('carts')->where('uid',Auth::user()->id)->where('id',$id)->delete();
        
          $notification=array(
                          'messege'=>'Product Remove form Cart',
                          'alert-type'=>'success'
                           );
                         return Redirect()->back()->with($notification);
  
      }
  
  
      public function update(Request $request){
         
          $cid= $request->cartid;
           DB::table('carts')->where('uid',Auth::user()->id)->where('id',$cid)->update([
               'qty'=>$request->qty
               

           ]);
        $notification=array(
          'messege'=>'Product Quantity Updated',
          'alert-type'=>'success'
           );
         return redirect()->back()->with($notification);
  
      }
  
  
  
  
  
  
  
     public function Checkout(){
    if (Auth::check()) {
        $cart = DB::table('carts')->join('products','carts.pid','products.id')->select('carts.*','products.name','products.image','products.id as pid')->where('carts.uid',Auth::user()->id)->get();

  
  
  
      if(count($cart)>0){
          return view('frontend.checkout',compact('cart'));
        
      }else{
        $notification=array(
          'messege'=>"You don't have any item in cart",
          'alert-type'=>'error'
           );
         return Redirect()->route('/')->with($notification);
      }
  
    }else{
        $notification=array(
                          'messege'=>'Please Login First !',
                          'alert-type'=>'error'
                           );
                         return Redirect()->route('login')->with($notification);
    } 
  
     }
  
  
     
  
     public function Coupon(Request $request){
         $coupon = $request->coupon;
  
      $check = DB::table('coupons')->where('coupon',$coupon)->first();

      $cart = DB::table('carts')->where('uid',Auth::user()->id)->get();

      $grandtotal=0;
  foreach ($cart as $value) {
    $grandtotal+=$value->qty*$value->price;
  }

      if ($check) {

      if($check->expire_at>today()){
        $discount_amount=($check->price*$grandtotal)/100;
if($grandtotal>$check->card_value){

      Session::put('coupon',[
      'name' => $check->coupon,
      'discount' => $check->price,
      'balance' => $grandtotal-$discount_amount,
      ]);
          $notification=array(
                          'messege'=>'Successfully Coupon Applied',
                          'alert-type'=>'success'
                           );
                         return Redirect()->back()->with($notification);
  
}else{
    $notification=array(
        'messege'=>"You arenot eligible to apply this coupon.Your cart value must be more than $ $check->card_value",
        'alert-type'=>'error'
         );
       return Redirect()->back()->with($notification);
}
  
      }else{
         
        
        $notification=array(
            'messege'=>'Sorry you coupon hasbeen expired',
            'alert-type'=>'error'
             );
           return Redirect()->back()->with($notification);
      }
    
    
    }

      else{
          $notification=array(
                          'messege'=>'Invalid Coupon',
                          'alert-type'=>'error'
                           );
                         return Redirect()->back()->with($notification);
      }
  
     }
  
  
   public function CouponRemove(){
       Session::forget('coupon');
       $notification=array(
                          'messege'=>'Coupon remove Successfully',
                          'alert-type'=>'success'
                           );
                         return Redirect()->back()->with($notification);
  
   }
  
  
  
   public function PaymentPage(){
   
    $cart = DB::table('carts')->where('uid',Auth::user()->id)->get();
  if(count($cart)>0){
    return view('frontend.payment',compact('cart'));
  
  }else{
    return redirect()->route('/');
  
  }
  
   }
  
  
   public function Search(Request $request){
   
    $item = $request->search;
    // echo "$item";
  
    $products = DB::table('products')
              ->where('product_name','LIKE',"%$item%")
              ->paginate(20);
  
      return view('pages.search',compact('products'));        
  
  
   }




}

