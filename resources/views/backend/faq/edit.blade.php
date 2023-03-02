@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'faq');
    @endphp


    <div class="card">
        <h3 class="">Edit Faq </h3>

        <div class="card-body">

            <form action="{{ route('admin.faq.update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="{{ $faq->id }}" name="id">
                <input type="hidden" value="2" name="type">

                <div class="mb-3">
                    <label class="form-label">Question</label>
                    <input type="text" name="title" class="form-control"
                        placeholder="Faq Question"value="{{ $faq->title }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Answer</label>
                    <input type="text" name="detail" class="form-control"
                        placeholder="Faq Answer"value="{{ $faq->detail }}" required>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
@endsection
