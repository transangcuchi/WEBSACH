@extends('admin.layouts.template')
@section('page_title')
Sửa sản phẩm
@endsection


@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Admin/</span> Sửa thông tin sản phẩm</h4>
    <div class="text-center">
        @if ($errors->any())
            <div class="text-danger h3 text-lg-start fw-bold">
                Something went wrong...
            </div>
            <ul class="list-group list-unstyled">
                @foreach ($errors->all() as $item)
                    <li class="alert alert-danger">{{ $item }}</li>
                @endforeach
            </ul>
        @endif
    </div>
    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Sửa thông tin sản phẩm mới</h5>
                {{-- <small class="text-muted float-end">Default label</small> --}}
            </div>
            <div class="card-body">
                <form action="{{ route('updatesanpham') }}" method="POST">
                    @csrf
                    <input type="hidden" value="{{ $thongtinsanpham->book_id }}" name="id" />
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">ID</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="book_id" name="book_id"
                                value="{{ $thongtinsanpham->book_id }}" readonly/>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Tên sách</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="book_name" name="book_name"
                            value="{{ $thongtinsanpham->book_name }}" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Mô tả</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" name="description" id="description" cols="30" rows="10" >{{ $thongtinsanpham->description }}</textarea>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Chọn loại sách</label>
                        <div class="col-sm-10">

                            <select class="form-select" id="cat_id" name="cat_id"
                                aria-label="Default select example">
                                <option>Chọn loại sản phẩm</option>
                                @foreach ($loais as $loai)
                                    <option value="{{ $loai->cat_id }}">{{ $loai->cat_name }}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Chọn nhà xuất bản</label>
                        <div class="col-sm-10">
                            <select class="form-select" id="pub_id" name="pub_id"
                                aria-label="Default select example">
                                <option>Chọn loại sản phẩm</option>
                                @foreach ($loaipubs as $loai)
                                    <option value="{{ $loai->pub_id }}">{{ $loai->pub_name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Giá</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="price" name="price"
                            value="{{ $thongtinsanpham->price }}" />
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Sửa thông tin sản phẩm</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
