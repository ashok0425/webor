@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'device');
    @endphp

    <div class="card">
        <h3>Edit Category</h3>

        <div class="card-body">

            <form action="{{ route('admin.category.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $category->id }}" />
                <div class="mb-3">
                    <label class="form-label">Category</label>
                    <input type="text" name="category" class="form-control" placeholder="Category"
                        value="{{ $category->category }}">
                </div>
                <div class="mb-3">
                    <label class="form-label">Thumbnail</label>
                    <div class="file-upload-wrapper" data-text="Select your file!">
                        <input name="file" type="file" class="file-upload-field" value="">
                    </div>
                    <br>
                    <img src="{{ asset($category->image) }}" alt="{{ $category->category }}" width="100">
                </div>

                <div class="mb-3">
                    <label class="form-label">Banner</label>
                    <div class="file-upload-wrapper" data-text="Select your file!">
                        <input name="banner" type="file" class="file-upload-field" value="">
                    </div>
                    <img src="{{ asset($category->banner) }}" alt="{{ $category->category }}" width="100">

                </div>

                <div class="mb-3">
                    <label class="form-label">
                        <input name="show_in_header" type="checkbox" value="1"
                            @if ($category->show_in_header == 1) checked @endif>
                        Banner</label>
                </div>

                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
    </div>
@endsection
