@php
    $services = DB::table('coupons')
        ->where('status', 1)
        ->get();
@endphp
<div class="our_services_wrapper container">
    <div class="d-flex flex-column align-items-center text_color_blue gap-2 pb-4">
        <h2 class="p-0 m-0 h2 fw-semibold text_muted_heading">Our Services</h2>
        <p class="col-8 text-center p-0 section_header_description text-muted ">Our latest item collection of
            {{ date('Y') }}</p>
        <div class="section_header_img_div text-center">
            <img src="{{ asset('frontend/asset/starLine.webp') }}" objectFit="cover" alt=" " />
        </div>
    </div>
    <div class="row">
        @foreach ($services as $service)
            <div class="col-12 col-md-6 col-xl-3 pb-4 px-2  ">
                <div class="service_card">
                    <p class="h4 pt-2">{{ $service->title }}</p>
                    <p class="p pt-1">{{ $service->description }}</p>
                </div>
            </div>
        @endforeach

    </div>
</div>
