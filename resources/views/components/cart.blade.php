<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('cdn')


    <div>
        <x-header title="Giỏ hàng" :category="$category" />
    </div>
</head>

<body>
    @unless ($books ==null)
    <div class="container">
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
                                <td>
                                    <form action="{{ route('editcart',$item['book_id']) }}" method="get">
                                        <button type="submit" class="btn btn-danger">Xóa</button></td>
                                    </form>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
        </div>
        <a href='{{ route('index') }}' class='btn btn-success'>Thanh Toán</a> |
        <a href='{{ route("index") }}' class='btn btn-info'>Tiếp tục mua</a> |
         <a  onclick='clearsession()' class='btn btn-danger'>Xóa giỏ hàng</a>
    </div>
    @endunless ()
    @if ($books==null)
        <h1 class="text-center">Bạn chưa mua gì!</h1>
    @endif

</body>
<script>
    function thanhtoan() {
        alert("Thanh toán thành công");
    }
    function clearsession() {

        alert("Xóa thành công");
        window.location.href='{{ route("destroy") }}';
    }
</script>

</html>
<!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
