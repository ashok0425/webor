@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'review');
    @endphp

    <div class="container">
        <div class="card ">
            <h3 class="d-flex justify-content-between">
                <span>Review's Data</span>
                <a href="{{ route('admin.review.create') }}" class="btn btn-info btn-lg">Add New</a>
            </h3>
            <br>
            <div class="card-body">
                <table id="myTable" class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Post</th>

                            <th>Review</th>

                            <th>Status</th>

                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($coupon as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>

                                    {{ $item->name }}
                                </td>

                                <td>

                                    {{ $item->position }}
                                </td>
                                <td>

                                    {{ $item->review }}
                                </td>
                                <td>
                                    @if ($item->status == 1)
                                        <a class="badge bg-success">Active</a>
                                    @else
                                        <a class="badge bg-danger">Deactive</a>
                                    @endif
                                </td>
                                <td>

                                    <a href="{{ route('admin.review.edit', ['id' => $item->id]) }}"
                                        class="btn btn-primary"><i class="far fa-edit"></i></a>
                                    <a id="delete"
                                        href="{{ route('admin.review.delete', ['id' => $item->id, 'table' => 'times']) }}"
                                        class="btn btn-danger"><i class="fas fa-times"></i></a>
                                    @if ($item->status == 1)
                                        <a href="{{ route('admin.review.deactive', ['id' => $item->id, 'table' => 'times']) }}"
                                            class="btn btn-primary"><i class="fas fa-thumbs-down"></i></a>
                                    @else
                                        <a href="{{ route('admin.review.active', ['id' => $item->id, 'table' => 'times']) }}"
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
