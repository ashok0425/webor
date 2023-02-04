@php
    $banners = DB::table('banners')
        ->where('status', 1)
        ->where('type', 1)
    
        ->get();
@endphp
<div class="owl-carousel" id="owl-banner">
    @foreach ($banners as $banner)
        <div class="item item_div">
            <img src="{{ $banner->image }}" class="img-fluid" />

            <div class="home_banner_text_area text-center ">
                <h2 class="banner_heading ">{{ $banner->title }}</h2>
                <p class="banner_desc">{{ $banner->descr }}</p>
            </div>
        </div>
    @endforeach

</div>
