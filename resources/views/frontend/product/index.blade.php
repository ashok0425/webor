@extends('frontend.layout.master')
@section('content')
    <div class="store_banner relative">
        <img src="{{ asset($category->banner) }}" alt="" class="w-full max-h-[300px] object-cover">
        <h1 class="title left-[45%] top-[30%] letter tracking-[3px]	uppercase font-bold text-white text-2xl py-6 absolute">
            {{ $category->category }}</h1>
        <div class="search_area bg-white shadow-lg md:left-[20%] py-6 absolute -bottom-10 md:w-[60%] w-[100%]">
            <form action="{{ route('products') }}" method="get">
                <div class="form-group md:flex justify-center items-center text-center">
                    <input type="search" name="keyword" id=""
                        class="outline-none bg-slate-100	 rounded-2xl py-1 px-8" placeholder="search product ...">
                    <select name="category" id=""
                        class=" md:my-0 my-4 form-control md:ml-6 ml-2 border-2 rounded-2xl border-gray py-1 px-8">
                        <option value="">select category</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">{{ $item->category }}</option>
                        @endforeach
                    </select>
                    <button class="mt-1">
                        <i class="fas fa-search text-gray-400 font-black ml-3 text-2xl "></i>

                    </button>
                </div>
            </form>
        </div>
    </div>
    <div class="my-container pt-10">

        <div class='grid sm:grid-cols-2 md:grid-cols-4 gap-11 mt-16'>
            @foreach ($products as $product)
                @include('frontend.product.card', ['product', $product])
            @endforeach

        </div>
    </div>
@endsection
