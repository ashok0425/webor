@php
$banner=DB::table('banners')->where('status',1)->where('type',1)->orderBy('id','desc')->value('image');
@endphp
<section class="container py-5">
  <a href="{{route('store')}}">
      <img class="custom-shop-banner-resize img-fluid" src="{{asset($banner)}}" alt="shop banner" />
  </a>
</section>

@php
$banner=DB::table('products')->where('status',1)->orderBy('id','desc')->limit(8)->get();
@endphp
<section class="container">
  <div class="mt-5">
      
           <div id="carousel3" class=" product-grid owl-carousel owl-theme" >
                  @foreach ($banner as $item)
                  <div class="card border-0">
                    <a href="{{route('product.detail',['id'=>$item->id,'name'=>$item->name])}}">
                    <img src="{{asset($item->image)}}" alt="product thumbnail" />
                </a>

                    <div class="card-body p-0 d-flex justify-content-between align-items-center padx-4">
                        <div>
                    <a href="{{route('product.detail',['id'=>$item->id,'name'=>$item->name])}}">

                         <span class="custom-fs-28 custom-fw-500 custom-text-secondary">{{$item->name}}</span>
                        </a>

                            <p class="custom-text-secondary custom-text-secondary custom-fs-18">{{__getPriceunit()}}{{$item->price}}/-</p>
                        </div>
                    
                        <form action="{{route('addtocart')}}" method="POST">
                            @csrf
                            <input type="hidden" value="{{$item->id}}" name='pid'>
                            <button class="cartbtn">

                            <span><i class="fas fa-shopping-cart custom-text-secondary custom-fs-28"></i></span>       
                        </button>
                        </form>
                        </div>
                </div>
               
                  @endforeach
                
               </div>
     


      <div class="text-center pt-4">
          <a href="{{route('store')}}" class="btn custom-fs-25 custom-fw-400 custom-bc-secondary px-4 custom-text-secondary bg_hover">View All</a>
      </div>
  </div>
</section>


@push('scripts')
<script>
    $('#carousel3').owlCarousel({
loop:true,
margin:10,
responsiveClass:true,
dots:false,
nav:true,
responsive:{
  0:{
      items:1,
  },
  600:{
      items:2,
  },
  1000:{
      items:3,
     
  }
}
})
</script>
@endpush