@php
    $banners = DB::table('banners')
        ->where('type', 1)
        ->where('status', 1)
        ->get();
@endphp
<div class="main">
    <section class="splide" id="hero_splide">
        <div class="splide__track">
            <ul class="splide__list">

                @foreach ($banners as $banner)
                    <li class="splide__slide ">
                        <div class='relative w-full h-screen flex items-center'>
                            <div class="absolute inset-0 bg-black/25"></div>
                            <div class='-z-10 absolute inset-0 '>
                                <img src="{{ asset($banner->image) }}" alt='{{ $banner->title }}'
                                    class='object-cover w-full h-full' />
                            </div>
                            <div class='my-container text-center space-y-4'>
                                <h1 class='sec-h1 text-white drop-shadow-lg leading-[3.5rem]'>
                                    <div class="md:w-[50%]  text-center mx-auto font-medium">
                                        {{ $banner->title }}
                                    </div>
                                </h1>
                                <p class='md:w-[50ch] text-white mb-20 mx-auto font-normal'>
                                    {{ strip_tags($banner->descr) }}</p>
                                <p>
                                    <a href="{{ route('products') }}" class='btn-p btn-hov '>
                                        <span class='main'>
                                            <span class='inner'>
                                                <span class='text-white content'>Shop Now</span>
                                            </span>
                                            <span class='inner'>
                                                <span class='text-white content' aria-hidden='true'>
                                                    Shop Now
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</div>
