@php
    $partners = DB::table('times')
        ->where('status', 1)
        ->where('type', 2)
    
        ->get();
@endphp
<div class="container mb-5">
    <div class="our_partner_wrapper text_color_blue">
        <div class="d-flex flex-column align-items-center text_color_blue gap-2 pb-4">
            <h2 class="p-0 m-0 h2 fw-semibold text_muted_heading">Our Partners
            </h2>
            <p class="col-8 text-center p-0 section_header_description text-muted ">Our latest item collection of
                {{ date('Y') }}</p>
            <div class="section_header_img_div text-center">
                <img src="{{ asset('frontend/asset/starLine.webp') }}" objectFit="cover" alt=" " />
            </div>
        </div>

        <div class="row">
            @foreach ($partners as $partner)
                <div class="col-12 col-sm-6 col-xl-3 mb-4 mb-xl-0 ">
                    <div class="partner_item">
                        <img src="{{ asset($partner->image) }}" objectFit="cover" class="img-fluid" alt="img"
                            width="100" />

                        <h3 class="mt-2">{{ $partner->name }}</h3>
                        <p>{{ $partner->review }}</p>
                    </div>
                </div>
            @endforeach
        </div>

    </div>

</div>
