@extends('frontend.layout.master')
@push('style')
    <style>
        #hero_splide .splide__pagination {
            right: 100% !important
        }
    </style>
@endpush
@section('content')
    @include('frontend.template.hero')
    @include('frontend.template.featured')
    @include('frontend.template.banner2')
    @include('frontend.template.covered')
    @include('frontend.template.diff_from_other')
    @include('frontend.template.gallery')
    @include('frontend.template.blog')
@endsection
