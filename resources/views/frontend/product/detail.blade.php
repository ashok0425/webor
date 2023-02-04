@extends('frontend.layout.master')

@section('content')
    <div class="container my-5">
        <div>
            <div class="row py-5 text_color_blue">
                <div class="col-12 col-lg-6">
                    <div class="single_product_image_div d-flex justify-content-center overflow-hidden rounded-2">
                        <img src="{{ asset($product->image) }}" class="img-fluid text-center" objectFit="scale-down"
                            alt="img" />
                    </div>
                </div>

                <div class="col-12 col-lg-6 pt-3 mt-lg-0">
                    <h3>{{ $product->name }}</h3>
                    <div class="d-flex h6 py-2">
                        Category : <span class="text_color_yellow"> &nbsp; {{ $product->cat->category }}</span>
                    </div>
                    <div class="d-flex h6"> rating | 7 Reviews</div>

                    <p class="py-2 h6">
                        SKU : <span class="text_color_yellow">Any</span>
                    </p>
                    <p>{!! strip_tags($product->long_desc) !!}</p>
                    <br />



                    @if (count($sizes) > 0)
                        <div class="size_buttons d-flex gap-3 d-flex align-content-center pb-3">
                            <p class="d-flex align-items-center h5">SIZE :</p>
                            @foreach ($sizes as $size)
                                <div class="">
                                    <input type="radio" class="d-none" name="options-outlined"
                                        id="s{{ $size->id }}"autoComplete="off" checked class="d-none" />
                                    <label class="radio_button_label btn btn-outline-success" for="s{{ $size->id }}">
                                        {{ $size->variation }}
                                    </label>
                                </div>
                        </div>
                    @endforeach
                    @endif
                    @if (count($colors) > 0)
                        <p class="mb-3">
                        <div class="h6 cursor_pointer d-flex">Colors :
                            @foreach ($colors as $color)
                                <div style="background-color: {{ $color->color }};height:25px;width:30px;margin:0 2px;">
                                </div>
                            @endforeach
                        </div>
                        </p>
                    @endif
                    <p>
                        <span class="h6 cursor_pointer">Material</span> :&nbsp; <span class="cursor_pointer">Metal</span>
                        &nbsp;
                        &nbsp; <span class="cursor_pointer">Resin</span>
                        &nbsp;&nbsp; <span class="cursor_pointer ">Leather</span> &nbsp;&nbsp; <span
                            class="cursor_pointer">Plastic</span> &nbsp;&nbsp; <span class="cursor_pointer">Slag</span>
                        &nbsp; <span>Fiver</span>
                    </p>
                </div>
            </div>
        </div>


        {{-- similar product  --}}

        <div class="d-flex flex-column mt-5  align-items-center text_color_blue gap-2 pb-4">
            <h2 class="p-0 m-0 h2 fw-semibold text_muted_heading">Similar Product
            </h2>
            <p class="col-8 text-center p-0 section_header_description text-muted ">Other products from same category</p>
            <div class="section_header_img_div text-center">
                <img src="{{ asset('frontend/asset/starLine.webp') }}" objectFit="cover" alt=" " />
            </div>
        </div>

        <div class="row ">

            @foreach ($similar as $product)
                @include('frontend.tempate.product_box', ['product' => $product])
            @endforeach

        </div>

        @include('frontend.tempate.ourstandard')
    </div>
@endsection
