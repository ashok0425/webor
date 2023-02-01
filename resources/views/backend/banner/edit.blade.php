@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'setting');
    @endphp


    <div class="card">
        <h3 class="card-title">Edit Banner</h3>

        <div class="card-body">

            <form action="{{ route('admin.banner.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input name="id" value="{{ $banner->id }}" type="hidden" />
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" class="form-control"
                        value="          {!! $banner->title !!}
                    ">
                </div>
                <div class="mb-3">
                    <label class="form-label">Detail</label>
                    <input type="text" name="descr" class="form-control" value=" {{ $banner->descr }}">
                    </textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Banner image</label>
                    <div class="file-upload-wrapper" data-text="Select your file!">
                        <input name="file" type="file" class="file-upload-field" value="">
                    </div>
                    <br>
                    <img src="{{ asset($banner->image) }}" alt="" width="100">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
