<div class="col-3 py-3 game">
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
</div>
