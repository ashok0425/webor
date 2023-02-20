@extends('frontend.layout.master')
@section('content')
    <section class="pt-28">
        <div class='my-container'>
            <h3 class='sec-h1 text-4xl'>Our News</h3>
            <div class='grid sm:grid-cols-2 md:grid-cols-3 gap-11 mt-10'>

                @foreach ($blogs as $blog)
                    @include('frontend.blog.card', ['blog' => $blog])
                @endforeach

            </div>
        </div>
    </section>
@endsection
