@extends('frontend.layout.master')
@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/productinfo.css')}}" />
<style>
#gallery_01 img{border:2px solid white;}
 
 /*Change the colour*/
 .active img{border:2px solid #333 !important;}


 /* rating  */
 .rating {
	  float:left;
  }
  /* :not(:checked) is a filter, so that browsers that don’t support :checked don’t 
	 follow these rules. Every browser that supports :checked also supports :not(), so
	 it doesn’t make the test unnecessarily selective */
  .rating:not(:checked) > input {
	  position:absolute;
	  top:-9999px;
	  clip:rect(0,0,0,0);
  }
.col{
	color:rgb(180, 179, 179)!important;

  }
  .rating:not(:checked) > label {
	  float:right;
	  width:1em;
	  padding:0 .1em;
	  overflow:hidden;
	  white-space:nowrap;
	  cursor:pointer;
	  font-size:200%;
	  line-height:1.2;
	  color:rgb(175, 175, 175);
	  text-shadow:1px 1px #bbb, 2px 2px #666, .1em .1em .2em rgba(0,0,0,.5);
  }
  
  .rating:not(:checked) > label:before {
	  content: '★';
  }
  
  .rating > input:checked ~ label {
	  color: #f70;
	  text-shadow:1px 1px #c60, 2px 2px #940, .1em .1em .2em rgba(0,0,0,.5);
  }
  .rtn{
	float: left;
	width: 100%;
  }
  .rating:not(:checked) > label:hover,
  .rating:not(:checked) > label:hover ~ label {
	  color: gold;
	  text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
  }
  
  .rating > input:checked + label:hover,
  .rating > input:checked + label:hover ~ label,
  .rating > input:checked ~ label:hover,
  .rating > input:checked ~ label:hover ~ label,
  .rating > label:hover ~ input:checked ~ label {
	  color: #ea0;
	  text-shadow:1px 1px goldenrod, 2px 2px #B57340, .1em .1em .2em rgba(0,0,0,.5);
  }
  
  .rating > label:active {
	  position:relative;
	  top:2px;
	  left:2px;
  }
  
  .checked{
	color: orange;
  }
  .at-share-btn-elements{
	  margin-top:35px!important;
  }
</style>

<div class="sv-product-info mt-5">
    <div class="container">
      <form action="{{ route('addtocart') }}" method="POST">
        @csrf
        <input type="hidden" value="{{ $product->id }}" name="pid">
      <div class="product-info-top">
        <div class="sv-product-info-title">
          <h2>{{ $product->name }} </h2>
        </div>
        <div class="d-flex sv-product-info-wrapper">
          <!-- left secton -->
          <div class="sv-product-info-left">
            <div class="container">

         <div class="row">
           <div class="col-md-2">
            <div id="gal1" >
 
          
            
            @foreach ($color as $item)
            
              <a href="#" data-image="{{asset($item->image) }}" data-zoom-image="{{asset($item->image) }}" >
                <img id="img_01" src="{{asset($item->image) }}" class="img-fluid mb-3"/>
              </a>

                
            @endforeach
            </div>

           </div>
           
           <div class="col-md-10 border box-shadow offset-md-1" style="max-width: 300px">
          
              
              <img id="zoom_01" src='{{asset($product->image) }}' data-zoom-image="{{asset($product->image) }}" width="270" class="mx-auto main_image" height="330" style="max-width: 270px"/>
           </div>
         </div>
        </div>
      </div>



          <!-- right section -->
          <div class="sv-product-info-right">
            <div class="sv-product-info-price">
              @php
                  $price=DB::table('productvariations')->where('product_id',$product->id)->first();
              @endphp
              <p>Price</p>
              <h3>{{ __getPriceunit()}}<span class="Vprice">
                @if($price)
                  {{$price->price}}
                    @else 
                  {{$product->price}}
                @endif
                </span></h3>
            </div>
            {{-- <div class="sv-product-info-offers">
              <p>Offers</p>
              <h3>10% Dis</h3>
            </div> --}}
            <div class="sv-product-info-stock">
              <p> <span class="text-dark">Device</span> : {{ $product->category }}</p>
              <p> <span class="text-dark">Brand</span> : {{ $product->subcategory }}</p>

              <h6>Varient Available</h6>
            </div>
            <div class="sv-product-info-colors">
              <p>Color</p>
              <div class="sv-product-info-colors-wrapper">
                    @foreach ($color as $item)
                    <label class="radio-container">
                        <input type="radio" checked="checked" name="color" class="img" value="{{ $item->id }}" required/>
                        <span class="checkmark checkmark-red photo" style="background: {{ $item->color }}"></span>
                      </label>
                    @endforeach
                
               
                  
              </div>
            </div>
            <div class="sv-product-info-storage">
              <p>Storage</p>
              <div class="sv-product-info-storage-wrapper buttongroup">
              @foreach ($variation as $item)
          <span>

            <input id="{{ $item->variation }}" type="radio" value="{{ $item->id }}" name="storage" class="variation" required @if ($item->id==1)
            checked
            @endif /> 
            <label for="{{ $item->variation }}" class="storage">    
                {{ $item->variation }}
            </label>
          </span>
                
              @endforeach
            </div>
              
            </div>
            <div class="sv-product-info-checkout">
              <input type="submit" value="Add to Cart" name="submit">
              <input type="submit" name="submit" value="Checkout">
            </div>
          </div>
        </div>
      </div>
    </form>
      <!-- product info bottom -->
      <div class="d-flex sv-product-info-bottom">
        <!-- left section -->
        <div class="sv-product-info-bottom-left">
          <div class="mb-3 sv-product-info-bottom-left-title">
            <h4>Product Description</h4>
          </div>
          <div class="sv-product-info-desc">
            <h6>
              Product works and looks like new. Backed by the 90-day
              Guarantee.
            </h6>
            <p>
              This pre-owned product is not Apple certified, but has been
              professionally inspected, tested and cleaned by Amazon-qualified
              suppliers. -There will be no visible cosmetic imperfections when
              held at an arm’s length. -This product will have a battery which
              exceeds 80% capacity relative to new. Accessories will not be
              original, but will be compatible and fully functional. Product
              may come in generic Box.
            </p>
          </div>
        </div>
        <!-- right section -->
        <div class="sv-product-info-bottom-right">
          <div class="sv-product-info-bottom-right-title">
            <h4>Product Review</h4>
          <!-- Button trigger modal -->



            <?php
            $rev=DB::table('productreviews')->join('users','users.id','productreviews.uid')->where('productreviews.pid',$product->id)->select('productreviews.*','users.name','users.profile_photo_path')->get();
                                ?>
                                <div class="row">
                                 
                            <div class="col-md-12">
                       
          
                              <a href="#" data-toggle="modal" data-target="#reviewmodel" class="review_model badge bg-info text-white mb-1">Give  feedback</a> 
                            </div>
                                @foreach ($rev as $row)
                                <div class="col-md-12">
                                <p>
                                <h4 class="text-dark d-flex align-items-center">
                                  @if ($row->profile_photo_path)
                                  <img src="{{asset($row->profile_photo_path)}}" alt="{{$row->profile_photo_path}}" width="40" class="rounded-circle">
                                  @else
                                  <img src="{{asset('frontend/download.webp')}}" alt="{{$row->profile_photo_path}}" width="40" class="rounded-circle">
                                    
                                  @endif
                                  
                                  
                                  
                                  &nbsp;&nbsp;{{ $row->name }}
                                {{-- @if (Auth::check() && Auth::user()->id==$row->uid) --}}
                                <p style="margin-left: auto"><a href="" data-toggle="modal" data-target="#editreviewmodel" data-id="{{$row->id}}" class="editreview" style="font-size: 1rem;color:rgb(0, 68, 255);">
                            Edit
                                </a> | <a href="{{route('rating.delete',['id'=>$row->id])}}" style="font-size: 1rem;color:rgb(0, 68, 255);">Delete</a></p>
                                {{-- @endif --}}
                                </h4>
                            
                                <?php for($i=1;$i<=$row->rating;$i++){ ?>
                                <span class="fa fa-star checked"></span>
                                <?php  }?>
                            
                                <?php for($j=1;$j<=5-$row->rating;$j++) {?>
                                 <span class="fa fa-star text-gray"></span>
                                <?php  } ?>
                                <p>
                                  {{$row->feedback}}
                                </p>
                                <small>{{carbon\carbon::parse($row->updated_at)->diffForHumans()}}</small>
                                </p>
                                <hr style="margin-bottom: 0px">
                                 </div>
                                @endforeach


          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- new section -->
  <!-- related products -->
  <!-- new sectin -->
  <!-- feature products -->
  <div class="sv-feature-product">
    <div class="container-fluid">
      <div class="sv-why-work-title">
        <h2>Related Product</h2>
      </div>
@php
    $pro=DB::table('products')->where('status',1)->where('category_id',$product->category_id)->get();
@endphp
      <!-- Swiper -->
      <div class="swiper-container feature-swiper">
        <div class="swiper-wrapper">
          <!-- each box -->
 
 @foreach ($pro as $item)
          <a href="#" class="swiper-slide sv-feature-product-box">
            <div class="sv-feature-product-img">
              <img src="{{ asset($item->image)}}" alt="" />
            </div>
            <div class="sv-feature-product-desc">
              <p class="sv-feature-product-name">{{ $item->name }}</p>
              <p class="sv-feature-product-price">{{ $item->price }}</p>
            </div>
          </a>
          @endforeach
         
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>
    </div>
  </div>
 











   
    {{-- review model  --}}
  <div class="modal fade" id="reviewmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content py-3 px-5">
      <div class="modal-header">
   
      </div>
       
       
      <form action=" {{route('rating.store')}}" method="POST">
        @csrf
        <input type="hidden" name="pid" value="{{$product->id}}">
        <p>Ratting</p>
        <div class="rtn">
        <fieldset class="rating">
        <input type="radio" id="star5" name="rating" value="5" />
        <label for="star5" title="Rocks!">5 stars</label>
        <input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label>
        <input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label>
        <input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label>
        <input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label>
        </fieldset>
        </div>
        
        <p>Review</p>
        <p><textarea class="form-control" name="review" required ></textarea></p>
        
        
        <div class="modal-footer">
        <input type="submit" name="savert" value="Feedback" class="btn btn-primary">
        
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        </form>
    
      </div>
    </div>
    </div>
    
  
  
  
  
  {{-- review model  --}}
  <div class="modal fade" id="editreviewmodel" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content py-3 px-5">
      <div class="modal-header">
      
        </div>
       
        
        <form action=" {{route('rating.update')}}" method="POST">
            @csrf
            <input type="hidden" name="pid" value="{{$product->id}}">
            <input type="hidden" name="vid" value="" id="vid">
  
          <p>Review</p>
          <p><textarea class="form-control" name="review" required id="text"></textarea></p>
          
            
          <div class="modal-footer">
            <input type="submit" name="savert" value="Feedback" class="btn btn-info btn-sm">
            <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
            </div>
          </form>
  
      </div>
    </div>
    </div>
  

  @endsection
