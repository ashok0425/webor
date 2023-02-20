@php
    $categories = DB::table('categories')
        ->orderBy('id', 'desc')
        ->get();
@endphp
<section class='my-container space-y-10 mt-20'>
    <div class='flex justify-between items-center'>
        <h1 class='sec-h1'>
            We Got You <br />
            All Covered
        </h1>
        <button type='button' class='btn-sec btn-hov w-fit group hidden sm:block'>
            <span class='main'>
                <span class='inner'>
                    <span class='text-prime group-hover:text-white content'>About Us</span>
                </span>
                <span class='inner'>
                    <span class='text-prime group-hover:text-white content' aria-hidden='true'>
                        About Us
                    </span>
                </span>
            </span>
        </button>
    </div>
    <div class='mb-20'>
        <section class="splide" id="covered_splide">
            <div class="splide__track">
                <ul class="splide__list">

                    @foreach ($categories as $category)
                        <li class=" splide__slide ">
                            <a href="{{ route('store', ['id' => $category->id]) }}">
                                <div class='mx-4  h-96 flex items-end '>
                                    <img src="{{ asset($category->image) }}"alt=''
                                        class='object-cover rounded-md	 -z-10 h-full w-full' />
                                    <h3
                                        class='pl-14 pb-6 font-medium tracking-wider text-lg z-20 transition delay-100 duration-200 text-white'>
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
