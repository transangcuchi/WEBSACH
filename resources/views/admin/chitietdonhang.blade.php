@extends('admin.layouts.template')
@section('page_title')
    Chi tiết đơn hàng
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin/</span> Chi tiết đơn hàng</h4>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card">
            <h5 class="card-header">Chi tiết đơn hàng</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Mã sách</th>
                            <th>Giá</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->order_id}}</td>
                                <td>{{ $order->book_id }}</td>
                                <td>{{ $order->price }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
