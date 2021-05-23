<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
   <!-- Bootstrap CSS -->
   <link
   href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
   rel="stylesheet"
  
 />
 <!-- fontawesome cdn -->
 <link   rel="stylesheet"   href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <!-- swiper css -->
    <link
      rel="stylesheet"   href="https://unpkg.com/swiper/swiper-bundle.min.css"
    />
    <!-- swiper custom css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/swiper.css')}}" />
    <!-- custom css -->
    <link rel="stylesheet" href="{{ asset('frontend/css/index.css')}}" />
  </head>
  <body>
    <!-- navbar section -->
  
    @include('frontend.layout.topheader')

    <!-- mini navbar -->
  @include('frontend.layout.header')
   


    {{-- main-content  --}}
    @yield('content')

    <!-- new section -->
    <!-- footer section -->
  @include('frontend.layout.footer')
  </body>
  {{-- jquery  --}}
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
  <!-- Bootstrap JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
  <!-- swiper js cdn -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <!-- custom swiper js -->
  <script src="{{ asset('frontend/js/swiper.js')}}"></script>
  <script src="{{ asset('frontend/js/index.js')}}"></script>
</html>
