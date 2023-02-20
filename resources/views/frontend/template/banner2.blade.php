@php
    $banner = DB::table('banners')
        ->where('type', 2)
        ->where('status', 1)
        ->first();
@endphp
<section class='aspect-[6/3] md:aspect-[9/3] bg-red-400 mt-20'>
    <Image src="{{ asset($banner->image) }}" alt='webor banner' class='object-cover w-full h-full' />
</section>
