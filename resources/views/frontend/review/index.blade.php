@extends('frontend.layout.master')
@push('style')
@endpush
@section('content')
    @include('frontend.review.banner')
    @php
        $reviews = DB::table('times')
            ->where('status', 1)
            ->limit(4)
            ->orderBy('id', 'desc')
            ->get();
    @endphp
    <section class='my-container space-y-4 mt-20'>
        <h1 class=' text-red-600 text-center text-xl font-semibold'>
            Reviews
        </h1>
        <section class="splide mt-2" id="review_splide_page">
            <div class="splide__track">
                <ul class="splide__list">

                    @foreach ($reviews as $review)
                        @include('frontend.template.review_card', ['review' => $review, 'm' => 20])
                    @endforeach

                </ul>
            </div>
        </section>
    </section>

    @include('frontend.review.faq')
@endsection
