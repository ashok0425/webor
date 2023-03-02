<li class="splide__slide ">
    <div
        class='max-h-[23rem]   min-h-[14rem] bg-bl cursor-pointer md:mx-4 main rounded-lg shadow-lg overflow-hidden  py-10 px-6 @if (isset($m)) md:w-[60%] md:mx-auto @endif '>
        <div class="block_quote text-center">
            <i class="fas fa-quote-left text-white text-[2rem]"></i>
        </div>
        <div class="stars text-center mt-2">
            <ul class="flex justify-center	">
                @for ($i = 1; $i <= $review->star; $i++)
                    <li><i class="fas fa-star text-amber-500"></i></li>
                @endfor
                @for ($i = 1; $i <= 5 - $review->star; $i++)
                    <li><i class="fas fa-star text-white"></i></li>
                @endfor

            </ul>
            <div class="review_title font-xl text-white mt-2">
                {{ $review->title }}
            </div>
            <div class="review_desc text-gray-300 font-thin mt-2 text-sm">
                {{ $review->review }}

            </div>
            <div class="review_post mt-4">
                <h2 class="text-2xl text-white"> {{ $review->name }}
                </h2>
                <p class="text-white text-sm"> {{ $review->position }}
                </p>
            </div>
        </div>
    </div>
</li>
