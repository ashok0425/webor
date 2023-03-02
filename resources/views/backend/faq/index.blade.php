@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'faq');
    @endphp
    <div class="container">
        <div class="card ">
            <div class="">
                <h3 class="d-flex justify-content-between">FAQ Data
                    <a href="{{ route('admin.faq.create') }}" class="btn btn-info btn-lg">Add Faq</a>
                </h3>
            </div>
            <br>
            <div class="card-body">
                <table id="myTable" class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Question</th>
                            <th>Answer</th>
                            <th>Status</th>

                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faqs as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->title }}</td>
                                <td>{{ $item->detail }}</td>


                                <td>
                                    @if ($item->status == 1)
                                        <a class="btn btn-success">Active</a>
                                    @else
                                        <a class="btn btn-danger">Deactive</a>
                                    @endif
                                </td>
                                <td>

                                    <a href="{{ route('admin.faq.edit', ['id' => $item->id]) }}" class="btn btn-primary"><i
                                            class="far fa-edit"></i></a>
                                    <a id="delete"
                                        href="{{ route('admin.faq.delete', ['id' => $item->id, 'table' => 'blogs']) }}"
                                        class="btn btn-danger"><i class="fas fa-times"></i></a>
                                    @if ($item->status == 1)
                                        <a href="{{ route('admin.faq.deactive', ['id' => $item->id, 'table' => 'blogs']) }}"
                                            class="btn btn-primary"><i class="fas fa-thumbs-down"></i></a>
                                    @else
                                        <a href="{{ route('admin.faq.active', ['id' => $item->id, 'table' => 'blogs']) }}"
                                            class="btn btn-primary"><i class="fas fa-thumbs-up"></i></a>
                                    @endif


                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
