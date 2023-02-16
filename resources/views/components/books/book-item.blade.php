{{-- <div class="col-3 py-3 game">
    <img src="images/book/{{ $book['img'] }}" alt="" class="card-img-top game-img center-img">
    <div class="card-body text-center">
        <h5 class='card-title'>{{ $book['book_name'] }}</h5>
        <p class='card-text'>{{ $book['price'] }} đ</p>
    </div>
    <div class="align-text-bottom">
        <div>
            <a href="" class="btn btn-outline-primary col-12">
                <i class="fa-solid fa-cart-shopping fa-lg"></i> Mua ngay
            </a>
        </div>
        <div class="pt-2">
            <a href="{{ route('detail', $book['book_id']) }}" class="btn btn-primary col-12">
                Thông tin chi tiết
            </a>
        </div>
    </div>
</div> --}}

<div class="col-3 py-3 mb-3 game">
    <div class="card h-100 border-0">
        <img class="card-img-top game-img center-img" src="images/book/{{ $book['img'] }}" alt="..." />
        <div class="card-body">
            <div class="text-center">
                <p class="">{{ $book['book_name'] }}</p>
            </div>
            <div class="text-center d-flex justify-content-center align-items-end">
                <h5 class="text-danger ">{{ $book['price'] }} đ</h5>
            </div>
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
                    <a href="{{ route('detail', $book['book_id']) }}" class="btn btn-primary col-12">
                        Thông tin chi tiết
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
