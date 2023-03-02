@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'review');
    @endphp


    <div class="card">
        <h3>Edit Review</h3>

        <div class="card-body">

            <form action="{{ route('admin.review.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $review->id }}" name="id">


                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" id="" class="form-control" required
                        value="{{ $review->name }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" id="" class="form-control" required
                        value="{{ $review->title }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Position</label>
                    <input type="text" name="position" id="" class="form-control" required
                        value="{{ $review->position }}">
                </div>

                <div class="mb-3">
                    <label class="form-label">Review</label>
                    <input type="text" name="review" value="{{ $review->review }}" class="form-control" required>
                </div>


                <div class="mb-3">
                    <label class="form-label">Star</label>
                    <select name="star" id="" class="form-control">
                        <option value="1" @if ($review->star == 1) selected @endif>1</option>
                        <option value="2" @if ($review->star == 2) selected @endif>2</option>
                        <option value="3" @if ($review->star == 3) selected @endif>3</option>
                        <option value="4" @if ($review->star == 4) selected @endif>4</option>
                        <option value="5" @if ($review->star == 5) selected @endif>5</option>

                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
