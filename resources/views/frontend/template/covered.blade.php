@php
    $categories = DB::table('categories')
        ->orderBy('id', 'desc')
        ->get();
@endphp
<section class='my-container space-y-5 mt-16'>
    <div class='flex justify-center items-center'>
        <h1 class=' text-red-600 text-center text-xl font-semibold'>
            Shop By Category
        </h1>

    </div>
    <div class='mb-20'>
        <section class="splide" id="covered_splide">
            <div class="splide__track">
                <ul class="splide__list">

                    @foreach ($categories as $category)
                        <li class=" splide__slide ">
                            <a href="{{ route('store', ['id' => $category->id]) }}">
                                <div class='md:mx-2 mx-2  h-96 overflow-hidden relative'>
                                    <img src="{{ asset($category->image) }}"alt=''
                                        class='object-cover rounded-xl	 -z-10 h-full w-full scale-[1.02]  object-cover    hover:scale-100 transition duration-150 ease-out md:ease-in' />
                                    <h3
                                        class='text-center py-4 font-medium absolute bottom-0 left-0 tracking-wider text-lg z-20 transition delay-100 duration-200 text-white bg-prime w-full'>
                                        {{ $category->category }}</h3>
                                </div>

                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </section>
    </div>

</section>
