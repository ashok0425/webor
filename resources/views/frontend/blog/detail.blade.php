@extends('frontend.layout.master')

@section('content')
    <section class='pt-20'>
        <div class='my-container space-y-6 '>

            <div class=''>
                <img src='{{ asset($blog->image) }}' alt='{{ $blog->title }}' class=" object-cover w-full max-h-[400px] " />
            </div>
            <div class="text-center">
                <h1 class='sec-h1'>{{ $blog->title }}</h1>
                <div class="space-y-8 md:w-[75%] mx-auto  my-10">
                    {!! $blog->detail !!}

                </div>
            </div>
            <div class="next_prev mt-4">
                <div class="flex justify-between">
                    <a href="{{ route('blog.detail', ['id' => $blog->id - 1]) }}"><i class="fas fa-arrow-left"></i> Previous
                        Page</a>
                    <a href="{{ route('blog.detail', ['id' => $blog->id + 1]) }}">Next Page <i
                            class="fas fa-arrow-right"></i>
                    </a>


                </div>
            </div>
            <div class="similar_blog">
                <h2 class="text-center text-red-500 font-bold text-2xl my-8">Similar Blogs </h2>
                <div class='grid sm:grid-cols-1 md:grid-cols-2 gap-11 mt-2'>

                    @foreach ($blogs as $blog)
                        @include('frontend.blog.card', ['blog' => $blog])
                    @endforeach

                </div>
            </div>
        </div>
    </section>
@endsection
