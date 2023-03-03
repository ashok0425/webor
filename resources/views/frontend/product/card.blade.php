<div class='space-y-5 card mx-6 shadow-md text-center border pb-3 w-[290px]'>
    <div class='  h-80 overflow-hidden  mx-auto  px-0 text-center'>
        <img src={{ asset($product->image) }} alt='{{ $product->name }}' class='object-cover w-100 scale-105 h-full ' />
    </div>
    <div class='flex gap-10 font-bold px-2 flex justify-between'>
        <span class='title font-bold text-black text-md'>{{ $product->name }}</span>
        <p class='title text-gray-500 text-md font-bold '>{{ $product->cat->category }}</p>
    </div>
</div>
