@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'coupon');
    @endphp


    <div class="card">
        <h3>Add Gallery</h3>

        <div class="card-body">

            <form action="{{ route('admin.coupon.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Thumbnail</label>
                    <input type="file" name="file" class="form-control" required>
                </div>



                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
