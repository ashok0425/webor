@php
    $categories = DB::table('categories')
        ->where('status', 1)
        ->get();
@endphp
<div class="container">
    <div class="d-flex flex-column align-items-center text_color_blue gap-2 pb-4">
        <h2 class="p-0 m-0 h2 fw-semibold text_muted_heading">Categories</h2>
        <p class="col-8 text-center p-0 section_header_description text-muted ">Our latest item collection of
            {{ date('Y') }}</p>
        <div class="section_header_img_div text-center">
            <img src="{{ asset('frontend/asset/starLine.webp') }}" objectFit="cover" alt=" " />
        </div>
    </div>
    <div class="row ">
        @foreach ($categories as $category)
            <div class="col-12 col-lg-6 pb-5 ">
                <a href="">
                    <div class="image_only_section_item  overflow-hidden rounded-2 ">
                        <img src="{{ asset($category->image) }}" objectFit="cover" alt="img" class="" />
                        <div class="only_image_text_div p-0">
                            <h2 class="only_image_text_div_heading ">{{ $category->category }}</h2>
                        </div>
                    </div>
                </a>
            </div>
        @endforeach

    </div>
</div>
