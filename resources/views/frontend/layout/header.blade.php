<div class="z-50 fixed left-0 right-0 navbar_menu">
    <nav class=" ease-in-out transition-all duration-75`">
        <div class='flex items-center gap-8 justify-between my-container py-4'>
            <div class='flex items-center gap-10'>
                <div class='relative'>
                    <a href="{{ route('/') }}" rel="noopener noreferrer">
                        <img alt='Logo Webor' src="{{ asset($setting->image) }}" height="70" width="120" /></a>
                </div>
            </div>

            <div class='flex items-center gap-12'>
                <ul class='md:flex gap-12 font-semibold text-lg hidden'>
                    <li class="cursor-pointer hover:text-prime/75 ">
                        <a href='{{ route('/') }}'>Home</a>
                    </li>
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
                    </li>
                    <li class="cursor-pointer hover:text-prime/75 ">
                        <a href='{{ route('about') }}'>About</a>
                    </li>
                    <li class="cursor-pointer hover:text-prime/75 ">
                        <a href='{{ route('blog') }}'>News</a>
                    </li>
                </ul>
                <a href='{{ route('contact.page') }}' class='hidden md:block'>
                    <button type='button' class='btn-p w-fit btn-hov'>
                        <span class='main'>
                            <span class='inner'>
                                <span class='text-white content'>Contact us</span>
                            </span>
                            <span class='inner'>
                                <span class='text-white content' aria-hidden='true'>
                                    Contact us
                                </span>
                            </span>
                        </span>
                    </button>
                </a>
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
