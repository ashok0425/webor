@php
    $gallery=DB::table('modals')->orderBy('id','desc')->get();
@endphp
@push('style')
<script src="gallery.js"></script>
<link rel="stylesheet" type="text/css" href="gallery.min.css" media="screen" />
@endpush
<section class="container py-5">
  <h3 class="custom-fw-600 custom-fs-60 text-center">Our Gallery</h3>
  <div class="custom-product-grid mt-5">
      @foreach ($gallery as $item)
      <div class="card border-0">
        <img src="{{$item->image}}" alt="gallery thumbnail" />
    </div>
      @endforeach
      
  </div>
  @php
      $insta=DB::table('websites')->first();
  @endphp
  <div class="text-center pt-5">
      <a href="{{$insta->instagram1}}" class="btn custom-fs-25 custom-fw-600 custom-bc-secondary px-4 custom-text-secondary border-2">
          <span>
               <i class="fab fa-instagram custom-fs-30 "></i>                                  
          </span>
          <span>Follow us</span>
      </a>
  </div>
</section>