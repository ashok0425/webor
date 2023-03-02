@extends('frontend.layout.master')
@section('content')
    @php
        $setting = DB::table('websites')->first();
    @endphp
    <section class='my-container pt-28'>
        <div class='flex flex-col md:flex-row gap-5'>
            <div class='bg-red-600 p-8 space-y-5 py-14 h-fit'>
                <h1 class='sec-h1 text-2xl text-pink-100'>Let&apos;s have a word</h1>
                <p class='text-red-50 text-base leading-snug'>You can call us or visit the office if you don&apos;t
                    writing.</p>
                <div class='space-y-1'>
                    <h4 class='text-white font-bold text-lg'>Contact Us</h4>
                    <div class='flex items-center gap-2 text-white'>
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-6 h-6'>
                            <path fillRule='evenodd'
                                d='M1.5 4.5a3 3 0 013-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 01-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 006.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 011.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 01-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5z'
                                clipRule='evenodd' />
                        </svg>

                        <span class='text-white'>{{ $setting->phone1 }}</span>
                    </div>
                </div>

                <div class='space-y-1'>
                    <h4 class='text-white font-bold text-lg'>Email</h4>
                    <div class='flex items-center gap-2 text-white'>
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-6 h-6'>
                            <path
                                d='M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z' />
                            <path
                                d='M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z' />
                        </svg>

                        <span class='text-white'>{{ $setting->email1 }}</span>
                    </div>
                </div>

                <div class='space-y-1'>
                    <h4 class='text-white font-bold text-lg'>Location</h4>
                    <div class='flex items-center gap-2 text-white'>
                        <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='currentColor' class='w-6 h-6'>
                            <path fillRule='evenodd'
                                d='M11.54 22.351l.07.04.028.016a.76.76 0 00.723 0l.028-.015.071-.041a16.975 16.975 0 001.144-.742 19.58 19.58 0 002.683-2.282c1.944-1.99 3.963-4.98 3.963-8.827a8.25 8.25 0 00-16.5 0c0 3.846 2.02 6.837 3.963 8.827a19.58 19.58 0 002.682 2.282 16.975 16.975 0 001.145.742zM12 13.5a3 3 0 100-6 3 3 0 000 6z'
                                clipRule='evenodd' />
                        </svg>

                        <span class='text-white'>{{ $setting->address1 }}</span>
                    </div>
                </div>
            </div>

            <div class='bg-stone-50 p-6 w-full'>
                <h1 class='sec-h1 text-2xl'>Say Hello</h1>
                <form action="{{ route('contact') }}" class='mt-8 space-y-6' method="POST">
                    @csrf
                    <div class='flex flex-col sm:flex-row gap-6'>
                        <label class='block w-full'>
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">First
                                Name</span>
                            <input type='text'
                                class='mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full sm:text-sm focus:ring-1'
                                placeholder='jhon' name="fname" required />
                        </label>
                        <label class='block w-full'>
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Last
                                Name</span>
                            <input type='text'
                                class='mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full sm:text-sm focus:ring-1'
                                placeholder='doe' name="lname" required />
                        </label>
                    </div>

                    <div class='flex flex-col sm:flex-row gap-6'>
                        <label class='block w-full'>
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Email</span>
                            <input type='email' name='email'
                                class='mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full sm:text-sm focus:ring-1'
                                placeholder='hello@email.com' required />
                        </label>
                        <label class='block w-full'>
                            <span
                                class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Phone</span>
                            <input type='number' name='phone'
                                class='mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full sm:text-sm focus:ring-1'
                                placeholder='977****' required />
                        </label>
                    </div>

                    <label class='block w-full'>
                        <span
                            class="after:content-['*'] after:ml-0.5 after:text-red-500 block text-sm font-medium text-slate-700">Message</span>
                        <textarea type='text' cols={50} rows={8} name='message'
                            class='mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-red-500 focus:ring-red-500 block w-full sm:text-sm focus:ring-1'
                            placeholder='Subject' required>
                        </textarea>

                    </label>
                    <button type='submit' class='btn-p w-full btn-hov'>
                        <span class='main'>
                            <span class='inner'>
                                <span class='text-white content'>Send Message</span>
                            </span>
                            <span class='inner'>
                                <span class='text-white content' aria-hidden='true'>
                                    Send Message
                                </span>
                            </span>
                        </span>
                    </button>
                </form>
            </div>
        </div>
    </section>

    <div class='mt-12'>
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3533.025762096549!2d85.34260961440424!3d27.685598633055626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb199d9eb909ed%3A0xe7bd1b5e365368db!2sSY%20Panel%20Nepal!5e0!3m2!1sen!2snp!4v1677641076753!5m2!1sen!2snp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
@endsection
