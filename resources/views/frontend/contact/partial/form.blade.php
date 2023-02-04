@php
    $setting = DB::table('websites')->first();
    
@endphp
<div class="container">
    <div class="row">
        <h1 class="fw-bold mt-5 mb-3 text_color_blue my_custom_text_muted">
            Get In Touch With Us <span class="text_color_red">!</span>
        </h1>

        <div class="col-12 col-md-6 pb-5 pb-md-0 text_color_blue ">
            <h5 class="pt-4 mb-1 fw-bold my_custom_text_muted ">Email</h5>
            <div class="d-flex align-items-center gap-1">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 1024 1024" height="1em"
                    width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M928 160H96c-17.7 0-32 14.3-32 32v640c0 17.7 14.3 32 32 32h832c17.7 0 32-14.3 32-32V192c0-17.7-14.3-32-32-32zm-40 110.8V792H136V270.8l-27.6-21.5 39.3-50.5 42.8 33.3h643.1l42.8-33.3 39.3 50.5-27.7 21.5zM833.6 232L512 482 190.4 232l-42.8-33.3-39.3 50.5 27.6 21.5 341.6 265.6a55.99 55.99 0 0 0 68.7 0L888 270.8l27.6-21.5-39.3-50.5-42.7 33.2z">
                    </path>
                </svg>
                <p> {{ $setting->email1 }}</p>
            </div>

            <h5 class="pt-4 mb-1 fw-bold my_custom_text_muted">Address</h5>
            <div class="d-flex align-items-center gap-1">
                <svg stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 24 24" height="1em"
                    width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                </svg>
                <p> {{ $setting->address1 }}</p>
            </div>

            <h5 class="pt-4 mb-1 fw-bold my_custom_text_muted">Contact Numbers</h5>
            <div class="d-flex align-items-center gap-1">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em"
                    width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M17.707 12.293a.999.999 0 0 0-1.414 0l-1.594 1.594c-.739-.22-2.118-.72-2.992-1.594s-1.374-2.253-1.594-2.992l1.594-1.594a.999.999 0 0 0 0-1.414l-4-4a.999.999 0 0 0-1.414 0L3.581 5.005c-.38.38-.594.902-.586 1.435.023 1.424.4 6.37 4.298 10.268s8.844 4.274 10.269 4.298h.028c.528 0 1.027-.208 1.405-.586l2.712-2.712a.999.999 0 0 0 0-1.414l-4-4.001zm-.127 6.712c-1.248-.021-5.518-.356-8.873-3.712-3.366-3.366-3.692-7.651-3.712-8.874L7 4.414 9.586 7 8.293 8.293a1 1 0 0 0-.272.912c.024.115.611 2.842 2.271 4.502s4.387 2.247 4.502 2.271a.991.991 0 0 0 .912-.271L17 14.414 19.586 17l-2.006 2.005z">
                    </path>
                </svg>
                <p>{{ $setting->phone1 }}, {{ $setting->phone2 }}</p>
            </div>

            <h5 class="pt-4 mb-1 fw-bold my_custom_text_muted">Time we work</h5>
            <div class="d-flex align-items-center gap-1">
                <svg stroke="currentColor" fill="none" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round"
                    stroke-linejoin="round" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="12" cy="12" r="10"></circle>
                    <polyline points="12 6 12 12 16 14"></polyline>
                </svg>
                <p>Mon - Sat : 8:00AM - 6:00AM</p>
            </div>
        </div>

        <form class="col-12 col-md-6  text_color_blue " action="{{ route('contact') }}" method="POST">
            @csrf
            <div>
                <input autoComplete="off" class="contact_input_field form-control form-control-lg px-2" type="text"
                    required name="name" aria-label=".form-control-lg example" placeholder="Name" />
            </div>

            <div>
                <input autoComplete="off" class="contact_input_field form-control form-control-lg px-2" type="text"
                    required name="email" placeholder="Email" aria-label=".form-control-lg example" />
            </div>

            <div>
                <input autoComplete="false" class="contact_input_field form-control form-control-lg px-2" type="text"
                    required name="phone" placeholder="Phone" aria-label="form-control-lg example" />
            </div>

            <div>
                <textarea class="contact_input_field form-control form-control-lg px-2" placeholder="Message" name="message" required
                    aria-label="form-control-lg example" rows="2">
                    
          </textarea>
            </div>

            <div class="d-flex align-items-center justify-content-end mt-4">
                <button type="submit" class="message_send_button py-3">
                    Send Message
                </button>
            </div>
        </form>
        <div>
            <div class="google_map_section">
                <h1 class="fw-bold py-5 text_color_blue my_custom_text_muted">
                    Want To Visit Us <span class="text_color_red">!</span>
                </h1>

                <iframe class="google_map"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28264.142367895714!2d85.30715908700091!3d27.685844849236144!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1837725d4d59%3A0x9814faeae42622df!2sGem%20Plasticrafts%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1668755430995!5m2!1sen!2snp"
                    width="100%" height="450" style=" border: 6" loading="lazy"
                    referrerPolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>
    </div>

</div>
