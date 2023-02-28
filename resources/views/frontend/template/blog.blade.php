@php
    $blogs = DB::table('blogs')
        ->where('status', 1)
        ->orderBy('id', 'desc')
        ->limit(2)
        ->get();
@endphp
<div class='my-container mt-20'>
    {{-- <h3 class='sec-h1 text-4xl'>Our News</h3> --}}
    <div class='grid sm:grid-cols-1 md:grid-cols-2 gap-11 mt-10'>

        @foreach ($blogs as $blog)
            @include('frontend.blog.card', ['blog' => $blog])
        @endforeach

    </div>
</div>
