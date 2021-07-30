@php
define('PAGE','shop')
@endphp



@extends('frontend.layout.master')
@section('content')
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
  .size{
    margin: 0 10px ;
    

  }
  .size input{
      display: none;
  }
  .size input:checked + span{
      border: 2px solid #d2a758;
      padding: 2px 10px ;

  }
</style>

<section>
  <!-- Images banner -->
  <div class="container py-4">
      <div style="background-color: #D1C7CF;">
          <div class="custom-chooseoption-grid">
            @if ($color1)
              <img class="custom-lookbook-resize" src="{{asset($color1)}}" alt="choose options image banner" />
                
            @endif
              <img class="custom-lookbook-resize" src="{{asset($product->image)}}" alt="choose options image banner" />
            @if ($color2)

              <img class="custom-lookbook-resize" src="{{asset($color2)}}" alt="choose options image banner" />
              @endif
         
          </div>
      </div>
  </div>
  
  <!-- Product title -->
  <div class="container">
    <form action="{{route('addtocart')}}" method="POST">
@csrf
<input type="hidden" value="{{$product->id}}" name='pid'>
      <div class="row align-items-center border border-0 border-2 border-bottom pb-4 custom-bc-secondary">
          <div class="col-lg-4 col-md-6 col-sm-12 py-1"><h3 class="custom-fs-40 custom-fw-500 custom-text-secondary">{{$product->name}}</h3></div>
          <div class="col-lg-2 col-md-6 col-sm-12 py-1"><p class="m-0 custom-fs-30 custom-fw-400 custom-text-secondary">{{__getPriceunit()}} {{$product->price}}/-</p></div>
          <div class="col-lg-3 col-md-6 col-sm-12 py-1">
              @foreach ($variation as $item)

              
              <label class="size custom-fs-30 custom-fw-400 ">
                <input  type="radio" name="size" @if ($loop->first)
                    checked
                @endif value="{{$item->variation}}" />
                  <span>{{$item->variation}} </span>
              </label>
              @endforeach
             
          
          </div>
          <div class="col-lg-3 col-md-6 col-sm-12 py-1">
              <button class="btn border border-2 custom-bc-secondary custom-text-secondary custom-fs-25 custom-fw-400 px-5">Add to Bag</button>
          </div>
          <div class="col-md-2 offset-md-6 text-center">
            <p class="ml-5 mt-2"> 
              <a href="" data-bs-toggle="modal" data-bs-target="#size" class="custom-text-secondary review_model ">Size Detail</a> </p>
          </div>
      </div>
    </form>

  </div>

  <div class="container">
      <div class="row">
          <!-- Product Description -->
          <div class="col-md-6 col-lg-6 mt-5">
            {!!$product->long_desc!!}
          </div>
          <!-- Review -->
          @php
          $rev=DB::table('productreviews')->where('pid',$product->id)->avg('rating');
          $total=DB::table('productreviews')->where('pid',$product->id)->get();
      @endphp
          <div class="col-md-6 col-lg-6 mt-5">
              <div class="d-flex align-items-center ">
                  <h3 class="m-0 custom-text-secondary custom-fw-600 custom-fs-40 me-5">Reviews</h3>
                  <div class="d-flex align-items-center">
                      
                    <?php for($i=1;$i<=ceil($rev);$i++){ ?>
                        <span class="fa fa-star custom-text-primary" ></span>
                        <?php  }?>
              
                        <?php for($j=1;$j<=5-ceil($rev);$j++) {?>
                       <span class="fas fa-star custom-text-secondary"></span>
                        <?php  } ?>
                  </div>
                 
              </div>
              <div>
                  @if(Auth::check()&&DB::table('productreviews')->where('uid',Auth::user()->id)->where('pid',$product->id)->first())
                  @else 
                  
                   <a href="" data-bs-toggle="modal" data-bs-target="#reviewmodel" class="review_model badge custom-bg-primary text-white mb-1 px-5 py-2">Write  Review</a> 
                  @endif
              </div>
              <?php
              $revs=DB::table('productreviews')->join('users','users.id','productreviews.uid')->where('productreviews.pid',$product->id)->select('productreviews.*','users.name','users.profile_photo_path')->orderBy('id','desc')->get();
                                  ?>
                                  @foreach ($revs as $item)
                                      
              <div class="border border-2 custom-bc-secondary px-4 py-1 mt-3">
                  {{-- <h4 class="custom-text-secondary custom-fw-700 custom-fs-22 m-0">Comfortable to Wear</h4> --}}
                  <p class="custom-text-secondary custom-fw-400 custom-fs-16 m-0 ">
                     {{$item->feedback}}
                  </p>
                  <div class="d-flex align-items-center justify-content-between mt-3">
                      <div class="d-flex align-items-center">
                    <p class="custom-fs-28 custom-fw-600">    {{ $item->name }}&nbsp;&nbsp;&nbsp;&nbsp;</p>
                        @if (Auth::check() && Auth::user()->id==$item->uid)
                        <p style="margin-left: auto"><a href="" data-bs-toggle="modal" data-bs-target="#editreviewmodel" data-id="{{$item->id}}" class="editreview" style="font-size: 1rem;color:rgb(0, 68, 255);">
                    Edit
                        </a> | <a href="{{ route('rating.delete',['id'=>$item->id]) }}" style="font-size: 1rem;color:rgb(0, 68, 255);">Delete</a></p>
                        @endif
                      </div>
                      <div class="d-flex align-items-center">
                        <?php for($i=1;$i<=ceil($item->rating);$i++){ ?>
                            <span class="fa fa-star custom-text-primary" ></span>
                            <?php  }?>
                  
                            <?php for($j=1;$j<=5-ceil($item->rating);$j++) {?>
                           <span class="fas fa-star custom-text-secondary"></span>
                            <?php  } ?>
                      </div>
                  </div>
              </div>
              @endforeach
             
          </div>
      </div>
  </div>
  @php
  $banner=DB::table('products')->where('status',1)->inRandomOrder()->limit(2)->get();
  @endphp
  <!-- You will love these -->
  <div class="container pt-5 mt-5">
      <h3 class="custom-fs-30 custom-fw-500 custom-text-secondary text-center mb-4">You will love these</h3>
      <div class="custom-product-grid">
        @foreach ($banner as $item)
        <div>
            <a href="{{route('product.detail',['id'=>$item->id,'name'=>$item->name])}}">
  
            <div class="card border-0">
  
              <img src="{{asset($item->image)}}" alt="product thumbnail" />
              <div class="card-body p-0 d-flex justify-content-between align-items-center padx-4">
                  <div>
                      <span class="custom-fs-28 custom-fw-500 custom-text-secondary">{{$item->name}}</span>
                      <p class="custom-text-secondary custom-text-secondary custom-fs-18">{{__getPriceunit()}}{{$item->price}}/-</p>
                  </div>
                  <div>
                  <span><i class="fas fa-shopping-cart custom-text-secondary custom-fs-28"></i></span>                                   
                  </div>
              </div>
          </div>
        </a>
  
        </div>
        @endforeach
      </div>
  </div>
</section>
   

 {{-- Size model  --}}
 <div class="modal fade" id="size" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content py-3 px-5">
    <img src="{{asset('size.jpg')}}" alt="size detail" class="img-fluid">
     
     
      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
      
  
    </div>
  </div>
  </div>
  




{{-- review model  --}}








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
        <input type="submit" name="savert" value="Feedback" class="btn custom-bg-primary">
        
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
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
            <input type="submit" name="savert" value="Feedback" class="btn custom-bg-primary btn-sm">
            <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
            </div>
          </form>
  
      </div>
    </div>
    </div>
  

  @endsection
