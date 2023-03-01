@extends('frontend.layout.master')
@section('content')
    <section class="pt-10">
        <div class='my-container'>

            @if ($featured)
                <div class="featured_blog relative">
                    <img src="{{ asset($featured->image) }}" alt="{{ $featured->title }}"
                        class="w-full h-[390px] object-fit-cover">
                    <div class="featured_blog_text ">
                        <div class="card bg-white absolute top-10 left-10 p-4 md:w-[380px] w-[70%]">
                            <p class="text-gray-400 text-md font-md uppercase">Featured Article</p>
                            <div class="feature_blog_title my-4">
                                <h1 class="font-bold text-xl">{{ $featured->title }}</h1>
                                <p class="text-gray-500 mt-3 text-right text-sm">
                                    {{ Carbon\Carbon::parse($featured->created_at)->format('D M Y') }}
                                </p>

                                <p class="text-gray-500 mt-3 text-sm">
                                    {!! Str::limit(strip_tags($featured->detail), 100) !!}
                                </p>

                                <p class="text-center mt-4">
                                    <a href="{{ route('blog.detail', ['id' => $featured->id]) }}"
                                        class='btn-p btn-hov md:px-20 sm:px-10'>
                                        <span class='main'>
                                            <span class='inner'>
                                                <span class='text-white content'>Read More</span>
                                            </span>
                                            <span class='inner'>
                                                <span class='text-white content' aria-hidden='true'>
                                                    Read More
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

            <div class="text-center mt-12 mb-6">
                <h2 class="text-red-500 font-bold text-2xl">Best Picks</h2>
            </div>
            <div class='grid sm:grid-cols-1 md:grid-cols-2 gap-11 mt-2'>

                @foreach ($blogs as $blog)
                    @include('frontend.blog.card', ['blog' => $blog])
                @endforeach

            </div>

            {{ $blogs->links() }}


            @if ($featured2)
                <div class="featured_blog relative mt-16">
                    <img src="{{ asset($featured2->image) }}" alt="{{ $featured2->title }}"
                        class="w-full h-[390px] object-fit-cover">
                    <div class="featured_blog_text ">
                        <div class="card bg-white absolute top-10  p-4 md:w-[380px] w-[70%] right-10">
                            <p class="text-gray-400 text-md font-md uppercase">Featured Article</p>
                            <div class="feature_blog_title my-4">
                                <h1 class="font-bold text-xl">{{ $featured2->title }}</h1>
                                <p class="text-gray-500 mt-3 text-right text-sm">
                                    {{ Carbon\Carbon::parse($featured2->created_at)->format('D M Y') }}
                                </p>

                                <p class="text-gray-500 mt-3 text-sm">
                                    {!! Str::limit(strip_tags($featured2->detail), 100) !!}
                                </p>

                                <p class="text-center mt-4">
                                    <a href="{{ route('blog.detail', ['id' => $featured2->id]) }}"
                                        class='btn-p btn-hov md:px-20 sm:px-10'>
                                        <span class='main'>
                                            <span class='inner'>
                                                <span class='text-white content'>Read More</span>
                                            </span>
                                            <span class='inner'>
                                                <span class='text-white content' aria-hidden='true'>
                                                    Read More
                                                </span>
                                            </span>
                                        </span>
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </section>
@endsection
