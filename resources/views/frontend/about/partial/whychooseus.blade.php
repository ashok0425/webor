@php
    $banner = DB::table('banners')
        ->where('status', 1)
        ->where('type', 3)
        ->skip(3)
        ->first();
@endphp
<div class="container">
    {{-- {/* ------------------------------- */} --}}
    <div class="d-flex flex-column align-items-center text_color_blue mt-5">
        <h1 class="h2 fw-semibold  text_muted_heading mt-5">WHY CHOOSE US</h1>
        <p>Choose a brand with the best quality products and services you can rely on.</p>
        <img src='{{ asset('frontend/asset/starLine.webp') }}' class="img-fluid" />

    </div>
    {{-- {/* ---------------------------------- */} --}}

    <div class="row pt-5">
        <div class="col-12 col-md-6 col-xl-4">
            <div class="d-flex flex-column align-items-center  align-items-xl-end text_color_blue">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="about_icon"
                    height="35" width="35" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                    </path>
                </svg>
                <h4 class="pt-3 text_muted_heading">Durable Products</h4>
                <p class="pt-2 ps-0 ps-md-5 text-center text-md-start">Gem Plastic has been providing long-lasting
                    plastic housewares for a long time. The products are manufactured as per the customer's demands.</p>
            </div>

            <div class="d-flex flex-column align-items-center  align-items-xl-end text_color_blue pt-5">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="about_icon"
                    height="35" width="35" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                    </path>
                </svg>
                <h4 class="pt-3 text_muted_heading">Quality
                    and Reliability</h4>
                <p class="pt-2 ps-0 ps-md-5 text-center text-md-start">We promise to deliver trustworthy and
                    best-quality products that will be used in the everyday life of the people.</p>
            </div>
        </div>

        <div class="col-12 d-none d-xl-block col-xl-4">
            <img src="{{ asset($banner->image) }}" width="700" height="700" class="img-fluid" alt=" " />
        </div>

        <div class="col-12 col-md-6 col-xl-4">
            <div class="d-flex flex-column align-items-center  align-items-xl-start pt-5 pt-md-0   text_color_blue">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="about_icon"
                    height="35" width="35" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                    </path>
                </svg>
                <h4 class="pt-3 text_muted_heading">Cost- Effective</h4>
                <p class="pt-2 ps-0 ps-md-5 text-center text-md-start">Besides the quality and reliability, we have
                    been working to make the products cost-effective so that everyone can afford our products.</p>
            </div>

            <div class="d-flex flex-column align-items-center  align-items-xl-start text_color_blue pt-5">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" class="about_icon"
                    height="35" width="35" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z">
                    </path>
                </svg>
                <h4 class="pt-3 text_muted_heading">Easily Available Service</h4>
                <p class="pt-2 ps-0 ps-md-5 text-center text-md-start">The products of Gem Plastics is easily
                    available in most places in Nepal. Our Houseware products are Highly needed and demanded.</p>
            </div>
        </div>
    </div>
</div>
