@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'faq');
    @endphp

    <div class="card">
        <h3 class="">Create FAQ</h3>

        <div class="card-body">

            <form action="{{ route('admin.faq.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" value="2" name="type">

                <div class="mb-3">
                    <label class="form-label">Question</label>
                    <input type="text" name="title" class="form-control"
                        placeholder="Faq Question"value="{{ old('title') }}" required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Answer</label>
                    <input type="text" name="detail" class="form-control"
                        placeholder="Faq Answer"value="{{ old('detail') }}" required>
                </div>



                <button type="submit" class="btn btn-primary">Add</button>
            </form>
        </div>
    </div>
@endsection
