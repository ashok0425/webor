


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
                    <h2 class="custom-fs-140 custom-fw-400">{{$item->title}}</h2>
                    <a class="custom-fs-40 custom-fw-600 mt-4 custom-text-white" href="./shop.html">New
                        Collection</a>
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
    dots:false,
    nav:true,
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
