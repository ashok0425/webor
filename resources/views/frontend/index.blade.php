@php
    define('PAGE','home')
@endphp
@extends('frontend.layout.master')
@section('content')


    <!-- ======================================== -->

 
    <!-- =====       ==================================== -->

  @include('frontend.template.banner')
    <!-- ============================= -->

    <!-- Product Category Wrapper -->
  @include('frontend.template.featuredproduct')
   
    <!-- ======================== -->

    <!-- Top Products Wrapper -->
  @include('frontend.template.top')
   
    <!-- ==================== -->

    <!-- Shop Banner -->
    @include('frontend.template.bannerinner')
  
    <!-- =========== -->


    <!-- Shop Banner -->
    @include('frontend.template.shopbanner')

    <!-- =========== -->

    <!-- Text Wrapper -->
    <section class="container text-center">
        <h2 class="custom-fw-700 custom-fs-50 custom-text-secondary">Get a Mesh Dress for your Wardrobe</h2>
        <p class="custom-text-secondary custom-fs-16 custom-fw-400 mt-4">
        
            Check out beautifully steel-boned corsets with premium build quality with a high-end finish.
            
         
            Have control over the rumors with the fabulous PVC Outfits. Embrace yourself with our eye-catching collection of vinyl clothing.
            
            <br/>

            The viral Mask Dress is in trend for a reason. Look captivating and be on trend with our astonishing collection of these Mask Dress.
            
          <br/>
            Spice up your wardrobe and bring in the all eyes-on-you vibe to the stage. Make a glamorous statement with our collection of Mesh Dress.
             
        </p>
      
    </section>
    <!-- ============ -->

    <!-- Our Gallery Wrapper -->
    @include('frontend.template.gallery')
   
    <!-- =================== -->

    <!-- Shop Banner -->
    <section class="container">
        @php
$banner=DB::table('banners')->where('status',1)->where('type',1)->orderBy('id','desc')->skip(2)->value('image');
@endphp
        <a href="./shop.html">
            <img class="custom-shop-banner-resize" src="{{asset($banner)}}" alt="shop banner" />
        </a>
    </section>
    <!-- =========== -->
@endsection