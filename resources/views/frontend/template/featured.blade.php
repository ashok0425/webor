@php
    $p1 = DB::table('products')
        ->orderBy('id', 'desc')
        ->where('featured', 1)
        ->where('status', 1)
        ->first();
    $p2 = DB::table('products')
        ->orderBy('id', 'desc')
        ->where('featured', 1)
        ->where('status', 1)
        ->skip(1)
        ->take(1)
        ->first();
    $p3 = DB::table('products')
        ->orderBy('id', 'desc')
        ->where('featured', 1)
        ->where('status', 1)
        ->skip(2)
        ->take(1)
        ->first();
    $p4 = DB::table('products')
        ->orderBy('id', 'desc')
        ->where('featured', 1)
        ->where('status', 1)
        ->skip(3)
        ->take(1)
        ->first();
    
@endphp



<section class='my-container mt-20'>
    <div class='space-y-8'>
        <h1 class='sec-h1'>
            Featured <br />
            For You
        </h1>
        <p class='md:w-3/4'>Lorem ipsum dolor sit amen consectetur adipisicing elit. Alias impedit quae fugit
            doloribus? Rerum sit obcaecati modi. Voluptatem qui nemo non doloribus id debitis deleniti!</p>
    </div>

    <div class='grid sm:grid-cols-5 lg:pr-20 gap-11 mt-12'>
        <div class='col-span-3'>
            @include('frontend.template.featured_card', [
                'name' => " $p1->name ",
                'img' => "$p1->image",
                'count' => 1,
            ])
        </div>
        <div class='col-span-3 sm:col-span-2'>
            @include('frontend.template.featured_card', [
                'name' => " $p2->name ",
                'img' => "$p2->image",
                'count' => 1,
            ])
        </div>
    </div>

    <div class='grid sm:grid-cols-5 lg:pl-20 gap-11 mt-12'>
        <div class='col-span-3 sm:col-span-2'>


            @include('frontend.template.featured_card', [
                'name' => "$p3->name ",
                'img' => "$p3->image",
                'count' => 3,
            ])
        </div>
        <div class='col-span-3 space-y-5'>

            @include('frontend.template.featured_card', [
                'name' => " $p4->name ",
                'img' => "$p4->image",
                'count' => 4,
            ])
        </div>
    </div>
</section>
