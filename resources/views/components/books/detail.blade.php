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
        <x-header title="{{ $book['book_name'] }}" :category="$category" />
    </div>

    <div class="container px-3 pt-5">

        <div class="row">
            <div class="col-4">
                <img src="{{ asset('images/book/' . $book['img']) }}" alt="" class="detail-img">
            </div>
            <div class="col-8">
                <div>
                    <p class="h2"> {{ ucfirst($book['book_name']) }}</p>
                    <p style="font-size: var(--size)">Nhà Xuất Bản: {{ $book['pub_id'] }}</p>
                    <p class="h1 price-tag">{{ $book['price'] }} đ</p>
                </div>

                <div>
                    <h4 class="mb-3 mt-4">Số lượng</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex justify-content-start">
                                <div class="input-group w-auto justify-content-start align-items-center">
                                    <input type="button" value="-"
                                        class="button-minus border btn-quantity rounded-circle icon-shape icon-sm mx-1"
                                        data-field="quantity">
                                    <input type="number" step="1" max="10" value="1" name="quantity"
                                        class="quantity-field border text-center w-25">
                                    <input type="button" value="+"
                                        class="button-plus border btn-quantity rounded-circle icon-shape icon-sm"
                                        data-field="quantity">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="row mt-5">
                        <div class="col-3">
                            <button class="btn btn-quantity">
                                &nbsp; <i class="fa-solid fa-credit-card"></i> Mua ngay &nbsp;
                            </button>
                        </div>
                        <div class="col-4">
                            <button class="btn btn-default border border-2">
                                <i class="fa-solid fa-cart-shopping"></i> Thêm vào giỏ
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-4 mb-5">
            <div class="text-white" style="background-color: var(--myBlue); border-color: var(--myBlue);">
                <h4 class="">THÔNG TIN SÁCH</h4>
            </div>
            <div>
                <p>{{ $book['description'] }}</p>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
