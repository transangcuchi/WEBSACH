<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>admin</title>
    @include('cdn')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body>
    <div>
        <x-sidebar title="Admin" :book="$book" />
        <ul>
            <button type="submit" class="btn btn-primary">Them</button>

            <li>
                <table class="table ">
                    <thead>
                        <tr>
                            <th scope="col">Book_id</th>
                            <th scope="col">Img</th>
                            <th scope="col">Book_name</th>
                            <th scope="col">description</th>
                            <th scope="col">price</th>
                            <th scope="col">pub_id</th>
                            <th scope="col">cat_id</th>
                            <th scope="col" colspan="2"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($book as $item)
                            <tr>
                                <th scope="row">{{ $item['book_id'] }}</th>
                                <td class="card border-0 "> <img class="card-img-top"
                                        src="{{ asset('images/book/' . $item['img']) }}" alt=""></td>
                                <td>{{ $item['book_name'] }}</td>
                                <td>{{ $item['description'] }}</td>
                                <td>{{ $item['price'] }}</td>
                                <td>{{ $item['pub_id'] }}</td>
                                <td>{{ $item['cat_id'] }}</td>
                                <td><button type="submit" class="btn btn-secondary">Sua</button></td>
                                <td><button type="submit" class="btn btn-danger">Xoa</button></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="container text-center d-flex justify-content-center">
                    <div class="text-center">
                        {{ $book->links() }}
                    </div>
                </div>
            </li>
        </ul>

    </div>
</body>
<script src="{{ asset('js/scripts.js') }}"></script>

</html>
