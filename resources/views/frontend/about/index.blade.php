@extends('frontend.layout.master')
@php
    $about = DB::table('pages')
        ->where('id', 1)
    
        ->value('about');
    
    $banner = DB::table('banners')
        ->where('type', 3)
        ->where('status', 1)
    
        ->first();
    
    $banner1 = DB::table('banners')
        ->where('type', 3)
        ->where('status', 1)
        ->skip(1)
        ->take(1)
        ->first();
    
    $banner2 = DB::table('banners')
        ->where('type', 3)
        ->where('status', 1)
        ->skip(2)
        ->take(1)
        ->first();
    
    $banner3 = DB::table('banners')
        ->where('type', 3)
        ->where('status', 1)
        ->skip(3)
        ->take(1)
        ->first();
    
    $banner4 = DB::table('banners')
        ->where('type', 3)
        ->where('status', 1)
        ->skip(4)
        ->take(1)
        ->first();
    
    $banner5 = DB::table('banners')
        ->where('type', 3)
        ->where('status', 1)
        ->skip(5)
        ->take(1)
        ->first();
@endphp
@section('content')
    <section class="pt-12">
        <div class='space-y-32'>
            <section class='my-container'>
                @if ($banner)
                    <div class="logos text-center mb-10">
                        <img src="{{ asset($banner->image) }}" alt="" class="w-[350px]  mx-auto">
                        <p class="md:w-[650px] mx-auto text-sm mt-4">{{ strip_tags($banner->descr) }}</p>
                    </div>
                @endif
                @if ($banner1)
                    <div class='md:flex gap-16'>
                        <div class=' pb-8  basis-3/5'>
                            <h1 class='font-bold text-[2rem] text-red-500'>
                                {{ $banner1->title }}

                            </h1>
                        </div>
                        <div class='w-full'>
                            <div class=''>
                                {{ $banner1->descr }}

                            </div>
                        </div>
                    </div>
                @endif

                @if ($banner2)
                    <div class="about_banner my-8">
                        <img src="{{ asset($banner2->image) }}" alt="">
                    </div>
                @endif


                @if ($banner3)
                    <div class='md:flex gap-16 mt-12'>
                        <div class=' pb-8  md:w-[35%]'>
                            <img src="{{ asset($banner3->image) }}" alt="" class="w-full">
                        </div>
                        <div class='md:w-[65%]'>
                            <div class=''>
                                <h1 class='font-bold text-[1.5rem] text-red-500'>
                                    {{ $banner3->title }}

                                </h1>
                                <p class="text-md">
                                    {{ $banner3->descr }}
                                </p>

                            </div>
                        </div>
                    </div>
                @endif


                @if ($banner4)
                    <div class='md:flex gap-16 mt-12'>
                        <div class=' pb-8  md:w-[65%]'>

                            <h1 class='font-bold text-[1.5rem] text-red-500'>
                                {{ $banner4->title }}

                            </h1>
                            <p class="text-sm">
                                {!! $banner4->descr !!}
                            </p>
                        </div>
                        <div class='md:w-[35%]'>

                            <div class=''>
                                <img src="{{ asset($banner4->image) }}" alt="" class="w-full">


                            </div>
                        </div>
                    </div>
                @endif




                @if ($banner5)
                    <div class='md:flex gap-16 mt-12'>
                        <div class=' pb-8  md:w-[35%]'>
                            <img src="{{ asset($banner5->image) }}" alt="" class="w-full">
                        </div>
                        <div class='md:w-[65%]'>
                            <div class=''>
                                <h1 class='font-bold text-[1.5rem] text-red-500'>
                                    {{ $banner5->title }}

                                </h1>
                                <p class="text-md">
                                    {!! $banner5->descr !!}
                                </p>

                            </div>
                        </div>
                    </div>
                @endif
            </section>


        </div>
    </section>
@endsection
