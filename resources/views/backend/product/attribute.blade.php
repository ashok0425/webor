@extends('admin.master')
@section('main-content')
    @php
        define('PAGE', 'product');
    @endphp

    <div class="container">
        <h2>Product Attributes</h2>

        <div class="card ">
            <div class='row'>
                <div class="col-md-6 border-right">
                    <h3 class="d-flex justify-content-between">
                        <span>More Image</span>
                        <a href="{{ route('admin.color.create', ['id' => $pid]) }}" class="btn btn-info btn-lg">Add
                            New</a>
                    </h3>
                    <br>
                    <div class="card-body">
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Image</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($color as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td> <img src="{{ asset($item->image) }}" width="80" alt=""></td>

                                        <td>

                                            <a href="{{ route('admin.color.edit', ['id' => $item->id]) }}"
                                                class="btn btn-primary"><i class="far fa-edit"></i></a>
                                            <a id="delete"
                                                href="{{ route('admin.color.delete', ['id' => $item->id, 'table' => 'productcolors']) }}"
                                                class="btn btn-danger"><i class="fas fa-times"></i></a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <h3 class="d-flex justify-content-between">
                        <span>Product Size</span>
                        <a href="{{ route('admin.variation.create', ['id' => $pid]) }}" class="btn btn-info btn-lg">Add
                            Size</a>
                    </h3>
                    <br>
                    <div class="card-body">
                        <table class="table table-responsive-sm">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Size</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($variation as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->variation }}

                                        </td>

                                        <td>

                                            <a href="{{ route('admin.variation.edit', ['id' => $item->id]) }}"
                                                class="btn btn-primary"><i class="far fa-edit"></i></a>
                                            <a id="delete"
                                                href="{{ route('admin.variation.delete', ['id' => $item->id, 'table' => 'productvariations']) }}"
                                                class="btn btn-danger"><i class="fas fa-times"></i></a>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
