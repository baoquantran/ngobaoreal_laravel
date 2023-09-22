<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('tieudetrang')</title>
    <link rel="icon" href="/user/img/ngobaoreal.vn2.png" class="w-100">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <!-- Favicon -->
    <link href="//user/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round|Dancing+Script|Alegreya+Sans|Amatic+SC|Josefin+Sans|Quicksand|Poiret+One|Nunito|Cinzel|Montserrat" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/user/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/user/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/user/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/user/css/style.css" rel="stylesheet">
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
        @include('user.menu')
        <!-- Navbar End -->

        
        <!-- Header Start -->
        
        <!-- Header End -->
        @yield('noidung')
        <!-- Footer Start -->
        <div class="container-fluid bg-dark text-white-50 footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="d-grid text-center justify-content-center mb-5">
                    <p>CHUYÊN GIA ĐẦU TƯ VÀ PHÁT TRỄN BẤT ĐỘNG SẢN.</p>
                    <div class="d-flex justify-content-center">
                        <img src="/user/img/ngo-bao-real-color-logo (1).png" width="150px" alt="">
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6">
                        <h5 class="text-light mb-4">Ngô Bảo Real</h5>
                        <p class="mb-2">Nơi sản phẩm Bất động sản xứng tầm giá trị được tìm thấy. Bảo chỉnh chu trong từng chi tiết công việc và đồng hành cùng quý khách để đảm bảo giá trị được bền vững xuyên suốt vòng đời sản phẩm.</p>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Dự án</h5>
                        <a class="btn btn-link text-white-50" href="">The MarQ</a>
                        <a class="btn btn-link text-white-50" href="">Thủ thiêm Zeit River</a>
                        <a class="btn btn-link text-white-50" href="">The Global City</a>
                        <a class="btn btn-link text-white-50" href="">Lumiere Boulevard</a>
                        <a class="btn btn-link text-white-50" href="">Masteri Centre Point</a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <h5 class="text-white mb-4">Vị trí</h5>
                        <a class="btn btn-link text-white-50" href="">Trung Tâm</a>
                        <a class="btn btn-link text-white-50" href="">Khu Thủ Thiêm</a>
                        <a class="btn btn-link text-white-50" href="">TP. Thủ Đức (Q2)</a>
                        <a class="btn btn-link text-white-50" href="">TP. Thủ Đức (Q9)</a>
                        <a class="btn btn-link text-white-50" href="">Biển Hồ Tràm</a>
                    </div>
                    <div class="col-lg-2 col-md-6">
                        <h5 class="text-white mb-4">Liên hệ</h5>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.tiktok.com/@ngobaorealty"><i class="fa-brands fa-tiktok"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/ngobaoreal"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.instagram.com/ngobaoreal/"><i class="fa-brands fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-12 text-center text-md-start mb-3 mb-md-0 d-flex justify-content-center">
                            &copy; <a class="border-bottom" href="#">Ngobaoreal.vn</a>, All Right Reserved.

                            <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                            Designed By <a class="border-bottom" href="https://www.facebook.com/ku.396/">baoquantran</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
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
                <p class="call-text"><a href="tel:0339321355" data-bs-toggle="modal" data-bs-target="#banggia">Nhận báo giá</a></p>
                <a href="tel:0339321355"  title="0339321355" data-bs-toggle="modal" data-bs-target="#banggia">
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
        <div class=" modal banggia-container fade" id="banggia" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
              <div class="modal-content banggia">
                <div class="modal-header bg-primary">
                  <h5 class="modal-title text-white" id="exampleModalLabel">Để lại thông tin liên hệ cho chúng tôi</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body row p-4">
                    <div class="col-md-6 col-12">
                        <img src="https://www.vinhomeland.com.vn/wp-content/uploads/2016/12/vinhomes.jpg" width="100%" alt="">
                    </div>
                    <form class="col-md-6 col-12">
                        <h3 class="text-center">Bảng giá</h3>
                        <p class="text-center">VÀ NHẬN THÔNG TIN TƯ VẤN MỚI NHẤT</p>
                        <p class="text-center">* Hệ thống sẽ tự động gửi bảng giá & CSBH chi tiết qua Zalo & Email của quý khách sau 2 phút. Vui lòng kiểm tra chính xác thông tin trước khi gửi!</p>
                        <div class="mb-3">
                          <input type="text" class="form-control" placeholder="Nhập Họ">
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nhập tên">
                          </div>
                          <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Nhập Email">
                          </div>
                          <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nhập Số điện thoại">
                          </div>
                          <div class="mb-3">
                            <textarea name="" class="form-control" placeholder="Để lại lời nhắn"></textarea>
                          </div>
                        <div class="mb-3 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label" for="exampleCheck1">Tôi chấp nhân cho website lưu thông tin của tôi</label>
                        </div>
                        
                      </form>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
              </div>
            </div>
          </div>
        <!-- end-bangia -->
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
        <!-- End back to Top -->
    </div>

    <!-- JavaScript Libraries -->
    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/user/lib/wow/wow.min.js"></script>
    <script src="/user/lib/easing/easing.min.js"></script>
    <script src="/user/lib/waypoints/waypoints.min.js"></script>
    <script src="/user/lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="/user/js/main.js"></script>
</body>

</html>