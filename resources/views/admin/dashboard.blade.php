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
    <div class="container-fluid p-0">


        <div class="row">
            <div class="col-xl-6 col-xxl-5 d-flex">
                <div class="w-100">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    {{-- Total Sales in a day --}}
                                    @php
                                        $today_total = 0;
                                        $yesterday_total = 0;
                                        
                                        $today = DB::table('orders')
                                            ->whereDay('created_at', today()->day)
                                            ->get();
                                        foreach ($today as $value) {
                                            $today_total += ($value->total * $value->tax) / 100 + $value->total + $value->shipping_charge;
                                        }
                                        // {{-- Total Sales in a yesterday  --}}
                                    @endphp
                                    <div>
                                        <h5 class="card-title ">Today Order</h5>
                                        <h4 class="mt-1 "> <small>{{ __getPriceunit() }}</small>
                                            {{ number_format($today_total, 2) }}</h4>
                                    </div>
                                    <i class="fa fa-baby-carriage text-info"></i>


                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    {{-- Total order in a Month --}}
                                    @php
                                        $today_total = 0;
                                        $yesterday_total = 0;
                                        
                                        $today = DB::table('orders')->get();
                                        foreach ($today as $value) {
                                            $today_total += ($value->total * $value->tax) / 100 + $value->total + $value->shipping_charge;
                                        }
                                        
                                        // {{-- Total order in a a previous  --}}
                                        
                                    @endphp
                                    <div>
                                        <h5 class="card-title ">Total Order</h5>
                                        <h4 class="mt-1 "> <small>{{ __getPriceunit() }}</small>
                                            {{ number_format($today_total, 2) }}</h4>
                                    </div>

                                    <i class=" fa fa-truck text-primary"></i>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body  d-flex justify-content-between align-items-center">
                                    {{-- Total order in a Month --}}
                                    @php
                                        
                                        $order = DB::table('orders')
                                            ->whereDate('created_at', today())
                                            ->get();
                                        
                                    @endphp
                                    <div>
                                        <h5 class="card-title ">Today Order No</h5>
                                        <h4 class="mt-1 "> {{ count($order) }}</h4>
                                    </div>
                                    <i class=" text-success fa fa-envelope"></i>

                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    {{-- Total order in a Month --}}
                                    @php
                                        
                                        $user = DB::table('orders')->get();
                                        
                                    @endphp
                                    <div>
                                        <h5 class="card-title ">Total Orders No</h5>
                                        <h4 class="mt-1 "> {{ count($user) }}</h4>
                                    </div>
                                    <i class=" fa fa-peace text-warning"></i>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    {{-- Total order in a Month --}}
                                    @php
                                        
                                        $today = DB::table('orders')
                                            ->where('status', 3)
                                            ->whereDate('created_at', today())
                                            ->get();
                                        
                                    @endphp
                                    <div>

                                    </div>
                                    <div>
                                        <h5 class="card-title">Today Deliver No</h5>
                                        <h4 class="mt-1 "> <small>
                                                {{ count($today) }}</small></h4>

                                    </div>
                                    <i class="fa fa-truck-moving text-success "></i>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">

                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    {{-- Total order in a Month --}}
                                    @php
                                        
                                        $today = DB::table('orders')
                                            ->where('status', 0)
                                            ->get();
                                        
                                        // {{-- Total order in a a previous  --}}
                                        
                                    @endphp
                                    <div>
                                        <h5 class="card-title ">Pending Order</h5>
                                        <h4 class="mt-1 "> <small>
                                                {{ count($today) }}</small></h4>
                                    </div>

                                    <i class=" fa fa-truck text-danger"></i>
                                </div>
                            </div>



                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    {{-- Total Deliver in a day --}}
                                    @php
                                        $today_total = 0;
                                        $yesterday_total = 0;
                                        
                                        $today = DB::table('orders')
                                            ->where('status', 3)
                                            ->whereDay('created_at', today()->day)
                                            ->get();
                                        foreach ($today as $value) {
                                            $today_total += ($value->total * $value->tax) / 100 + $value->total + $value->shipping_charge;
                                        }
                                        
                                        // {{-- Total Deliver in a yesterday  --}}
                                        
                                    @endphp
                                    <div>
                                        <h5 class="card-title ">Today Deliver</h5>

                                        <h4 class="mt-1 "><small>{{ __getPriceunit() }}
                                                {{ number_format($today_total, 2) }}</small></h4>
                                    </div>
                                    <i class="fa fa-signal text-success"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    {{-- Total order in a Month --}}
                                    @php
                                        $today_total = 0;
                                        
                                        $today = DB::table('orders')
                                            ->where('status', 3)
                                            ->get();
                                        foreach ($today as $value) {
                                            $today_total += ($value->total * $value->tax) / 100 + $value->total + $value->shipping_charge;
                                        }
                                        
                                    @endphp
                                    <div>

                                        <h5 class="card-title ">Total Deliver</h5>
                                        <h4 class="mt-1 "> <small>{{ __getPriceunit() }}
                                                {{ number_format($today_total, 2) }}</small>
                                        </h4>
                                    </div>
                                    <i class="fa fa-calendar-plus text-success "></i>

                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    {{-- Total order in a Month --}}
                                    @php
                                        
                                        $user = DB::table('users')->get();
                                        
                                    @endphp
                                    <div>
                                        <h5 class="card-title ">Total User</h5>
                                        <h1 class="mt-1 ">
                                            <h4 class="mt-1 "> <small>{{ count($user) }}</small>
                                        </h1>
                                        </h4>
                                    </div>

                                    <i class="fa fa-user text-danger"></i>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body d-flex justify-content-between align-items-center">
                                    {{-- Total order in a Month --}}
                                    @php
                                        
                                        $user = DB::table('orders')
                                            ->where('status', 3)
                                            ->get();
                                        
                                    @endphp
                                    <div>
                                        <h5 class="card-title ">Total Deliver No</h5>
                                        <h1 class="mt-1 ">
                                            <h4 class="mt-1 "> <small>{{ count($user) }}</small>
                                        </h1>
                                        </h4>
                                    </div>

                                    <i class="fa fa-truck-moving text-info"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-xxl-7">
                {{-- sales in week --}}
                <div class="card flex-fill w-100">

                    <div class="card-body py-3">
                        <div id="chartContainer1" style="height: 340px; width: 100%;"></div>

                    </div>
                </div>
                <div class="card flex-fill w-100">

                    <div class="card-body py-3">
                        <div id="chartContainer2" style="height: 340px; width: 100%;"></div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 ">
                <div class="card flex-fill w-100">
                    <div id="chartContainer3" style="height: 340px; width: 100%;"></div>

                </div>
            </div>


        </div>
        {{-- Lastest order  --}}
        @php
            $order = DB::table('orders')
                ->orderBy('id', 'desc')
                ->limit(10)
                ->get();
        @endphp


        <div class="row">
            <div class="col-12 col-lg-10 col-xxl-9 offset-md-1">
                <div class="card flex-fill">
                    <div class="card-header">

                        <h5 class="card-title mb-0">Latest Order</h5>
                    </div>
                    <table class="table table-hover my-0">
                        <thead>
                            <tr>
                                <th>Order Id</th>
                                <th class="d-none d-xl-table-cell">Order Date</th>
                                <th class="d-none d-xl-table-cell">Payment Type</th>
                                <th class="d-none d-xl-table-cell">Total({{ __getPriceunit() }})</th>

                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order as $item)
                                @php
                                    $vat = ($item->total * $item->tax) / 100;
                                    
                                @endphp
                                <tr>
                                    <td>{{ $item->tracking_code }}</td>
                                    <td class="d-none d-xl-table-cell">
                                        {{ carbon\carbon::parse($item->created_at)->diffForHumans() }}</td>
                                    <td class="d-none d-xl-table-cell">{{ $item->payment_type }}</td>
                                    <td class="d-none d-xl-table-cell">{{ $item->total + $item->shipping_charge + $vat }}</td>

                                    <td>
                                        @if ($item->status == 0)
                                            <span class="badge bg-danger">Pending</span>
                                        @elseif($item->status == 1)
                                            <span class="badge bg-primary">Processing</span>
                                        @elseif($item->status == 2)
                                            <span class="badge bg-info">Shipping</span>
                                        @elseif($item->status == 3)
                                            <span class="badge bg-success">Deliver</span>
                                        @elseif($item->status == 4)
                                            <span class="badge bg-warning">Cancel</span>
                                        @endif
                                    </td>
                                    <td class="d-none d-md-table-cell"><a
                                            href="{{ route('admin.order.show', ['id' => $item->id]) }}"><i
                                                class="fas fa-eye"></i></a></td>
                                </tr>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
            {{-- <div class="col-12 col-lg-4 col-xxl-3 d-flex">
            <div class="card flex-fill w-100">

                <div class="card-body d-flex w-100">
                    <div id="chartContainer4" style="height: 340px; width: 100%;"></div>

                </div>
            </div>
        </div> --}}
        </div>

    </div>
    <x-weekchart />
@endsection
