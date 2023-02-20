<div key="">
    <a href='{{ route('blog.detail', ['id' => $blog->id]) }}'>
        <div class='space-y-5 card group'>
            <div class='  overflow-hidden shadow-xl rounded-lg'>
                <img src="{{ asset($blog->image) }}" alt='telev' fill
                    class='object-cover card-img scale-105  w-full h-64 md:h-80' />
            </div>
            <div class='flex gap-5 md:gap-10 font-bold'>
                <span class='text-red-800'>{{ $loop->iteration }}</span>
                <div class='space-y-3'>
                    <h2 class='text-xl title'>{{ $blog->title }}</h2>
                    <p class='text-lg font-normal'>{{ strip_tags(Str::limit($blog->detail, 100)) }}</p>
                    <p class='text-sm'>{{ Carbon\Carbon::parse($blog->created_at)->format('d/m/Y') }}</p>
                </div>
            </div>
        </div>
    </a>
</div>
