@extends('frontend.layout.master')

@section('content')
    @push('style')
        <style>

.single .sv-footer-subscribe input[type="submit"] {
  
  right: 120px;

  padding: 8px 14px;

}
.single li{
    list-style-type: disc;
}
.border_radius .fab{
    margin-top: 1rem;;
    font-size: 1.6rem;
}
.border_radius{
    border-radius: 10px;
}
        </style>
    @endpush

@php
    $contact=DB::table('websites')->first();
@endphp
<div class="row  my-5 mx-md-5 single">
    <div class="col-md-7 ">
        <header class="section-heading mb-2">
            <h2 class="section-title">{{ $blog->title }}</h2>
        </header><!-- sect-heading -->
        
        <article>
        <img src="{{ asset($blog->image) }}" alt="{{ $blog->title }}" class="img-fluid mt-1 mb-3">
        
        {!! $blog->detail !!}
    </div>
    <div class="col-md-4 card shadow py-3 px-3 offset-md-1 border_radius">
        <div class="border-bottom py-4 ">
            <strong class="text-center mb-4">Connect with us</strong>
        <p class="d-flex justify-content-around">
             <a href="{{ $contact->facebook1 }}"  class=" text-dark"><i class="fab fa-facebook"></i></a>
            <a href="{{ $contact->twitter1 }}" class="text-dark"><i class="fab fa-twitter"></i></a>
            <a href="{{ $contact->instagram1 }}" class=" text-dark"><i class="fab fa-instagram"></i></a></p>
        </div>
        <div class="py-4 border-bottom">
            <strong class="text-center">Join our Newsletter</strong>

            <div class="sv-footer-subscribe  mt-1">
                <form action="{{ route('subscriber.store') }}" method="POST">
                  @csrf
                  <div class="sv-footer-subscribe-email">
                    <input type="email" placeholder="Your Email" name="email"/>
                  </div>
                  <input type="submit" value="Submit" />
                </form>
               
              </div>
        </div>
        <div class="py-4">

        @php
            $related=DB::table('blogs')->where('category_id',$blog->category_id)->orderBy('id','desc')->limit(6)->get();
        @endphp
      <h2>  Related Blogs</h2>
      @foreach ($related as $item)
          
        <div class="row  my-2">
         
            <div class="col-md-12">
<p><a href="{{ route('blog.single',['id'=>$item->id]) }}" class="text-dark">{{ $item->title }}</a></p>
            </div>
        </div>
      @endforeach
    </div>
    </div>
</div>

@endsection
