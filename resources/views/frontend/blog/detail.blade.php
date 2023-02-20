@extends('frontend.layout.master')

@section('content')
    <section class='pt-28'>
        <div class='my-container space-y-6'>
            <h1 class='sec-h1'>{{ $blog->title }}</h1>

            <div class=' '>
                <img src='{{ asset($blog->image) }}' alt='{{ $blog->title }}' class="h-50 w-100" />
            </div>



            <div class="space-y-8 md:w-[75ch]  my-10">
                {{ $blog->detail }}

            </div>
        </div>
    </section>
@endsection
