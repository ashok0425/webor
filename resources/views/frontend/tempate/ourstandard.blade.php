@php
    $services = DB::table('coupons')
        ->where('status', 1)
        ->get();
@endphp
<div class="our_services_wrapper container">
    <div class="d-flex flex-column align-items-center text_color_blue gap-2 pb-4">
        <h2 class="p-0 m-0 h2 fw-semibold text_muted_heading">Our Standard</h2>
        <p class="col-8 text-center p-0 section_header_description text-muted ">Our latest item collection of
            {{ date('Y') }}</p>
        <div class="section_header_img_div text-center">
            <img src="{{ asset('frontend/asset/starLine.webp') }}" objectFit="cover" alt=" " />
        </div>
    </div>
    <div class="row">
        <div class="owl-carousel" id="owl-standard">

            @foreach ($services as $service)
                <div class="service_card mx-0 px-3">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 480 512"
                        class="undefined" height="40" width="40" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M313.2 47.5c1.2-13 21.3-14 36.6-8.7.9.3 26.2 9.7 19 15.2-27.9-7.4-56.4 18.2-55.6-6.5zm-201 6.9c30.7-8.1 62 20 61.1-7.1-1.3-14.2-23.4-15.3-40.2-9.6-1 .3-28.7 10.5-20.9 16.7zM319.4 160c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16zm-159.7 0c-8.8 0-16 7.2-16 16s7.2 16 16 16 16-7.2 16-16-7.2-16-16-16zm318.5 163.2c-9.9 24-40.7 11-63.9-1.2-13.5 69.1-58.1 111.4-126.3 124.2.3.9-2-.1 24 1 33.6 1.4 63.8-3.1 97.4-8-19.8-13.8-11.4-37.1-9.8-38.1 1.4-.9 14.7 1.7 21.6 11.5 8.6-12.5 28.4-14.8 30.2-13.6 1.6 1.1 6.6 20.9-6.9 34.6 4.7-.9 8.2-1.6 9.8-2.1 2.6-.8 17.7 11.3 3.1 13.3-14.3 2.3-22.6 5.1-47.1 10.8-45.9 10.7-85.9 11.8-117.7 12.8l1 11.6c3.8 18.1-23.4 24.3-27.6 6.2.8 17.9-27.1 21.8-28.4-1l-.5 5.3c-.7 18.4-28.4 17.9-28.3-.6-7.5 13.5-28.1 6.8-26.4-8.5l1.2-12.4c-36.7.9-59.7 3.1-61.8 3.1-20.9 0-20.9-31.6 0-31.6 2.4 0 27.7 1.3 63.2 2.8-61.1-15.5-103.7-55-114.9-118.2-25 12.8-57.5 26.8-68.2.8-10.5-25.4 21.5-42.6 66.8-73.4.7-6.6 1.6-13.3 2.7-19.8-14.4-19.6-11.6-36.3-16.1-60.4-16.8 2.4-23.2-9.1-23.6-23.1.3-7.3 2.1-14.9 2.4-15.4 1.1-1.8 10.1-2 12.7-2.6 6-31.7 50.6-33.2 90.9-34.5 19.7-21.8 45.2-41.5 80.9-48.3C203.3 29 215.2 8.5 216.2 8c1.7-.8 21.2 4.3 26.3 23.2 5.2-8.8 18.3-11.4 19.6-10.7 1.1.6 6.4 15-4.9 25.9 40.3 3.5 72.2 24.7 96 50.7 36.1 1.5 71.8 5.9 77.1 34 2.7.6 11.6.8 12.7 2.6.3.5 2.1 8.1 2.4 15.4-.5 13.9-6.8 25.4-23.6 23.1-3.2 17.3-2.7 32.9-8.7 47.7 2.4 11.7 4 23.8 4.8 36.4 37 25.4 70.3 42.5 60.3 66.9zM207.4 159.9c.9-44-37.9-42.2-78.6-40.3-21.7 1-38.9 1.9-45.5 13.9-11.4 20.9 5.9 92.9 23.2 101.2 9.8 4.7 73.4 7.9 86.3-7.1 8.2-9.4 15-49.4 14.6-67.7zm52 58.3c-4.3-12.4-6-30.1-15.3-32.7-2-.5-9-.5-11 0-10 2.8-10.8 22.1-17 37.2 15.4 0 19.3 9.7 23.7 9.7 4.3 0 6.3-11.3 19.6-14.2zm135.7-84.7c-6.6-12.1-24.8-12.9-46.5-13.9-40.2-1.9-78.2-3.8-77.3 40.3-.5 18.3 5 58.3 13.2 67.8 13 14.9 76.6 11.8 86.3 7.1 15.8-7.6 36.5-78.9 24.3-101.3z">
                        </path>
                    </svg>
                    <h5 class=" pt-1 ">Light Weight</h5>
                </div>


                <div class="service_card mx-0 px-3">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512"
                        class="undefined" height="40" width="40" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M311.9 260.8L160 353.6 8 260.8 160 0l151.9 260.8zM160 383.4L8 290.6 160 512l152-221.4-152 92.8z">
                        </path>
                    </svg>
                    <h5 class=" pt-1 ">Easy To Carry</h5>
                </div>

                <div class="service_card mx-0 px-3">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512"
                        class="undefined" height="40" width="40" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M0 32c477.6 0 366.6 317.3 367.1 366.3L448 480h-26l-70.4-71.2c-39 4.2-124.4 34.5-214.4-37C47 300.3 52 214.7 0 32zm79.7 46c-49.7-23.5-5.2 9.2-5.2 9.2 45.2 31.2 66 73.7 90.2 119.9 31.5 60.2 79 139.7 144.2 167.7 65 28 34.2 12.5 6-8.5-28.2-21.2-68.2-87-91-130.2-31.7-60-61-118.6-144.2-158.1z">
                        </path>
                    </svg>
                    <h5 class=" pt-1 ">Food Grade</h5>
                </div>

                <div class="service_card mx-0 px-3">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                        class="undefined" height="40" width="40" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                        </path>
                    </svg>
                    <h5 class=" pt-1 ">Air Tight</h5>
                </div>




                <div class="service_card mx-0 px-3">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512"
                        class="undefined" height="40" width="40" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M50.75 333.25c-12 12-18.75 28.28-18.75 45.26V424L0 480l32 32 56-32h45.49c16.97 0 33.25-6.74 45.25-18.74l126.64-126.62-128-128L50.75 333.25zM483.88 28.12c-37.47-37.5-98.28-37.5-135.75 0l-77.09 77.09-13.1-13.1c-9.44-9.44-24.65-9.31-33.94 0l-40.97 40.97c-9.37 9.37-9.37 24.57 0 33.94l161.94 161.94c9.44 9.44 24.65 9.31 33.94 0L419.88 288c9.37-9.37 9.37-24.57 0-33.94l-13.1-13.1 77.09-77.09c37.51-37.48 37.51-98.26.01-135.75z">
                        </path>
                    </svg>
                    <h5 class=" pt-1 ">Leak Proof</h5>
                </div>





                <div class="service_card mx-0 px-3">
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512"
                        class="undefined" height="40" width="40" xmlns="http://www.w3.org/2000/svg">
                        <path d="M192 0C86 0 0 214 0 320s86 192 192 192 192-86 192-192S298 0 192 0z"></path>
                    </svg>
                    <h5 class=" pt-1 ">BPA Free</h5>
                </div>
            @endforeach
        </div>

    </div>
</div>
