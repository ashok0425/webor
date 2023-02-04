    <!-- Footer wrapper -->
    @php
        $social = DB::table('websites')->first();
    @endphp


    <div>
        <footer class="footer">
            <svg class="footer_wave_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100"
                preserveAspectRatio="none">
                <path class="footer-wave-path"
                    d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z">
                </path>
            </svg>

            {{-- {/* Footer icon link----------------------------------------> */} --}}
            <div class="footer-content container">
                <div class="row px-0 mx-0">
                    <div class="col-12 d-flex align-items-center justify-content-center mb-5 col-lg-4">
                        <img src="{{ asset($social->image) }}" alt="">
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-5 pb-3 d-flex flex-column">
                        <h4 class="footer_column_heading ">Useful Links</h4>
                        {{-- {/*
                        <hr /> */} --}}
                        <div class="row
                            pt-1">
                            <div class="col d-flex flex-column gap-1">
                                <Link href="">
                                <a class="nav_link" href="">
                                    Home
                                </a>
                                </Link>

                                <Link href="">
                                <a class="nav_link" href="">
                                    About
                                </a>
                                </Link>

                                <Link href="">
                                <a class="nav_link" href="">
                                    Blogs
                                </a>
                                </Link>
                                <Link href="">
                                <a class="nav_link" href="">
                                    Careers
                                </a>
                                </Link>

                                {{-- {/*
                                <Link href=''>
                                <a class="nav_link" href="">
                                    Contact
                                </a>
                                </Link> */} --}}
                            </div>

                            <div class="col d-flex flex-column gap-1">
                                <Link href="">
                                <a class="nav_link" href="">
                                    Terms and Conditions
                                </a>
                                </Link>

                                <Link href="">
                                <a class="nav_link" href="">
                                    privacy Policy
                                </a>
                                </Link>
                                <Link href="">
                                <a class="nav_link" href="">
                                    Products
                                </a>
                                </Link>

                                <Link href="">
                                <a class="nav_link" href="">
                                    Contact
                                </a>
                                </Link>

                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4">
                        <h4 class="footer_column_heading">Subscribe Us</h4>
                        <p class="pt-1">
                            Lorem
                            ipsum dolor sit amet consectetur adipisicing elit. Culpa cupiditate
                            labore fugit voluptate officiis accusantium?</p>
                        <form onSubmit={handleSubmit(createSubscriber)} class="d-flex flex-column  flex-md-row pt-3 ">
                            <div>
                                <input type="email"
                                    class="form_control form-control form-control-lg
                                    rounded-0 "
                                    placeholder="Email Address" />

                            </div>
                            <button type="submit" class="subscribe_button px-3 py-3 py-md-0 mt-3 mt-md-0">
                                Subscribe
                            </button>
                        </form>

                    </div>
                </div>

                <div class="footer-social-links">
                    <svg class="footer-social-amoeba-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236 54">
                        <path class="footer-social-amoeba-path"
                            d="M223.06,43.32c-.77-7.2,1.87-28.47-20-32.53C187.78,8,180.41,18,178.32,20.7s-5.63,10.1-4.07,16.7-.13,15.23-4.06,15.91-8.75-2.9-6.89-7S167.41,36,167.15,33a18.93,18.93,0,0,0-2.64-8.53c-3.44-5.5-8-11.19-19.12-11.19a21.64,21.64,0,0,0-18.31,9.18c-2.08,2.7-5.66,9.6-4.07,16.69s.64,14.32-6.11,13.9S108.35,46.5,112,36.54s-1.89-21.24-4-23.94S96.34,0,85.23,0,57.46,8.84,56.49,24.56s6.92,20.79,7,24.59c.07,2.75-6.43,4.16-12.92,2.38s-4-10.75-3.46-12.38c1.85-6.6-2-14-4.08-16.69a21.62,21.62,0,0,0-18.3-9.18C13.62,13.28,9.06,19,5.62,24.47A18.81,18.81,0,0,0,3,33a21.85,21.85,0,0,0,1.58,9.08,16.58,16.58,0,0,1,1.06,5A6.75,6.75,0,0,1,0,54H236C235.47,54,223.83,50.52,223.06,43.32Z">
                        </path>
                    </svg>

                    <a href="">
                        <div class="div footer-social-link linkedin">
                            <i class="fab fa-facebook footer_icon"></i>
                        </div>
                    </a>

                    <a href="">
                        <div class="footer-social-link twitter">
                            <i class="fab fa-instagram footer_icon"></i>
                        </div>
                    </a>

                    <a href="">
                        <div class="footer-social-link youtube">
                            <i class="fab fa-youtube footer_icon"></i>
                        </div>
                    </a>

                    <a href="">
                        <div class="footer-social-link github">
                            <i class="fab fa-whatsapp footer_icon"></i>

                        </div>
                    </a>
                </div>
            </div>

            {{-- {/* Copyright section -------------------------------------->*/} --}}
            <div class="footer-copyright">
                <div class="footer-copyright-wrapper">
                    <p class="footer_copyright_text">
                        ©2022. | Designed And Developed By : <span class="falcon_link">
                            Falcon Tech
                            Nepal
                        </span> | All rights reserved.
                    </p>
                </div>
            </div>
        </footer>
    </div>
