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
        <x-header title="Trang Tim Kiem" :category="$category" />
    </div>
    <div class="container">
        <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
            @foreach ($books as $book)
                <div class="col-3 py-3 mb-3 game">
                    <div class="card h-100 border-0">
                        <a href="{{ route('detail', $book['book_id']) }}" data-bs-toggle="tooltip"
                            data-bs-placement="top" title="{{ $book['book_name'] }}">
                            <img class="card-img-top game-img center-img" src="../images/book/{{ $book['img'] }}"
                                alt="..." />
                        </a>
                        <div class="card-body">
                            <div class="text-center">
                                <a class="text-decoration-none text-dark" href="" data-bs-toggle="tooltip"
                                    data-bs-placement="top" title="{{ $book['book_name'] }}">
                                    <p class="">{{ $book['book_name'] }}</p>
                                </a>
                            </div>
                        </div>
                        <div class="text-center d-flex justify-content-center align-items-end">
                            <h5 class="text-danger ">{{ $book['price'] }} đ</h5>
                        </div>
                        <div class="card-footer border-top-0 bg-transparent">
                            {{-- <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">View options</a></div> --}}
                            <div class="align-text-bottom">
                                <div>
                                    <a href="" class="btn btn-outline-primary col-12">
                                        <i class="fa-solid fa-cart-shopping fa-lg"></i> Mua ngay
                                    </a>
                                </div>
                                <div class="pt-2">
                                    <form method="get" action="{{ route('cartuser',$book['book_id']) }}">                       
                                        <button class="btn btn-primary col-12">
                                            <i  class="fa-solid fa-cart-shopping fa-lg"></i> Thêm vào giỏ
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="container text-center d-flex justify-content-center">
        <div class="text-center">
            {{ $books->links() }}
        </div>
    </div>
</body>

</html>
