@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'setting');
    @endphp


    <div class="card">
        <h3>Add Banner</h3>

        <div class="card-body">

            <form action="{{ route('admin.banner.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Banner Title</label>

                    <input type="text" name="title" class="form-control" value=" {{ old('title') }}">

                </div>

                <div class="mb-3">
                    <label class="form-label">Detail</label>
                    <input type="text" name="descr" class="form-control" value=" {{ old('descr') }}">
                    </textarea>
                </div>


                <div class="mb-3">
                    <label class="form-label">Type</label>
                    <select name="type" id="" class="form-control">
                        <option value="1">Main Banner</option>
                        <option value="2">Event Banner</option>
                        <option value="3">About Banner</option>


                    </select>
                    </textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label">Banner image</label>
                    <div class="file-upload-wrapper" data-text="Select your file!">
                        <input name="file" type="file" class="file-upload-field" value="" required>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
