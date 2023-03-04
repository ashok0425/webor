@php
    $galleries = DB::table('coupons')
        ->where('status', 1)
        ->get();
@endphp
<section class='my-container space-y-4 mt-20'>
    <h1 class=' text-red-600 text-center text-xl font-semibold'>
        Gallery
    </h1>

    <section class="splide mt-2" id="gallery_splide">
        <div class="splide__track">
            <ul class="splide__list">

                @foreach ($galleries as $gallery)
                    <li class="splide__slide ">
                        <div class=' mx-4 cursor-pointer  main rounded-lg shadow-lg overflow-hidden  '>
                            <img src="{{ $gallery->image }}" alt=''
                                class='w-[1080px] scale-110  object-cover    hover:scale-100 transition duration-150 ease-out md:ease-in h-[450px]' />
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>

</section>
