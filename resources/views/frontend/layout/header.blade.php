<div class="z-50 bg-prime">
    <nav class=" ease-in-out transition-all duration-75`">
        <div class='flex items-center   my-container'>
            <div class='flex items-center gap-10  py-4'>
                <div class='relative'>
                    <a href="{{ route('/') }}" rel="noopener noreferrer">
                        <img alt='Logo Webor' src="{{ asset($setting->image) }}" height="70" width="120" /></a>
                </div>
            </div>

            <div class='ml-auto flex items-center gap-12'>
                <ul class='md:flex gap-12 font-semibold text-lg hidden items-center'>
                    <li class="cursor-pointer  font-normal text-white		text-base	 py-4">
                        <a href='{{ route('/') }}' class="text-white font-bold	text-gray-200	">Home</a>
                    </li>

                    @foreach ($categories as $category)
                        @if ($loop->index <= 2)
                            <li class="cursor-pointer relative group  py-4">
                                <span
                                    class=" drop text-white cursor-pointer  font-normal	text-white	 text-base	font-bold">
                                    <a class="font-bold"
                                        href='{{ route('store', ['id' => $category->id]) }}'>{{ $category->category }}</a>
                                </span>
                                @php
                                    $products = DB::table('products')
                                        ->where('category_id', $category->id)
                                        ->limit(6)
                                        ->select('id', 'name')
                                        ->get();
                                @endphp
                                <ul
                                    class='absolute top-[62px] drop-down w-56 divide-y divide-prime/50  bg-white hidden shadow-xl  group-hover:block z-[9999999]'>
                                    @foreach ($products as $product)
                                        <li class='drop-item'><a
                                                href="{{ route('product.deatil', ['id' => $product->id]) }}"
                                                class="text-sm">{{ $product->name }}</a>
                                        </li>
                                    @endforeach

                                </ul>
                            </li>
                        @endif
                    @endforeach




                    <li class="cursor-pointer font-bold  font-normal	text-white	 text-base	 py-4">
                        <a href='{{ route('about') }}' class="font-bold">About us</a>
                    </li>
                    <li class="cursor-pointer  ">
                        <form action="{{ route('products') }}">
                            <div class="form-group">
                                <input type="search" name="keyword" id=""
                                    class="outline-none bg-slate-100	 rounded-2xl py-1 px-1">
                                <button>
                                    <i class="fas fa-search text-white font-black ml-3"></i>

                                </button>
                            </div>
                        </form>
                    </li>

                </ul>

            </div>

            {{-- {/* mobile */} --}}
            <div class='flex flex-col gap-1 ham md:hidden'>
                <div class='w-8 h-1 bg-red-400'></div>
                <div class='w-8 h-1 bg-red-400'></div>
                <div class='w-8 h-1 bg-red-400'></div>
            </div>
        </div>

        <div class="mt-4 shadow-lg pb-10 bg-white mobile_menu  hidden block transition duration-200">
            <ul class='my-container space-y-5'>
                <li class="cursor-pointer  ">
                    <a href='/'>Home</a>
                </li>
                <li class="cursor-pointer relative">
                    <span class="cursor-pointer  ">
                        <a href='{{ route('products') }}'>Products</a>
                    </span>
                </li>
                <li class="cursor-pointer  ">
                    <a href='{{ route('about') }}'>About</a>
                </li>
                <li class="cursor-pointer  ">
                    <a href='{{ route('blog') }}'>News</a>
                </li>
                <li class="cursor-pointer  ">
                    <a href='{{ route('contact.page') }}'>Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
