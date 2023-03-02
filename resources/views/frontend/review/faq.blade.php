@php
    $faqs = DB::table('blogs')
        ->where('status', 1)
        ->where('type', 2)
        ->get();
@endphp
<div class="my-container">
    <h1 class=' text-red-600 text-center text-xl font-semibold my-20'>
        Frequently Asked Questions (FAQ)
    </h1>
    <div id="accordionExample">
        @foreach ($faqs as $item)
            <div
                class="rounded-t-lg border my-2 border-neutral-200 bg-white dark:border-neutral-600 dark:bg-neutral-800">
                <h2 class="mb-0 font-bold" id="heading{{ $item->id }}">

                    <button
                        class="group relative flex w-full items-center rounded-none border-0 bg-white py-4 px-5 text-left text-base text-neutral-800 transition [overflow-anchor:none] hover:z-[2] focus:z-[3] focus:outline-none dark:bg-neutral-800 dark:text-white [&:not([data-te-collapse-collapsed])]:bg-white [&:not([data-te-collapse-collapsed])]:text-primary [&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(229,231,235)] dark:[&:not([data-te-collapse-collapsed])]:bg-neutral-800 dark:[&:not([data-te-collapse-collapsed])]:text-primary-400 dark:[&:not([data-te-collapse-collapsed])]:[box-shadow:inset_0_-1px_0_rgba(75,85,99)]"
                        type="button" data-te-collapse-init data-te-target="#collapse{{ $item->id }}"
                        aria-expanded="true" aria-controls="collapse{{ $item->id }}">
                        {{ $item->title }}
                        <span
                            class="ml-auto h-5 w-5 shrink-0 rotate-[-180deg] fill-[#336dec] transition-transform duration-200 ease-in-out group-[[data-te-collapse-collapsed]]:rotate-0 group-[[data-te-collapse-collapsed]]:fill-[#212529] motion-reduce:transition-none dark:fill-blue-300 dark:group-[[data-te-collapse-collapsed]]:fill-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>
                        </span>
                    </button>
                </h2>
                <div id="collapse{{ $item->id }}" class="!visible @if ($loop->index != 0) hidden @endif"
                    data-te-collapse-item data-te-collapse-show aria-labelledby="heading{{ $item->id }}"
                    data-te-parent="#accordionExample">
                    <div class="py-4 px-5">
                        {{ $item->detail }}
                    </div>
                </div>
            </div>
        @endforeach

    </div>
</div>
