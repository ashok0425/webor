@php
    $banner = DB::table('banners')
        ->where('type', 2)
        ->where('status', 1)
        ->skip(2)
        ->take(1)
        ->first();
@endphp
@if ($banner)
    <div class=" mt-20">
        <a class='aspect-[6/3] md:aspect-[9/3] bg-red-400' href="{{ $banner->title }}">
            <img src="{{ asset($banner->image) }}" alt='webor banner' class='object-cover w-full md:h-[400px]' />
        </a>
    </div>
@endif
