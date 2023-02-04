@php
    $banner = DB::table('banners')
        ->where('status', 1)
        ->where('type', 3)
        ->skip(2)
        ->first();
@endphp
<div class="container mt-5">
    <div class="career_hero_wrapper row ">
        <div class="col-12 col-lg-7 d-flex flex-column justify-content-center ">
            <h1 class="career_hero_heading">
                We are available on both <span class="red_span">Online</span> & <span class="red_span">Physical</span> .
            </h1>
            <p class="career_hero_para">We would love to welcome you to our office located in thadodhunga,
                dhobighat.</p>
        </div>

        <div class="col-12 col-lg-5 pt-5 pt-lg-0">
            <div class="hero_image_div">
                <img src="{{ $banner->image }}" objectFit="cover" alt=" " class="img-fluid" />
            </div>
        </div>
    </div>
</div>
