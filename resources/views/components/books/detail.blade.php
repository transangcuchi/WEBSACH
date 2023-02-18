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

    <div class="container pt-5">
        <div class="row">
            <div class="col-4">
                <img src="{{ asset('images/book/' . $book['img']) }}" alt="">
            </div>
            <div class="col-8">
                <div>
                    <p class="h2"> {{ Str::ucfirst($book['book_name']) }}</p>
                    <p style="font-size: var(--size)">{{ $book['pub_id'] }}</p>
                    <p class="h1 price-tag">{{ $book['price'] }} đ</p>
                </div>
                <div class="col-4">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <button type="button" class="quantity-right-plus btn btn-default btn-number"
                                data-type="plus" data-field="">
                                <span class="glyphicon glyphicon-plus">+</span>
                            </button>
                        </span>
                        <input type="text" id="quantity" name="quantity" class="form-control input-number"
                            value="10" min="1" max="100">
                        <span class="input-group-btn">
                            <button type="button" class="quantity-left-minus btn btn-default btn-number"
                                data-type="minus" data-field="">
                                <span class="glyphicon glyphicon-minus">-</span>
                            </button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
