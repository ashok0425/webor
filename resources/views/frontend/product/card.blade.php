<a href='{{ route('product.deatil', ['id' => $product->id]) }}'>
    <div class='space-y-5 card shadow-md  border pb-3 mx-2'>
        <div class='  h-80 overflow-hidden  mx-auto  px-0 text-center'>
            <img src={{ asset($product->image) }} alt='{{ $product->name }}'
                class='object-cover w-100 scale-105 h-full scale-110  object-cover    hover:scale-100 transition duration-150 ease-out md:ease-in' />
        </div>
        <div class='flex gap-10 font-bold px-2 flex justify-between h-[50px]'>
            <span class=' font-bold text-black text-sm'>{{ Str::limit($product->name, 60) }}</span>
            <p class=' text-gray-500 text-sm font-bold '>{{ $product->cat->category }}</p>
        </div>
    </div>
</a>
