@php
$banner=DB::table('products')->where('status',1)->where('featured',1)->orderBy('id','desc')->limit(2)->get();
@endphp
<section class="py-5">
  <div class="container">
      <div class="row">
        @foreach ($banner as $item)
        <div class="col-12 col-md-7 col-lg-6 py-2" style="position: relative;">
          <img class="custom-category-img-resize img-fluid" src="{{asset($item->image)}}"
              alt="product category thumbnail" height="200" />
          <div class="forced-bottom">
              <a class="btn custom-bg-white custom-fw-800 custom-fs-35" href="{{route('product.detail',['id'=>$item->id,'name'=>$item->name])}}">{{$item->name}}</a>
          </div>
      </div> 
        @endforeach
       
         
      </div>
  </div>
</section>