@extends('frontend.layout.master')
@section('content')
    <section class='my-container pt-28 space-y-28'>
        <div class='grid grid-cols-1 md:grid-cols-2 gap-28'>
            <div class='md:sticky top-28 h-fit'>
                <section class="splide mt-2" id="main-slider">
                    <div class="splide__track">
                        <ul class="splide__list">


                            <li class="splide__slide ">
                                <div class='main'>
                                    <div class='relative h-72'>
                                        <img src='{{ asset($product->image) }}' alt='' fill class='object-cover' />
                                    </div>
                                </div>
                            </li>
                            @foreach ($colors as $color)
                                <li class="splide__slide ">

                                    <div class='main'>
                                        <div class='relative h-72'>
                                            <img src='{{ asset($color->image) }}' alt='' fill
                                                class='object-cover' />
                                        </div>
                                    </div>
                                </li>
                            @endforeach


                        </ul>
                    </div>
                </section>
                <section class="splide mt-2" id="thumbnail-slider">
                    <div class="splide__track">
                        <ul class="splide__list">

                            <li class="splide__slide ">
                                <div>
                                    <div class='relative h-20'>
                                        <img src='{{ asset($product->image) }}' alt='' fill class='object-cover' />
                                    </div>
                                </div>
                            </li>
                            @foreach ($colors as $color)
                                <li class="splide__slide ">

                                    <div class=''>
                                        <div class='relative h-20'>
                                            <img src='{{ asset($color->image) }}' alt='' fill
                                                class='object-cover' />
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </section>
            </div>

            <div class='space-y-5'>
                <h1 class='sec-h1 text-3xl'>{{ $product->name }}</h1>

                <div class='flex gap-2'>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'
                        class='w-5 h-5 text-orange-400'>
                        <path fillRule='evenodd'
                            d='M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z'
                            clipRule='evenodd' />
                    </svg>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'
                        class='w-5 h-5 text-orange-400'>
                        <path fillRule='evenodd'
                            d='M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z'
                            clipRule='evenodd' />
                    </svg>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'
                        class='w-5 h-5 text-orange-400'>
                        <path fillRule='evenodd'
                            d='M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z'
                            clipRule='evenodd' />
                    </svg>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'
                        class='w-5 h-5 text-orange-400'>
                        <path fillRule='evenodd'
                            d='M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z'
                            clipRule='evenodd' />
                    </svg>
                    <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor'
                        class='w-5 h-5 text-orange-400'>
                        <path fillRule='evenodd'
                            d='M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z'
                            clipRule='evenodd' />
                    </svg>
                </div>



                <div class=''>
                    <span class='font-bold text-stone-500'>
                        Category: <span class='font-normal text-stone-900'>{{ $product->cat->category }}</span>
                    </span>

                </div>

                <div class='space-y-3'>
                    <h4 class='font-bold text-lg'>Product Details</h4>
                    {{ $product->long_desc }}
                </div>
            </div>


    </section>
    @include('frontend.product.similar', ['similar' => $similar])
@endsection
