@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'coupon');
    @endphp


    <div class="card">
        <h3>Edit SERVICE</h3>

        <div class="card-body">

            <form action="{{ route('admin.coupon.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" class="form-control" value="{{ $service->id }}">
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control"
                        placeholder="Enter Title"value="{{ $service->title }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" name="description" class="form-control"
                        placeholder="Enter description"value="{{ $service->description }}" required>
                </div>


                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
@endsection
