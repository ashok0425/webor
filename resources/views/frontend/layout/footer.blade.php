@php
    $page = DB::table('pages')->value('about');
@endphp
<footer class='mt-28 bg-gray-100 py-14'>
    <div class='my-container pt-12'>
        <div class='sm:grid md:grid-cols-4 gap-16 lg:gap-0 lg:grid-cols-5 space-y-12'>
            <div class='col-span-2 space-y-6'>
                <img src="{{ asset($setting->image) }}" alt='' style="max-width: 200px" />


                <p class='text-black-600  font-light text-sm text-base md:pr-20'>
                    {{ strip_tags(Str::limit($page, 500)) }}
                </p>
            </div>
            <div class='space-y-6 md:col-span-2 lg:col-span-1'>
                <h4 class="font-bold text-dark text-xl">Menu</h4>
                <ul class='text-dark space-y-4'>
                    <li><a href="{{ route('blog') }}">Blog</a></li>
                    <li><a href="{{ route('contact.page') }}">Contact Us</a></li>
                    <li><a href="{{ route('about') }}">About us</a></li>
                    <li><a href="{{ route('term') }}">Term & Conditions</a></li>


                </ul>
            </div>
            <div class='space-y-6  md:col-span-2 lg:col-span-1'>
                <h4 class="font-bold text-dark text-xl">Product</h4>
                <ul class='text-dark space-y-4'>

                    @foreach ($categories as $category)
                        @if ($loop->index <= 5)
                            <li><a href="{{ route('store', ['id' => $category->id]) }}">{{ $category->category }}</a>
                            </li>
                        @endif
                    @endforeach

                </ul>
            </div>



            <div class='space-y-6 md:col-span-2 lg:col-span-1'>
                <h4 class="font-bold text-dark text-xl">Contact Us</h4>
                {{-- <p class="font-normal text-sm">
                    Worldwide mattress store since 2020. We sell over 1000+ branded products on our website
                </p> --}}
                <ul class='text-dark space-y-4'>
                    <li>
                        <address class='not-italic'>
                            {{ $setting->address1 }}
                        </address>
                    </li>
                    <li>
                        {{ $setting->email1 }}

                    </li>
                    <li>
                        {{ $setting->phone1 }}

                    </li>
                </ul>

                <div class='flex gap-6'>
                    <a href="{{ $setting->facebook1 }}" target="_blank">
                        <svg class='h-8 w-8 text-white' fill='#0260cd' viewBox='0 0 24 24' aria-hidden='true'>
                            <path fillRule='evenodd'
                                d='M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z'
                                clipRule='evenodd' />
                        </svg>
                    </a>
                    <a href="{{ $setting->instagram1 }}" target="_blank">

                        <svg class='h-8 w-8 text-white' fill='orange' viewBox='0 0 24 24' aria-hidden='true'>
                            <path fillRule='evenodd'
                                d='M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z'
                                clipRule='evenodd' />
                        </svg>
                    </a>
                    <a href="{{ $setting->other1 }}" target="_blank">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="bi bi-tiktok h-7 mt-1 w-7"
                            viewBox="0 0 16 16">
                            <path
                                d="M9 0h1.98c.144.715.54 1.617 1.235 2.512C12.895 3.389 13.797 4 15 4v2c-1.753 0-3.07-.814-4-1.829V11a5 5 0 1 1-5-5v2a3 3 0 1 0 3 3V0Z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <form action="">
                <input type="email" name="email" id=""
                    class="md:w-[300px] w-[90%] py-2 border-2 border-gray-400 rounded-md	text-sm text-center mx-auto"
                    placeholder="Enter your email  ">
                <button class="text-red-500 text-sm"> &nbsp; &nbsp; Subscribe &nbsp; &nbsp;<i
                        class="fas fa-arrow-right "></i></button>
            </form>
        </div>


        <div class="text-center mt-16 text-gray-500">
            Copyright {{ date('Y') }} Webor. All rights reserved.
        </div>
    </div>
</footer>
