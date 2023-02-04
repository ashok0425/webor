@extends('frontend.layout.master')

@section('content')
    @include('frontend.tempate.hero');
    <div class="container my-5">
        <div class="row">
            @foreach ($products as $product)
                @include('frontend.tempate.product_box', ['product' => $product])
            @endforeach
            <div class="d-flex justify-content-center mt-4">
                {{ $products->links() }}
            </div>
        </div>
    </div>

    @include('frontend.tempate.ourservice');
@endsection
