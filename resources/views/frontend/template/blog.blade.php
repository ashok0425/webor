@php
    $blogs = DB::table('blogs')
        ->where('status', 1)
        ->where('type', 1)
    
        ->orderBy('id', 'desc')
        ->limit(2)
        ->get();
@endphp
<div class='my-container mt-20'>
    <h1 class=' text-red-600 text-center text-xl font-semibold'>
        Blogs
    </h1>
    <div class='grid sm:grid-cols-1 md:grid-cols-2 gap-11 mt-10'>

        @foreach ($blogs as $blog)
            @include('frontend.blog.card', ['blog' => $blog])
        @endforeach

    </div>

    <div class="mt-8 text-center">
        <a href="{{ route('blog') }}" class='btn-p btn-hov md:px-20 sm:px-10'>
            <span class='main'>
                <span class='inner'>
                    <span class='text-white content'>View All</span>
                </span>
                <span class='inner'>
                    <span class='text-white content' aria-hidden='true'>
                        View All
                    </span>
                </span>
            </span>
        </a>
    </div>
</div>
