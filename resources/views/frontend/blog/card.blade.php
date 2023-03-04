<div class="shadow-md p-2 ">
    <a href='{{ route('blog.detail', ['id' => $blog->id]) }}'>
        <div class='space-y-5 md:flex py-3'>
            <div class='  overflow-hidden  rounded-lg md:w-[50%]'>
                <img src="{{ asset($blog->image) }}" alt='telev' fill
                    class='object-cover scale-105  w-full h-[200px]' />
            </div>
            <div class='md:w-[50%] gap-5 md:gap-10 font-bold mt-0 pt-0 '>
                <div class='px-2 pl-3'>
                    <h2 class='text-xl title text-black font-bold'>{{ $blog->title }}</h2>


                    <p class='text-sm
                        font-normal'>
                        {{ strip_tags(Str::limit($blog->detail, 200)) }}</p>

                    <p class='text-sm font-medium text-fray-500 text-right'>
                        {{ Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}
                    </p>
                </div>
            </div>
        </div>
    </a>
</div>
