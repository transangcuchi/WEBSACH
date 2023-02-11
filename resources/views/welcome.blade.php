@extends('layouts')

@section('content')
    <div class='container'>
        <h3 class='text-center'></h3>
        <div class="row">
            @foreach ($book as $item)
                <div class="col-3 py-3 game">
                    <div class="center">
                        <a href="#"><img src="images/{{ $item['img'] }}" alt=""
                                class="card-img-top game-img"></a>
                    </div>
                    <div class="card-body text-center">
                        <h5 class='card-title'>{{ $item['book_name'] }}</h5>
                        <p class='card-text'>{{ $item['price'] }} đ</p>
                    </div>
                    <a href="#" class="btn btn-outline-primary col-12">
                        <i class="fa-solid fa-cart-shopping fa-lg">
                        </i>
                        Mua ngay
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
