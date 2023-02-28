@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'setting');
    @endphp

    <div class="container">
        <div class="card ">
            <div class="">
                <h3 class="d-flex justify-content-between">Banner's Data
                    <a href="{{ route('admin.banner.create') }}" class="btn btn-info btn-lg">Add Banner</a>

                </h3>
            </div>
            <br>
            <div class="card-body">
                <table id="myTable" class="table table-responsive-sm">
                    <thead>
                        <tr>
                            <th>#</th>

                            <th>Banner Image</th>
                            <th>Title</th>
                            <th>Type</th>

                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($banner as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset($item->image) }}" alt="" width="70"></td>
                                <td>{{ $item->title }}</td>
                                <td>
                                    @if ($item->type == 1)
                                        Main banner
                                    @endif

                                    @if ($item->type == 2)
                                        Mid Banner
                                    @endif


                                    @if ($item->type == 3)
                                        About Banner
                                    @endif
                                </td>

                                <td>
                                    @if ($item->status == 1)
                                        <a class="btn btn-success">Active</a>
                                    @else
                                        <a class="btn btn-danger">Deactive</a>
                                    @endif
                                </td>
                                <td>

                                    <a href="{{ route('admin.banner.edit', ['id' => $item->id]) }}"
                                        class="btn btn-primary"><i class="far fa-edit"></i></a>
                                    <a id="delete"
                                        href="{{ route('admin.banner.delete', ['id' => $item->id, 'table' => 'banners']) }}"
                                        class="btn btn-danger"><i class="fas fa-times"></i></a>
                                    @if ($item->status == 1)
                                        <a href="{{ route('admin.banner.deactive', ['id' => $item->id, 'table' => 'banners']) }}"
                                            class="btn btn-primary"><i class="fas fa-thumbs-down"></i></a>
                                    @else
                                        <a href="{{ route('admin.banner.active', ['id' => $item->id, 'table' => 'banners']) }}"
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
