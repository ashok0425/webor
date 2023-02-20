@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'coupon');
    @endphp


    <div class="card">
        <h3>Edit Gallery</h3>

        <div class="card-body">

            <form action="{{ route('admin.coupon.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" class="form-control" value="{{ $service->id }}">

                <div class="mb-3">
                    <label class="form-label">Thumbnail</label>
                    <input type="file" name="file" class="form-control" required>
                    <img src="{{ asset($service->image) }}" alt="" width="100">
                </div>


                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
@endsection
