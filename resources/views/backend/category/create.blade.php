@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'device');
    @endphp

    <div class="card">
        <h3>Add Category</h3>

        <div class="card-body">

            <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <input type="text" name="category" class="form-control"
                        placeholder="Category"value="{{ old('category') }}" required>
                </div>
                <div class="mb-3">
                    <label class="form-label">Thumbnail</label>
                    <div class="file-upload-wrapper" data-text="Select your file!">
                        <input name="file" type="file" class="file-upload-field" value="">
                    </div>
                </div>


                <div class="mb-3">
                    <label class="form-label">Banner</label>
                    <div class="file-upload-wrapper" data-text="Select your file!">
                        <input name="banner" type="file" class="file-upload-field" value="">
                    </div>
                </div>

                <div class="mb-3">
                    <label class="form-label">
                        <input name="show_in_header" type="checkbox" value="1">
                        Banner</label>
                </div>


                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
