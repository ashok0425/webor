<div class="d-flex flex-column align-items-center text_color_blue gap-2 pb-4 mt-5 pt-5">
    <h2 class="p-0 m-0 h2 fw-semibold text_muted_heading">Featured Product</h2>
    <p class="col-8 text-center p-0 section_header_description text-muted ">Our latest item collection of
        {{ date('Y') }}</p>
    <div class="section_header_img_div text-center">
        <Img src="{{ asset('frontend/asset/starLine.webp') }}" objectFit="cover" alt=" " />
    </div>
</div>
@php
    $products = DB::table('products')
        ->where('status', 1)
        ->where('featured', 1)
        ->get();
@endphp
<div class="container">
    <div class="row">
        @foreach ($products as $product)
            @include('frontend.tempate.product_box', ['product' => $product])
        @endforeach
    </div>
</div>
