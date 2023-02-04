@php
    $banners = DB::table('banners')
        ->where('status', 1)
        ->where('type', 2)
    
        ->get();
@endphp
<div class="container">
    <div>
        <div class="alert alert-warning text-center rounded-0" role="alert">
            <p class="h6"> Hurry Up !! Our Sale is Opening Soon At Bagbzzar</p>
        </div>
    </div>
    <div class="row">

        @foreach ($banners as $item)
            <div class="col-12 col-md-6">
                <div class="discount_img">
                    <img src="{{ asset($item->image) }}" class="img-fluid" objectFit="cover" alt="img" />
                </div>
            </div>
        @endforeach

    </div>
</div>
