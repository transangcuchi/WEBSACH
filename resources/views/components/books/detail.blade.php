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
                
                    <div class="row mt-5">
                        <div class="col-3">
                            <button class="btn btn-quantity">
                                &nbsp; <i class="fa-solid fa-credit-card"></i> Mua ngay &nbsp;
                            </button>
                        </div>
                        
                        <div class="col-4">    
                            <form method="get" action="{{ route('cartuser',$book['book_id']) }}">                       
                            <button class="btn btn-default border border-2">
                                <i  class="fa-solid fa-cart-shopping"></i> Thêm vào giỏ
                            </button>
                        </form>
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
