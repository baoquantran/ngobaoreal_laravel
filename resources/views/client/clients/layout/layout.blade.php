<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('tieudetrang')</title>
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

<body>
    <div class="bg-white p-0" style="background-color: #fff;">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar Start -->
        @include('client.clients.include.menu')
        <!-- Navbar End -->


        <!-- Header Start -->

        <!-- Header End -->
        @yield('noidung')
        <!-- Footer Start -->
        @include('client.clients.include.footer')
        <!-- Footer End -->

        <!-- cotact -->
        <div class="call-now-button">
            <div>
                <p class="call-text"><a href="tel:0339321355" title="0903 412 411">0339 321 355</a></p>
                <a href="tel:0339321355" title="0339321355">
                    <div class="quick-alo-ph-circle"></div>
                    <div class="quick-alo-ph-circle-fill"></div>
                    <div class="quick-alo-ph-btn-icon quick-alo-phone-img-circle">
                        <i class="bi bi-telephone"></i>
                    </div>
                </a>
            </div>
        </div>
        <div class="call-now-button bg-warning" style="margin-bottom: 70px;">
            <div>
                <p class="call-text"><a href="tel:0339321355" data-bs-toggle="modal" data-bs-target="#banggia">Nhận báo
                        giá</a></p>
                <a href="tel:0339321355" title="0339321355" data-bs-toggle="modal" data-bs-target="#banggia">
                    <div class="quick-alo-ph-circle"></div>
                    <div class="quick-alo-ph-circle-fill"></div>
                    <div class="quick-alo-ph-btn-icon quick-alo-phone-img-circle">
                        <i class="fa-solid fa-table-list bg-warning"></i>
                    </div>
                </a>
            </div>
        </div>
        <!-- end contact -->
        <!-- banggia -->
        <div class=" modal banggia-container fade" id="banggia" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content banggia">
                    <div class="modal-header bg-primary">
                        <h5 class="modal-title text-white" id="exampleModalLabel">Để lại thông tin liên hệ cho chúng tôi
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body row p-4">
                        <div class="col-md-6 col-12">
                            <img src="https://www.vinhomeland.com.vn/wp-content/uploads/2016/12/vinhomes.jpg"
                                width="100%" alt="">
                        </div>
                        <form class="col-md-6 col-12" id="myForm" method="post"
                            action="{{ route('baogia.store') }}">
                            @csrf
                            <h3 class="text-center">Bảng giá</h3>
                            <p class="text-center">VÀ NHẬN THÔNG TIN TƯ VẤN MỚI NHẤT</p>
                            <p class="text-center">* Hệ thống sẽ tự động gửi bảng giá & CSBH chi tiết qua Zalo & Email
                                của quý khách sau 2 phút. Vui lòng kiểm tra chính xác thông tin trước khi gửi!</p>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="name"
                                    placeholder="Nhập họ & tên">
                            </div>
                            <div class="mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Nhập Email">
                            </div>
                            <div class="mb-3">
                                <input type="text" class="form-control" name="phone"
                                    placeholder="Nhập Số điện thoại">
                            </div>
                            <div class="mb-3">
                                <textarea class="form-control" name="note" placeholder="Để lại lời nhắn"></textarea>
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Tôi chấp nhận cho website lưu
                                    thông tin của tôi</label>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary"
                                    data-bs-dismiss="modal">Đóng</button>
                                <button type="submit" class="btn btn-primary" id="liveToastBtn">Lưu</button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
        <div style="z-index: 9999;" class="toast-container position-fixed bottom-0 end-0  mx-1 my-5 border-0">
            <div id="liveToast" class="toast text-bg-success" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="d-flex justify-content-between p-3">
                    <div class="text-bg-success">
                        Gửi thông tin thành công !
                    </div>
                    <div class="">
                        <button type="button" class="btn-close" data-bs-dismiss="toast"
                            aria-label="Close"></button>
                    </div>
                </div>
            </div>
        </div>
        <!-- end-bangia -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        <!-- End back to Top -->
    </div>
    <script>
        $(document).ready(function() {
            // Xử lý khi gửi form thành công và hiện thông báo toasts
            $('#liveToast').on('shown.bs.toast', function() {
                // Đóng tab có id= banggia
                $('#banggia').modal('hide');

                // Xóa hết value trong input
                $('#myForm input').val('');
            });

            // Xử lý khi đóng toasts
            $('#liveToast').on('hidden.bs.toast', function() {
                // Đóng tab có id= banggia
                $('#banggia').modal('hide');

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
