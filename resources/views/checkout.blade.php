<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('cdn')


</head>

<body>
    <div>
        <x-header title="Trang Chủ" :category="$category" />
    </div>
    <div class="col-xxl">
        <div class="card mb-4 container">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Thanh toán</h5>
                {{-- <small class="text-muted float-end">Default label</small> --}}
            </div>
            <div class="card-body">
                <div class="row">
                    <table class="table ">
                        <thead>
                            <tr>
                                <th scope="col">Tên sách</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th scope="col" ></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $item)
                                <tr>
                                    <td>{{ $item['book_name'] }}</td>
                                    <td>{{ $item['price'] }}</td>
                                    <td>{{ $item['sl'] }}</td>
                                </tr>
                            @endforeach

                        </tbody>
                    </table>
                </div>
                <form action="{{ route('storedonhang') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @foreach ($books as $item)
                        <input type="hidden" name="book_id" id="book_id" value="{{ $item->book_id }}">
                        <input type="hidden" name="price" id="price" value="{{ $item->price }}">
                    @endforeach
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="email" name="email"
                                placeholder="email" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Họ tên</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="consignee_name" name="consignee_name"
                                placeholder="họ tên" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Địa chỉ</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="consignee_add" name="consignee_add"
                                placeholder="địa chỉ" />
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-default-name">Phone</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="consignee_phone" name="consignee_phone"
                                placeholder="số điện thoại" />
                        </div>
                    </div>
                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Thanh toán</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
