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
            @foreach ($books as $item)
                <x-books.book-item :book="$item" />
            @endforeach
        </div>
    </div>

    <div class="container text-center d-flex justify-content-center">
        <div class="text-center">
            {{ $books->appends(request()->only('search'))->links() }}
        </div>
    </div>
</body>
</html>
