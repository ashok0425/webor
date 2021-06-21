
@extends('frontend.layout.master')
@push('style')
    <style>
        .loading{
            display: block;
        }
    </style>
@endpush
@section('content')
    <!-- new section -->
    <!-- caresoul section -->
    @include('frontend.template.banner')

 
    <!-- new section -->
    <!-- top feature -->
    @include('frontend.template.features')
  

    @include('frontend.template.service')

    <!-- new section -->
    <!-- Start Repaair do  -->
    @include('frontend.template.repair')


    <!-- new section -->
    <!-- why work with us -->
    @include('frontend.template.workwithus')
   

    <!-- new sectin -->
    <!-- feature products -->
    @include('frontend.template.featuredproduct')


{{-- review  --}}
    @include('frontend.template.review')

    


    <div class="white-bg"></div>
@endsection
@push('scripts')
<script>
  $(window).on('load',function(){
$('.loading').css('display','none')
})

</script>
  
@endpush
