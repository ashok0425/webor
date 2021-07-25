@php
$banner=DB::table('banners')->where('status',1)->where('type',1)->orderBy('id','desc')->skip(1)->value('image');
@endphp
<section class="container py-5">
  <a href="{{route('store')}}">
      <img class="custom-shop-banner-resize img-fluid" src="{{asset($banner)}}" alt="shop banner" />
  </a>
</section>