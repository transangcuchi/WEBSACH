<title>{{ $title }}</title>

<div>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-center">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('index') }}">&nbsp;</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('index') }}"><i class="fa-solid fa-house"></i> Trang Chủ</a>
                    </li>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                    role="button" aria-expanded="false"><i class="fa-solid fa-bars"></i> Thể Loại</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    @foreach ($category as $item)
                                        <li>
                                            <a class="dropdown-item" href="#">{{ $item['cat_name'] }}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>

            <div class="flex-grow-1 d-flex">
                <form class="d-flex form-inline flex-nowrap mx-0 mx-lg-auto p-1" method="GET">
                    <input class="form-control me-2" name="search" type="text" placeholder="Tìm kiếm"
                        aria-label="Search">
                    <button class="btn btn-outline-info" type="submit"><i class="fa-solid fa-magnifying-glass"></i>
                        Tìm</button>
                </form>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?mod=cart"><i class="fa-solid fa-cart-shopping"></i> Giỏ
                            Hàng</a>
                    </li>
                    <li class="nav-item dropdown">
                       
                            @if (!isset($_REQUEST['user']))
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false"><i class="fa-solid fa-user"></i> Tài Khoản</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href=" {{ route('login') }} ">Đăng Nhập</a></li>
                                <li><a class="dropdown-item" href="#">Đăng Ký</a></li>
                            </ul>
                            @else
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false"><i class="fa-solid fa-user"></i> {{ $_REQUEST['user'] }}</a>
                            <ul class="dropdown-menu dropdown-menu-dark">
                                <li><a class="dropdown-item" href=" # ">Thông tin</a></li>
                                <li><a class="dropdown-item" href="#">Đăng xuất</a></li>
                            </ul>
                            @endif
                        
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
