@php
    $galleries = DB::table('coupons')
        ->where('status', 1)
        ->get();
@endphp
<section class='my-container space-y-4 mt-20'>
    <h1 class=' text-red-600 text-center text-xl font-semibold'>
        Reviews
    </h1>

    <section class="splide mt-2" id="review_splide">
        <div class="splide__track">
            <ul class="splide__list">

                @foreach ($galleries as $gallery)
                    @include('frontend.template.review_card')
                @endforeach

            </ul>
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('products') }}" class='btn-p btn-hov md:px-20 sm:px-10'>
                <span class='main'>
                    <span class='inner'>
                        <span class='text-white content'>View All</span>
                    </span>
                    <span class='inner'>
                        <span class='text-white content' aria-hidden='true'>
                            View All
                        </span>
                    </span>
                </span>
            </a>
        </div>
    </section>

</section>
