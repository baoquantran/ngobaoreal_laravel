<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('tieudetrangpd')</title>
    <link rel="icon" href="/user/img/ngobaoreal.vn2.png" class="w-100">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Favicon -->
    <link href="//user/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Varela+Round|Dancing+Script|Alegreya+Sans|Amatic+SC|Josefin+Sans|Quicksand|Poiret+One|Nunito|Cinzel|Montserrat"
        rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/user/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/user/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/user/css/style.css" rel="stylesheet">

    <!-- facebook -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v18.0"
        nonce="OV0XQEZx"></script>
</head>

<body class="bg-white">
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="">
        <div class="menu ">
            <nav class="navbar navbar-expand-lg thanh-dieu-huong" id="thanhDieuHuong">
                <a href="index.html">
                    <div class="navbar-brand ms-5">
                        <img src="/user/img/ngobaoreal.png" alt="" width="120px">
                    </div>
                </a>
                <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menuChinh"
                    aria-controls="menuChinh" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"><i class="fa-solid fa-caret-down"></i></span>
                </div>
                <div class="collapse navbar-collapse" id="menuChinh">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item p-2">
                            <a class="nav-link text-menu text-white" href="index.html">Trang chủ</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-menu text-white" href="#tongquan" id="linktongquan">TỔNG QUAN dự án</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-menu text-white" href="#vitri" id="linkvitri"> Vị trí</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-menu text-white" href="#tienich" id="linktienich"> Tiện ích</a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-menu text-white" href="#matbang" id="linkmatbang"> Thanh toán </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-menu text-white" href="#thanhtoan" id="linkthanhtoan"> Thanh toán </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-menu text-white" href="#lienhe" id="linklienhe"> liên hệ </a>
                        </li>
                        <li class="nav-item p-2">
                            <a class="nav-link text-menu text-white" href="/ky-gui">Ký gửi</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <!-- Hiển thị form nằm ngang dưới thanh điều hướng -->
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Header Start -->

    <!-- Header End -->

    <!-- kygui -->
    <!-- masteries-img -->
    <!-- endmasteries-img -->

    <!-- noidung -->
    @yield('noidungpd')
    <!-- endnoidung -->
    @include('client.clients.include.footer')
    <script>
        $(document).ready(function() {
            // Xử lý khi gửi form thành công và hiện thông báo toasts
            $('#liveToast').on('shown.bs.toast', function() {
                // Đóng tab có id= banggia
                $('#banggia').modal('hide');
                $('#tuvan').modal('hide');

                // Xóa hết value trong input
                $('#myForm input').val('');
            });

            // Xử lý khi đóng toasts
            $('#liveToast').on('hidden.bs.toast', function() {
                // Đóng tab có id= banggia
                $('#banggia').modal('hide');
                $('#tuvan').modal('hide');

                // Xóa hết value trong input
                $('#myForm input').val('');
            });

            // Xử lý khi submit form
            $('#myForm').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    url: '{{ route('baogia.store') }}',
                    data: $(this).serialize(),
                    success: function(response) {
                        if (response.success) {
                            var toast = new bootstrap.Toast(document.getElementById(
                                'liveToast'));
                            $('#banggia').modal('hide');
                            setTimeout(function() {
                                window.location.href = '/';
                            }, 1300);
                            toast.show();
                        } else {
                            // Hiển thị toasts lỗi nếu có lỗi
                            alert('Lỗi khi gửi thông tin: ' + response.message);
                        }
                    },
                    error: function(error) {
                        console.log(error);
                    }
                });
            });
        });
    </script>



    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/user/lib/wow/wow.min.js"></script>
    <script src="/user/lib/easing/easing.min.js"></script>
    <script src="/user/lib/waypoints/waypoints.min.js"></script>
    <script src="/user/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/user/js/main.js"></script>
    {{-- <script src="/user/js/bt5.js"></script> --}}
</body>

</html>