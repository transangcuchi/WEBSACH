@extends('admin.layouts.template')
@section('page_title')
    Đơn hàng
@endsection
@section('content')
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin/</span> Đơn hàng</h4>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <div class="card">
            <h5 class="card-header">Đơn hàng</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Email</th>
                            <th>Ngày đặt hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Địa chỉ</th>
                            <th>Số điện thoại</th>
                            <th>Active</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($orders as $order)
                            <tr>
                                <td>{{ $order->order_id}}</td>
                                <td>{{ $order->email }}</td>
                                <td>{{ $order->order_date }}</td>
                                <td>{{ $order->consignee_name }}</td>
                                <td>{{ $order->consignee_add }}</td>
                                <td>{{ $order->consignee_phone }}</td>
                                <td>
                                    <a href="{{ route('xoadonhang', $order->order_id) }}" class="btn btn-danger">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
