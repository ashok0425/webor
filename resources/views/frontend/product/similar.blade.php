<section class='space-y-8 mt-20 my-container'>
    <h1 class='sec-h1 text-4xl'>People also searched</h1>
    <div class='grid sm:grid-cols-2 md:grid-cols-3 gap-11'>
        @foreach ($similar as $item)
            @include('frontend.product.card', ['product' => $item])
        @endforeach
    </div>
</section>
