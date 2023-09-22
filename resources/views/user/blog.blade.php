@extends('user.layout')
@section('tieudetrang')

@endsection
@section('noidung')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
            <div class="col-md-6 p-5 mt-lg-5">
                <h1 class="display-5 animated fadeIn mb-4">Ngô Bảo Real bài viết</h1>
                <nav aria-label="breadcrumb animated fadeIn">
                    <ol class="breadcrumb text-uppercase">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item text-body active" aria-current="page">Bài viết</li>
                    </ol>
                </nav>
            </div>
            <div class="col-md-6 animated fadeIn">
                <img class="img-fluid" src="/user/img/ngobao6.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- Header End -->
    <!-- baivietnoibat -->
    <div class="text-center mx-auto mt-5 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-3">Bài viết nổi bật</h1>
        <p>Chúng tôi có một đội ngủ quản lý nhiệt tình và kỹ năng, luôn sẵn sàng hỗ trợ và quản lý tốt mọi vấn đề.</p>
    </div>
    <div class="container-xxl py-5">
        <div class="container hot">
            <div class="row g-5 align-items-center d-flex">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="/user/img/about.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Trải nghiệm một ngày tại The MarQ District 1 tại trung tâm TP.HCM</h1>
                    <p class="mb-4">The MarQ District 1 là một dự án căn hộ chất lượng tại trung tâm Quận 1, thành phố
                        Hồ Chí Minh. Với vị trí đắc địa và tiện ích hiện đại, nơi đây hứa hẹn mang đến trải nghiệm sống
                        hoàn hảo cho cư dân và du khách. Tôi đã có cơ hội trải nghiệm một ngày tại đây và dưới đây là
                        chia sẻ của tôi.</p>

                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Đọc thêm</a>
                </div>
            </div>
            <div class="row g-5 align-items-center d-flex">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="/user/img/about.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Trải nghiệm một ngày tại The MarQ District 1 tại trung tâm TP.HCM</h1>
                    <p class="mb-4">The MarQ District 1 là một dự án căn hộ chất lượng tại trung tâm Quận 1, thành phố
                        Hồ Chí Minh. Với vị trí đắc địa và tiện ích hiện đại, nơi đây hứa hẹn mang đến trải nghiệm sống
                        hoàn hảo cho cư dân và du khách. Tôi đã có cơ hội trải nghiệm một ngày tại đây và dưới đây là
                        chia sẻ của tôi.</p>

                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Đọc thêm</a>
                </div>
            </div>
            <div class="row g-5 align-items-center d-flex">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="/user/img/about.jpg">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Trải nghiệm một ngày tại The MarQ District 1 tại trung tâm TP.HCM</h1>
                    <p class="mb-4">The MarQ District 1 là một dự án căn hộ chất lượng tại trung tâm Quận 1, thành phố
                        Hồ Chí Minh. Với vị trí đắc địa và tiện ích hiện đại, nơi đây hứa hẹn mang đến trải nghiệm sống
                        hoàn hảo cho cư dân và du khách. Tôi đã có cơ hội trải nghiệm một ngày tại đây và dưới đây là
                        chia sẻ của tôi.</p>

                    <a class="btn btn-primary py-3 px-5 mt-3" href="">Đọc thêm</a>
                </div>
            </div>
        </div>
    </div>
    <!-- dongbaivietnoibat -->
    <!-- bai viet -->
    <div class="container-fluid mb-5 p-4 justify-content-center wow fadeIn mt-5 row ps-5" data-wow-delay="0.1s"style="padding: 35px;">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">TIN TỨC</h1>
        </div>
        <div class="news container">
            <!-- baivietphobien -->
            <div class="danhmucbaiviet row" id="bvphobien">
                <div class="row g-0 gx-5 align-items-end mt-5">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h3 class="mb-3 text-light">Tin phổ biến</h3>
                        </div>
                    </div>
                </div>
                <div class="container col-md-3 order-md-2 fixed-category">
                    <div class="danhmucbaiviets">
                        <h2 class="text-center mt-3">Liên hệ với Bảo</h2>
                        <hr>
                        <div class="d-flex justify-content-center">
                            <a href="tel:+84 0339321355">
                            <img src="/user/img/hotline.jpg" width="200px" class="" alt="">
                            </a>
                        </div>
                        <!-- Cột bên phải chứa danh mục -->
                        <h2 class="text-center mt-3">Danh mục bài viết</h2>
                        <hr>
                        <ul>
                            <li><a href="blog.html#bvphobien" id="phobien">Bài viết phổ biến nhất</a></li>
                            <hr>
                            <li><a href="#bvtintuc" id="tintuc">Bài viết về tin tức</a></li>
                            <hr>
                            <li><a href="#bvkinhnghiemdautu" id="kinhnghiemdautu">Bài viết về kinh nghiệm đầu tư</a></li>
                            <hr>
                            <li><a href="#bvchuyendautu" id="chuyendautu">Bài viết về chuyện đầu tư</a></li>
                            <hr>
                            <li><a href="#bvfile" id="file">File báo cáo thị trường</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 order-md-1">
                    <!-- Bài viết 1 -->
                    <div class="baiviet-don row">
                        <div class="anhbaiviet col-md-4">
                            <!-- Cột bên trái chứa ảnh -->
                            <img src="https://media.vneconomy.vn/w800/images/upload/2022/11/16/56c99f14-2861-4dc2-ae06-3c04c8b22a63.jpg"
                                alt="Ảnh bài viết 1" class="img-fluid">
                            <span class="badge badge-primary">Tin tức</span>
                        </div>

                        <div class="col-md-8">
                            <!-- Cột bên phải chứa tiêu đề, ngày đăng và nội dung bài viết -->
                            <h4><a class="text-dark" href="blog-single.html">Tiêu đề bài viết 1</a></h4>
                            <p>Ngày đăng: 16 tháng 09, 2023</p>
                            <p>Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                                Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                            </p>
                            <a href="blog-single.html" class="btn btn-primary"> Đọc thêm</a>
                        </div>
                    </div>

                    <!-- Bài viết 1 -->
                    <div class="baiviet-don row">
                        <div class="anhbaiviet col-md-4">
                            <!-- Cột bên trái chứa ảnh -->
                            <img src="https://thanhtra.com.vn/data/images/0/2021/12/21/nghiemlan/lam-phat-bat-dong-san.jpg"
                                alt="Ảnh bài viết 1" class="img-fluid">
                            <span class="badge badge-primary">Kinh nghiệm đầu tư</span>
                        </div>
                        <div class="col-md-8">
                            <!-- Cột bên phải chứa tiêu đề, ngày đăng và nội dung bài viết -->
                            <h4><a class="text-dark" href="blog-single.html">Tiêu đề bài viết 1</a></h4>
                            <p>Ngày đăng: 16 tháng 09, 2023</p>
                            <p>Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                                Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                            </p>
                            <a href="blog-single.html" class="btn btn-primary"> Đọc thêm</a>
                        </div>
                    </div>
                    <!-- Bài viết 1 -->
                    <div class="baiviet-don row">
                        <div class="anhbaiviet col-md-4">
                            <!-- Cột bên trái chứa ảnh -->
                            <img src="https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2020/10/18/846390/Dau-Tu-Bat-Dong-San.jpg"
                                alt="Ảnh bài viết 1" class="img-fluid">
                            <span class="badge badge-primary">Chuyện đầu tư</span>

                        </div>
                        <div class="col-md-8">
                            <!-- Cột bên phải chứa tiêu đề, ngày đăng và nội dung bài viết -->
                            <h4><a class="text-dark" href="blog-single.html">Tiêu đề bài viết 1</a></h4>
                            <p>Ngày đăng: 16 tháng 09, 2023</p>
                            <p>Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                                Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                            </p>
                            <a href="blog-single.html" class="btn btn-primary"> Đọc thêm</a>
                        </div>
                    </div>
                    <!-- Bài viết 1 -->
                    <div class="baiviet-don row">
                        <div class="anhbaiviet col-md-4">
                            <!-- Cột bên trái chứa ảnh -->
                            <img src="https://xdcs.cdnchinhphu.vn/446259493575335936/2023/2/24/chinh-sach-moi-anh-huong-den-thi-truong-bat-dong-san1602162451-16772104701281575851658.png"
                                alt="Ảnh bài viết 1" class="img-fluid">
                            <span class="badge badge-primary">Flie báo cáo thị trường</span>
                        </div>
                        <div class="col-md-8">
                            <!-- Cột bên phải chứa tiêu đề, ngày đăng và nội dung bài viết -->
                            <h4><a class="text-dark" href="blog-single.html">Tiêu đề bài viết 1</a></h4>
                            <p>Ngày đăng: 16 tháng 09, 2023</p>
                            <p>Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                                Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                            </p>
                            <a href="blog-single.html" class="btn btn-primary"> Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- -----------------------tintuc--------------------------- -->
            <div class="danhmucbaiviett" id="bvtintuc">
                <div class="row g-0 gx-5 align-items-end mt-5">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h3 class="mb-3 text-light">Tin tức</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 ">
                    <!-- Bài viết 1 -->
                    <div class="baiviet-don row">
                        <div class="anhbaiviet col-md-4">
                            <!-- Cột bên trái chứa ảnh -->
                            <img src="https://media.vneconomy.vn/w800/images/upload/2022/11/16/56c99f14-2861-4dc2-ae06-3c04c8b22a63.jpg"
                                alt="Ảnh bài viết 1" class="img-fluid">
                            <span class="badge badge-primary">Tin tức</span>
                        </div>

                        <div class="col-md-8">
                            <!-- Cột bên phải chứa tiêu đề, ngày đăng và nội dung bài viết -->
                            <h4><a class="text-dark" href="blog-single.html">Tiêu đề bài viết 1</a></h4>
                            <p>Ngày đăng: 16 tháng 09, 2023</p>
                            <p>Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                                Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                            </p>
                            <a href="blog-single.html" class="btn btn-primary"> Đọc thêm</a>
                        </div>
                    </div>

                    <!-- Bài viết 1 -->
                    <div class="baiviet-don row">
                        <div class="anhbaiviet col-md-4">
                            <!-- Cột bên trái chứa ảnh -->
                            <img src="https://thanhtra.com.vn/data/images/0/2021/12/21/nghiemlan/lam-phat-bat-dong-san.jpg"
                                alt="Ảnh bài viết 1" class="img-fluid">
                            <span class="badge badge-primary">Kinh nghiệm đầu tư</span>
                        </div>
                        <div class="col-md-8">
                            <!-- Cột bên phải chứa tiêu đề, ngày đăng và nội dung bài viết -->
                            <h4><a class="text-dark" href="blog-single.html">Tiêu đề bài viết 1</a></h4>
                            <p>Ngày đăng: 16 tháng 09, 2023</p>
                            <p>Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                                Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                            </p>
                            <a href="blog-single.html" class="btn btn-primary"> Đọc thêm</a>
                        </div>
                    </div>
                    <!-- Bài viết 1 -->
                    <div class="baiviet-don row">
                        <div class="anhbaiviet col-md-4">
                            <!-- Cột bên trái chứa ảnh -->
                            <img src="https://media-cdn-v2.laodong.vn/Storage/NewsPortal/2020/10/18/846390/Dau-Tu-Bat-Dong-San.jpg"
                                alt="Ảnh bài viết 1" class="img-fluid">
                            <span class="badge badge-primary">Chuyện đầu tư</span>

                        </div>
                        <div class="col-md-8">
                            <!-- Cột bên phải chứa tiêu đề, ngày đăng và nội dung bài viết -->
                            <h4><a class="text-dark" href="blog-single.html">Tiêu đề bài viết 1</a></h4>
                            <p>Ngày đăng: 16 tháng 09, 2023</p>
                            <p>Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                                Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                            </p>
                            <a href="blog-single.html" class="btn btn-primary"> Đọc thêm</a>
                        </div>
                    </div>
                    <!-- Bài viết 1 -->
                    <div class="baiviet-don row">
                        <div class="anhbaiviet col-md-4">
                            <!-- Cột bên trái chứa ảnh -->
                            <img src="https://xdcs.cdnchinhphu.vn/446259493575335936/2023/2/24/chinh-sach-moi-anh-huong-den-thi-truong-bat-dong-san1602162451-16772104701281575851658.png"
                                alt="Ảnh bài viết 1" class="img-fluid">
                            <span class="badge badge-primary">Flie báo cáo thị trường</span>
                        </div>
                        <div class="col-md-8">
                            <!-- Cột bên phải chứa tiêu đề, ngày đăng và nội dung bài viết -->
                            <h4><a class="text-dark" href="blog-single.html">Tiêu đề bài viết 1</a></h4>
                            <p>Ngày đăng: 16 tháng 09, 2023</p>
                            <p>Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                                Nội dung bài viết 1 sẽ được hiển thị ở đây. Nội dung bài viết 1 sẽ được hiển thị ở đây.
                            </p>
                            <a href="blog-single.html" class="btn btn-primary"> Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end bai viet -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Các bài viết nổi bật</h1>
                <p>Các bài viết chất lượng, độc đáo và đầy cảm hứng.</p>
            </div>
            <div class="bai-viet-lq">
                <div class="bai-viet-lq-list">
                    <div class="post-single me-3 mt-5 mb-5 ms-3">
                        <div class="post card">
                            <img src="https://channel.mediacdn.vn/2020/11/28/photo-1-1606529143640136190400.jpg" class="card-img-top" alt="Ảnh bài viết 1">
                            <div class="card-body d-grid justify-content-center">
                                <h5 class="card-title text-light pb-5"><a href="blog-single.html">Trải nghiệm một ngày tại The MarQ District 1 tại trung tâm TP.HCM </a>
                                </h5>
                                <a class="d-flex justify-content-end" href="blog-single.html">Đọc thêm</a>
                            </div>
                            <div class="card-footer text-muted">
                                Ngày đăng: 14/09/2023
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bai-viet-lq-list">
                    <div class="post-single me-3 mt-5 mb-5 ms-3">
                        <div class="post card">
                            <img src="https://channel.mediacdn.vn/2020/11/28/photo-1-1606529143640136190400.jpg" class="card-img-top" alt="Ảnh bài viết 1">
                            <div class="card-body d-grid justify-content-center">
                                <h5 class="card-title text-light pb-5"><a href="blog-single.html">Trải nghiệm một ngày tại The MarQ District 1 tại trung tâm TP.HCM </a>
                                </h5>
                                <a class="d-flex justify-content-end" href="blog-single.html">Đọc thêm</a>
                            </div>
                            <div class="card-footer text-muted">
                                Ngày đăng: 14/09/2023
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bai-viet-lq-list">
                    <div class="post-single me-3 mt-5 mb-5 ms-3">
                        <div class="post card">
                            <img src="https://channel.mediacdn.vn/2020/11/28/photo-1-1606529143640136190400.jpg" class="card-img-top" alt="Ảnh bài viết 1">
                            <div class="card-body d-grid justify-content-center">
                                <h5 class="card-title text-light pb-5"><a href="blog-single.html">Trải nghiệm một ngày tại The MarQ District 1 tại trung tâm TP.HCM </a>
                                </h5>
                                <a class="d-flex justify-content-end" href="blog-single.html">Đọc thêm</a>
                            </div>
                            <div class="card-footer text-muted">
                                Ngày đăng: 14/09/2023
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bai-viet-lq-list">
                    <div class="post-single me-3 mt-5 mb-5 ms-3">
                        <div class="post card">
                            <img src="https://channel.mediacdn.vn/2020/11/28/photo-1-1606529143640136190400.jpg" class="card-img-top" alt="Ảnh bài viết 1">
                            <div class="card-body d-grid justify-content-center">
                                <h5 class="card-title text-light pb-5"><a href="blog-single.html">Trải nghiệm một ngày tại The MarQ District 1 tại trung tâm TP.HCM </a>
                                </h5>
                                <a class="d-flex justify-content-end" href="blog-single.html">Đọc thêm</a>
                            </div>
                            <div class="card-footer text-muted">
                                Ngày đăng: 14/09/2023
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bai-viet-lq-list">
                    <div class="post-single me-3 mt-5 mb-5 ms-3">
                        <div class="post card">
                            <img src="https://channel.mediacdn.vn/2020/11/28/photo-1-1606529143640136190400.jpg" class="card-img-top" alt="Ảnh bài viết 1">
                            <div class="card-body d-grid justify-content-center">
                                <h5 class="card-title text-light pb-5"><a href="blog-single.html">Trải nghiệm một ngày tại The MarQ District 1 tại trung tâm TP.HCM </a>
                                </h5>
                                <a class="d-flex justify-content-end" href="blog-single.html">Đọc thêm</a>
                            </div>
                            <div class="card-footer text-muted">
                                Ngày đăng: 14/09/2023
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- brands -->
    <div class="container-xxl py-5">
        <div class="container border-light">
            <div class="rounded p-3">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Sản Phẩm đến từ các Chủ Đầu Tư Uy Tín</h1>
                    <p>Sản phẩm đến từ các Chủ Đầu Tư Uy Tín, đảm bảo chất lượng và sự tin cậy cho mọi nhu cầu của bạn. Khám phá danh sách các sản phẩm tuyệt vời của chúng tôi dưới đây</p>
                </div>
                <div class="brands ">
                    <div class="brands-iteam">
                        <img src="/user/img/khangdien.png" width="200px" alt="">
                    </div>
                    <div class="brands-iteam">
                        <img src="/user/img/keppelland.png" width="200px" alt="">
                    </div>
                    <div class="brands-iteam">
                        <img src="/user/img/vinhome.png" width="200px" alt="">
                    </div>
                    <div class="brands-iteam">
                        <img src="/user/img/capitaland.png" width="200px" alt="">
                    </div>
                    <div class="brands-iteam">
                        <img src="/user/img/hongkongland.png" width="200px" alt="">
                    </div>
                    <div class="brands-iteam">
                        <img src="/user/img/sokimland.png" width="200px" alt="">
                    </div>
                </div>  
            </div>
        </div>
    </div>
    <!-- endbrands -->
@endsection