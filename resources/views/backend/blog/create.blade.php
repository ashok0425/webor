@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'blog');
    @endphp

    <div class="card">
        <h3 class="">Create Blog</h3>

        <div class="card-body">

            <form action="{{ route('admin.blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label class="form-label">Blog Title</label>
                    <input type="text" name="title" class="form-control"
                        placeholder="Blog title"value="{{ old('title') }}" required>
                </div>


                <div class="mb-3">
                    <label class="form-label">Blog Detail</label>
                    <textarea type="text" name="detail" id="summernote" class="form-control" placeholder="Blog Detail" required>
                    {{ old('detail') }}
                </textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Thumbnail</label>
                    <div class="file-upload-wrapper" data-text="Select your file!">
                        <input name="file" type="file" class="file-upload-field" value="">
                    </div>
                    <br>
                </div>

                <div class="mb-3">
                    <label class="form-label"><input value="1" type="checkbox" name="featured" id=""> Featured
                        Blog</label>

                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
