@extends('frontend.layout.master')
@section('content')
    <section class='my-container pt-16 space-y-28'>

        <div class='grid grid-cols-1 md:grid-cols-2 gap-28'>
            <div class='md:sticky top-28 h-fit'>
                <section class="splide mt-2" id="main-slider">
                    <div class="splide__track">
                        <ul class="splide__list">


                            <li class="splide__slide " style="min-height: 500px">
                                <img src='{{ asset($product->image) }}' alt='' fill class='object-cover' />
                            </li>
                            @foreach ($colors as $color)
                                <li class="splide__slide " style="min-height: 500px">

                                    <img src='{{ asset($color->image) }}' alt='' fill class='object-cover' />
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
                <h1 class='sec-h1 text-3xl text-prime'>{{ $product->name }}</h1>
                <p class="text-sm ">{{ $product->short_desc }}</p>

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

                @if (count($colors) > 0)
                    <div class=''>
                        <p class='font-medium mb-2 text-dark uppercase'>
                            Color
                        </p>
                        <div class="flex">
                            @foreach ($colors as $item)
                                <p style="background: {{ $item->color }};"
                                    class='font-normal text-stone-900 rounded-full w-10 h-10 mx-2'>
                                </p>
                            @endforeach
                        </div>
                    </div>
                @endif

                @if (count($sizes) > 0)
                    <div class=''>
                        <p class='font-medium mb-2 text-dark uppercase'>
                            Sizes
                        </p>
                        <div class="flex">
                            @foreach ($sizes as $item)
                                <p
                                    class='font-normal text-stone-900 rounded-medium border border-gray-600 text-center pt-2 w-20 h-10 mx-2 text-sm'>
                                    {{ $item->variation }}
                                </p>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>


    </section>
    <div class="description pt-28 my-container">
        <h2 class="text-2xl font-bold text-center text-prime mb-6">Product Description</h2>
        {!! $product->long_desc !!}
    </div>
    @include('frontend.product.similar', ['similar' => $similar])
@endsection
