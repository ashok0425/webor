@php
    use App\Models\Product;
    $poducts = Product::orderBy('id', 'desc')
        ->where('featured', 1)
        ->where('status', 1)
        ->limit(6)
        ->get();
@endphp
<section class='my-container space-y-5 mt-16'>
    <div class='flex justify-center items-center'>
        <h1 class=' text-red-600 text-center text-xl font-semibold'>
            Trending Product
        </h1>

    </div>
    <div class='mb-20'>
        <section class="splide" id="trending_splide">
            <div class="splide__track">
                <ul class="splide__list">

                    @foreach ($poducts as $product)
                        <li class=" splide__slide ">
                            @include('frontend.product.card', ['product' => $product])

                        </li>
                    @endforeach
                </ul>
            </div>
        </section>

        <div class="mt-8 text-center">
            <a href="{{ route('products') }}" class='btn-p btn-hov md:px-20 sm:px-10'>
                <span class='main'>
                    <span class='inner'>
                        <span class='text-white content'>View More</span>
                    </span>
                    <span class='inner'>
                        <span class='text-white content' aria-hidden='true'>
                            View More
                        </span>
                    </span>
                </span>
            </a>
        </div>
    </div>

</section>
