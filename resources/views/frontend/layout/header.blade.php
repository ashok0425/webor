<div class="z-50 navbar_menu">
    <nav class=" ease-in-out transition-all duration-75`">
        <div class='flex items-center   my-container py-4'>
            <div class='flex items-center gap-10'>
                <div class='relative'>
                    <a href="{{ route('/') }}" rel="noopener noreferrer">
                        <img alt='Logo Webor' src="{{ asset($setting->image) }}" height="70" width="120" /></a>
                </div>
            </div>

            <div class='ml-auto flex items-center gap-12'>
                <ul class='md:flex gap-12 font-semibold text-lg hidden items-center'>
                    <li class="cursor-pointer hover:text-prime/75 font-normal text-gray-400		text-base	">
                        <a href='{{ route('/') }}' class="text-gray-400	text-gray-200	">Home</a>
                    </li>

                    @foreach ($categories as $category)
                        @if ($loop->index <= 2)
                            <li class="cursor-pointer hover:text-prime/75 font-normal	text-gray-400	 text-base	">
                                <a href='{{ route('/') }}'>{{ $category->category }}</a>
                            </li>
                        @endif
                    @endforeach

                    {{-- 
                    <li class="cursor-pointer relative group">
                        <span class="hover:text-prime/75 drop ">
                            <a href='{{ route('products') }}'>Products</a>
                        </span>
                        <ul
                            class='absolute drop-down w-56 divide-y divide-prime/50 py-2 bg-white hidden shadow-xl  group-hover:block'>
                            @foreach ($categories as $category)
                                <li class='drop-item'><a
                                        href="{{ route('store', ['id' => $category->id]) }}">{{ $category->category }}</a>
                                </li>
                            @endforeach

                        </ul>
                    </li> --}}

                    <li class="cursor-pointer hover:text-prime/75 font-normal	text-gray-400	 text-base	">
                        <a href='{{ route('about') }}'>About us</a>
                    </li>
                    <li class="cursor-pointer hover:text-prime/75 ">
                        <div class="form-group">
                            <input type="search" name="" id=""
                                class="outline-none bg-slate-100	 rounded-2xl py-1 px-1">
                            <button>
                                <i class="fas fa-search text-gray-400 font-black ml-3"></i>

                            </button>
                        </div>

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
                <li class="cursor-pointer hover:text-prime/75 ">
                    <a href='/'>Home</a>
                </li>
                <li class="cursor-pointer relative">
                    <span class="cursor-pointer hover:text-prime/75 ">
                        <a href='{{ route('products') }}'>Products</a>
                    </span>
                </li>
                <li class="cursor-pointer hover:text-prime/75 ">
                    <a href='{{ route('about') }}'>About</a>
                </li>
                <li class="cursor-pointer hover:text-prime/75 ">
                    <a href='{{ route('blog') }}'>News</a>
                </li>
                <li class="cursor-pointer hover:text-prime/75 ">
                    <a href='{{ route('contact.page') }}'>Contact Us</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
