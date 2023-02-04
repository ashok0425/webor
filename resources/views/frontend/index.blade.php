@extends('frontend.layout.master')

@section('content')
    @include('frontend.tempate.hero');
    @include('frontend.tempate.ourservice');
    @include('frontend.tempate.sale');
    @include('frontend.tempate.featured_product');
    @include('frontend.tempate.about');
    @include('frontend.tempate.category');
    @include('frontend.tempate.topselling');
    @include('frontend.tempate.about_bottom');
    @include('frontend.tempate.newsletter');
    @include('frontend.tempate.ourstandard');
@endsection
