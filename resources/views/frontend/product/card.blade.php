<div class='space-y-5 card'>
    <div class=' w-full h-80 overflow-hidden shadow-xl rounded-lg'>
        <img src={{ asset($product->image) }} alt='telev' fill class='object-cover card-img scale-105 min-h-[100%]' />
    </div>
    <div class='flex gap-10 font-bold'>
        <span class='text-prime'>{{ $loop->iteration }}</span>
        <p class='title text-xl'>{{ $product->name }}</p>
    </div>
</div>
