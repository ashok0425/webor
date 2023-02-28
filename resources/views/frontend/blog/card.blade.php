<div class="bg-gray-100 p-10 rounded-xl">
    <a href='{{ route('blog.detail', ['id' => $blog->id]) }}'>
        <div class='space-y-5 card group'>
            <div class='  overflow-hidden shadow-xl rounded-lg'>
                <img src="{{ asset($blog->image) }}" alt='telev' fill
                    class='object-cover card-img scale-105  w-full h-[200px] ' />
            </div>
            <div class='flex gap-5 md:gap-10 font-bold'>
                <div class='space-y-3'>
                    <h2 class='text-xl title text-red-600 font-medium'>{{ $blog->title }}</h2>
                    <p class='text-sm font-normal'>{{ strip_tags(Str::limit($blog->detail, 120)) }}</p>
                    {{-- <p class='text-sm text-sm'>{{ Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</p> --}}
                </div>
            </div>
        </div>
    </a>
</div>
