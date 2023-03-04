@extends('frontend.layout.master')
@push('style')
    <style>
        #hero_splide .splide__pagination {
            right: 100% !important
        }
    </style>
@endpush
@section('content')
    @include('frontend.template.offer')
    @include('frontend.template.hero')
    @include('frontend.template.covered')
    @include('frontend.template.banner2')

    @include('frontend.template.trending')

    @include('frontend.template.banner3')

    @include('frontend.template.diff_from_other')
    @include('frontend.template.gallery')
    @include('frontend.template.blog')
    @include('frontend.template.review')
    @include('frontend.template.banner4')
@endsection
