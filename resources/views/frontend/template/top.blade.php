
@php
$banner=DB::table('products')->where('status',1)->where('top_rated',1)->orderBy('id','desc')->limit(5)->get();
@endphp
<section class="container">
  <h3 class="custom-fw-600 custom-fs-60 text-center">Top Products</h3>
  <div class="mt-5">
      
           <div id="carousel2" class=" product-grid owl-carousel owl-theme" >
                  @foreach ($banner as $item)
                  <div class="card border-0">
                    <a href="{{route('product.detail',['id'=>$item->id,'name'=>$item->name])}}">
                    <img src="{{asset($item->image)}}" alt="product thumbnail" />
                    <div class="card-body p-0 d-flex justify-content-between align-items-center">
                        <div>
                         <span class="custom-fs-28 custom-fw-500 custom-text-secondary">{{$item->name}}</span>
                            <p class="custom-text-secondary custom-text-secondary custom-fs-18">{{__getPriceunit()}}{{$item->price}}/-</p>
                        </div>
                    
                        <span><i class="fas fa-shopping-cart custom-text-secondary custom-fs-28"></i></span>                                   
                        </div>
                        </a>
                </div>
                  @endforeach
                
               </div>
     


      <div class="text-center pt-4">
          <a href="{{route('store')}}" class="btn custom-fs-25 custom-fw-400 custom-bc-secondary px-4 custom-text-secondary">Shop more</a>
      </div>
  </div>
</section>


@push('scripts')
<script>
    $('#carousel2').owlCarousel({
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
      items:3,
  },
  1000:{
      items:4,
     
  }
}
})
</script>
@endpush