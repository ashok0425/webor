@extends('frontend.layout.master')
@section('content')
    <div class="my-container pt-28">

        <div class='flex justify-between items-center'>
            <h1 class='sec-h1 text-4xl'>Our Products</h1>
            <button type='button' title='filter' class="p-2 hover:bg-stone-300">
                <svg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 24 24' strokeWidth={1.5}
                    stroke='currentColor' class='w-6 h-6'>
                    <path strokeLinecap='round' strokeLinejoin='round'
                        d='M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 01-.659 1.591l-5.432 5.432a2.25 2.25 0 00-.659 1.591v2.927a2.25 2.25 0 01-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 00-.659-1.591L3.659 7.409A2.25 2.25 0 013 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0112 3z' />
                </svg>
            </button>
        </div>


        {{-- <section class='bg-stone-200 mt-3 p-8 space-y-5'>
            <h3 class="font-bold text-2xl">Filter</h3>
            <div class=''>
                <h4 class="font-bold text-lg">Products</h4>
                <div class="flex flex-col gap-2">
                    <label htmlFor="fridge" class='font-semibold flex gap-2'>
                        <input type="radio" name="products" title='fridge' id="fridge" />
                        Refrigerator
                    </label>
                    <label htmlFor="tv" class='font-semibold flex gap-2'>
                        <input type="radio" name="products" title='tv' id="tv" />
                        Television
                    </label>
                    <label htmlFor="rice-cooker" class='font-semibold flex gap-2'>
                        <input type="radio" name="products" id="rice-cooker" />
                        Rice-Cooker
                    </label>
                    <label htmlFor="ac" class='font-semibold flex gap-2'>
                        <input type="radio" name="products" id="ac" />
                        Air-Conditioner
                    </label>
                </div>
            </div>
        </section> --}}




        <div class='grid sm:grid-cols-2 md:grid-cols-3 gap-11 mt-16'>
            @foreach ($products as $product)
                <a href='{{ route('product.deatil', ['id' => $product->id]) }}'>
                    @include('frontend.product.card', ['product', $product])
                </a>
            @endforeach

        </div>
    </div>
@endsection
