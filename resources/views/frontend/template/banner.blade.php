

<style>
.owl-theme .owl-dots .owl-dot{
    bottom:-40%!important;
   

}
.owl-theme .owl-dots .owl-dot span{
 width:20px!important;
    height:20px!important;
    background:var(--custom-secondary)!important;
}
</style>
 @php
 $banner=DB::table('banners')->where('status',1)->where('type',0)->orderBy('id','desc')->get();
@endphp
    <!-- Hero Carousel Wrapper -->
    <section>
      <div id="carousel1" class="owl-carousel owl-theme" >
             @foreach ($banner as $item)
             <div class=" custom-hero-resize">
                <img src="{{asset($item->image)}}" class="d-block w-100 custom-hero-resize" alt="...">
                <div class="carousel-caption forced-centered">
                    <h2 class="custom-fs-140 custom-fw-700">{{$item->title}}</h2>
                    
<div class=" mt-5">
    <a class="btn custom-fs-25 custom-fw-400 custom-bc-secondary bg-white px-4 custom-text-secondary text-transform-uppercase bg_hover" href="{{route('store')}}">SHOP NOW</a>

</div>
                </div>
            </div>
          
             @endforeach
           
          </div>
         
  </section>
  @push('scripts')
      <script>
          $('#carousel1').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    dots:true,
    nav:false,
    responsive:{
        0:{
            items:1,
        },
        600:{
            items:1,
        },
        1000:{
            items:1,
           
        }
    }
})
      </script>
  @endpush
