<div class="container">
    @php
        $reviews = DB::table('times')
            ->where('status', 1)
            ->where('type', 1)
        
            ->get();
    @endphp
    <div class="testimonial_wrapper">
        <div class="d-flex flex-column align-items-center text_color_blue">
            <div class="d-flex flex-column align-items-center text_color_blue gap-2 pb-4">
                <h2 class="p-0 m-0 h2 fw-semibold text_color_blue text-muted">What Client Says About US</h2>
            </div>
        </div>
        <div class="owl-carousel" id="testimonial">

            @foreach ($reviews as $test)
                <div class="each_review_div text_color_blue ">
                    <div class="quote_wrapper d-flex flex-column">
                        {{-- <i class="fas fa-blockquote "></i> --}}
                        <p class="text-center ">{{ $test->review }}</p>
                    </div>
                    <div class="d-flex flex-column align-items-center mt-5">
                        <div class="review_avatar_div">
                            <img src="{{ $test->image }}" layout="fill" objectFit="cover" alt="img"
                                class="img-fluid" />
                        </div>
                        <div>
                            <hr class="styles.review_vr vr" />
                        </div>
                        <p class="h6">{{ $test->name }}</p>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

</div>
