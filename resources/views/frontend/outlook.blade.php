@php
    define('PAGE','lookbook');
@endphp
@section('title')
Outlook
@endsection
@extends('frontend.layout.master')
@section('content')
<section>
    @php
        $outlook1=DB::table('times')->where('unit',1)->orderBy('id','desc')->value('image');
        $outlook2=DB::table('times')->where('unit',2)->orderBy('id','desc')->value('image');
        $outlook3=DB::table('times')->where('unit',3)->orderBy('id','desc')->value('image');
        $outlook4=DB::table('times')->where('unit',4)->orderBy('id','desc')->value('image');
        $outlook5=DB::table('times')->where('unit',5)->orderBy('id','desc')->value('image');
        $outlook6=DB::table('times')->where('unit',6)->orderBy('id','desc')->value('image');
        $outlook7=DB::table('times')->where('unit',7)->orderBy('id','desc')->value('image');
        $outlook8=DB::table('times')->where('unit',8)->orderBy('id','desc')->limit(4)->get();
        $outlook9=DB::table('times')->where('unit',9)->orderBy('id','desc')->get();


    @endphp
    <!-- First section -->
    <div class="container py-4">
        <div class="row align-items-end">
            <div class="col-md-6 col-lg-6">
                <h2 class="custom-fw-700 custom-fs-50 custom-text-secondary mb-4">Take inspiration from our model on how you can style them the best.
                </h2>
                <img class="custom-category-img-resize" src="{{asset($outlook1)}}" alt="look book image/thumbnail" />
            </div>
            <div class="col-md-6 col-lg-6 mt-3">
                <div class="d-flex flex-column align-items-end">
                    <div style="width: 85%;">
                        <img class="custom-lookbook-resize" src="{{asset($outlook2)}}" alt="look book image/thumbnail" />
                    </div>
                    <div>
                        <h3 class="custom-fw-600 custom-text-secondary mt-5"> 1. PVC Outfit</h3>
                    <p class="custom-fw-400 custom-text-secondary custom-fs-16 m-0 mb-5 py-2">
                        Look fabulous with our PVC outfit. PVC outfit, also called vinyl clothing is shiny clothing made from plastic polyvinyl chloride. Shine on the floor with fitting PVC articles of clothing and flaunt your tantalizing beauty with these colorful items of clothing
<br>
Don’t let the societal norms hold you down and look fabulous while getting comfortable with your body. Embrace yourself with the PVC Outfit.
                    </p>
                    
                   <a href="#down" class="custom-text-secondary"><i class="far fa-arrow-alt-circle-down fa-4x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Description -->
    <div class="container py-4">
        <div class="row">
            <div class="col-md-2 col-lg-2"></div>
            <div class="col-md-10 col-lg-10">
                <h3 class="custom-fw-600 custom-text-secondary mt-5"> 2. Mask Dress</h3>
                    <p class="custom-fw-400 custom-text-secondary custom-fs-16 m-0 mb-5 py-2">
                        Are you worried the mask is gonna ruin your outfit? Especially in these crucial times, you can’t afford to go maskless as well. You don’t have to worry anymore.
<br>
                        With an attractive and trendy Mask Dress, you can easily make a mask part of your outfit as well. Wear the Mask Dress above your safety mask and Boom! No more bland-looking masks that don’t fit in with your dress.
                        
                        Moreover, with these dresses on trends, you are guaranteed to look fabulous and trendy.
                        
                    </p>
                    
            </div>
        </div>
    </div>

    <!-- Fresh Collections -->
    <div class="container py-4" id="down">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-7">
                <h2 class="custom-fw-700 custom-fs-50 custom-text-secondary mb-4">Fresh Collections Just for You</h2>
                <img class="custom-lookbook-resize" src="{{asset($outlook3)}}" alt="look book image/thumbnail" />
                <div style="max-width: 440px; margin: auto;">
                    <h3 class="custom-fw-600 custom-text-secondary mt-5"> 3. Mesh Dress</h3>
                    <p class="custom-fw-400 custom-text-secondary custom-fs-16 m-0 mb-5 py-2">
                        Looking for a dress that guarantees to make you the center of appreciating eyes? Mesh Dress is the one for you. Mesh is a loosely woven or knitted fabric that has many closely spaced holes. And, adding a super luxe finish to your look whilst showing off your shape is easily achievable through our Mesh Dress.
<br>
                        With a wide variety of types, you can easily choose between which feels like you and suits you. Be confident in how you look and have all the eyes on you with our selection of elegant Mesh Dress.
                        
                        
                    </p>
                    <a href="{{route('store')}}" class="custom-fw-600 custom-fs-16 custom-text-secondary border border-0 custom-bc-secondary border-bottom">Browse all collection</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-5">
                <div class="row align-items-center">
                    <div class="col-sm-6 col-md-12 col-lg-12">
                        <img class="custom-lookbook-resize" src="{{asset($outlook4)}}" alt="look book image/thumbnail" />
                    </div>
                    <div class="col-sm-6 col-md-12 col-lg-12 mt-4">
                        <img class="custom-lookbook-resize" src="{{asset($outlook5)}}" alt="look book image/thumbnail" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Comfy & Modern -->
    <div class="container py-4">
        <div class="row align-items-center">
            <div class="col-md-6 col-lg-5">
                <img class="custom-category-img-resize " src="{{asset($outlook6)}}" alt="comfy and moder image/thumbnail" />
            </div>
            <div class="col-md-6 col-lg-7">
                <h3 class="custom-fw-600 custom-text-secondary mt-5"> 4. Corset</h3>
                <p class="custom-fw-400 custom-text-secondary custom-fs-16 m-0 mb-5 py-2">
                    Flaunt your curves and waist to boost your confidence with our selection of eye-catching and glamorous corsets. Looking your best with a corset has never been this comfortable before.
<br>
                    Combine the curve flaunting dress with comfort and style with our Corset. Get your corset from the wide selection of designs and styles that are greatly varied to suit your style.
                    
                    
                    
                </p>
                <a href="{{route('store')}}" class="mt-4 btn border custom-bc-secondary border-1 px-5 custom-fw-400 custom-fs-25">Shop now</a>
                <div class="mt-4">
                    <img class="custom-lookbook-resize" src="{{asset($outlook7)}}" alt="comfy and moder image/thumbnail" />
                </div>
            </div>
        </div>
    </div>

    <!-- Images banner -->
    <div class="container py-4">
        <div class="custom-br-10" style="background-color: #D1C7CF;">
            <div class="custom-lookbook-grid">
                @foreach ($outlook8 as $item)
                <img class="custom-br-10 custom-lookbook-resize" src="{{asset($item->image)}}" alt="look book image banner" />
                @endforeach
              
             
            </div>
        </div>
    </div>

    <!-- See other in style -->
    <div class="container mt-4">
        <div class="p-4 custom-bg-light" style="border-radius: 30px 30px 0 0;">
            <h2 class="custom-fw-700 custom-fs-50 custom-text-secondary text-center">See other in style</h2>
            <div class="custom-product-grid mt-4">
                @foreach ($outlook9 as $item)
                <div class="card border-0">
                    <img src="{{asset($item->image)}}" alt="see other in style thumbnail" />
                </div>
                @endforeach

            </div>
            @php
      $insta=DB::table('websites')->first();
  @endphp
  <div class="text-center pt-5">
      <a href="{{$insta->instagram1}}" class="btn custom-fs-25 custom-fw-600 custom-bc-secondary px-4 custom-text-secondary border-2">
          <span>
               <i class="fab fa-instagram custom-fs-30 "></i>                                  
          </span>
          <span>Follow us</span>
      </a>
  </div>
            
        </div>
    </div>
</section>
@endsection