@extends('admin.master')
@section('content')
    <style>
        .card {
            border: 0;
            border-radius: 0;
            font-size: 14px;
        }

        .fa {
            font-size: 2.8rem;
        }
    </style>
    @php
        define('PAGE', 'dashboard');
    @endphp
@endsection
