@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'partner');
    @endphp


    <div class="card">
        <h3>Edit Outlook</h3>

        <div class="card-body">

            <form action="{{ route('admin.time.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $outlook->id }}" name="id">
                <input type="hidden" value="2" name="type">

                <div class="mb-3">
                    <label class="form-label">Image</label>
                    <div class="file-upload-wrapper" data-text="Select your file!">
                        <input name="file" type="file" class="file-upload-field" value="">
                    </div>
                    <img src="{{ asset($outlook->image) }}" width="70" alt="">
                </div>
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" id="" class="form-control" required
                        value="{{ $outlook->name }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Review</label>
                    <input type="text" name="review" id="" class="form-control" required
                        value="{{ $outlook->review }}">
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
