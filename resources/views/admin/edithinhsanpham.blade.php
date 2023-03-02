@extends('admin.layouts.template')
@section('page_title')
Đổi hình sản phẩm
@endsection
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin/</span> Đổi hình sản phẩm</h4>
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Đổi hình sản phẩm mới</h5>
                {{-- <small class="text-muted float-end">Default label</small> --}}
            </div>
            <div class="card-body">
                <form action="{{ route('updatehinhsanpham') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Hình hiện tại</label>
                        <div class="col-sm-10">
                            <img src="{{ asset($thongtinsanpham->img)}}" alt="" height="300px" width="250px" >
                        </div>
                    </div>
                    <input type="hidden" value="{{ $thongtinsanpham->book_id }}" name="id">
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Chọn hình mới</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="file" id="img" name="img" />
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Đổi hình sản phẩm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
