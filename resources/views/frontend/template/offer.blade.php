@php
    $offer = DB::table('websites')
        ->where('id', 1)
        ->value('header_offer');
@endphp
<div class="bg-white  text-prime py-2 text-center text-light font-normal		">
    {{ $offer }}
</div>
