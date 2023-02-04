@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'partner');
    @endphp


    <div class="card">
        <h3>Add Partner</h3>

        <div class="card-body">

            <form action="{{ route('admin.time.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="2" name="type">

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <div class="file-upload-wrapper" data-text="Select your file!">
                        <input name="file" type="file" class="file-upload-field" value="">
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Partner Name</label>
                    <input type="text" name="name" id="" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Description</label>
                    <input type="text" name="review" id="" class="form-control" required>
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
