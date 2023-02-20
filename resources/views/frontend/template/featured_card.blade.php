<div class='space-y-5 card'>
    <div class=' w-full h-80 overflow-hidden shadow-xl rounded-lg'>
        <img src="{{ asset($img) }}" alt='telev' class='object-cover card-img scale-105  h-full w-full' />
    </div>
    <div class='flex gap-10 font-bold'>
        <span class='text-prime'>{{ $count }}</span>
        <p class='title text-xl'>{{ $name }}</p>
    </div>
</div>
