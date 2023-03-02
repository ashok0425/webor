@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'review');
    @endphp


    <div class="card">
        <h3>Add Review</h3>

        <div class="card-body">

            <form action="{{ route('admin.review.store') }}" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input type="text" name="name" id="" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input type="text" name="title" id="" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Position</label>
                    <input type="text" name="position" id="" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Review</label>
                    <input type="text" name="review" id="" class="form-control" required>
                </div>


                <div class="mb-3">
                    <label class="form-label">Star</label>
                    <select name="star" id="" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>

                    </select>
                </div>

                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
