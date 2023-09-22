@extends(layout)
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
        <!-- bai viet don -->
        <div class="container noi-dung mt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="bai-viet">
                        <div class="tags pb-5" style="color: #ccc;">
                        <span>#themartqd1</span> <span>#canhoquan1</span>
                        </div>
                        <h1 class="tieu-de text-light">Trải nghiệm một ngày tại The MarQ District 1 tại trung tâm TP.HCM</h1>
                        <p>Ngày đăng: 14/09/2023</p>
                        <p>Tác giả: Ngô Bảo</p>
                        <img src="/user/img/ngobao7.jpg" alt="Hình ảnh bài viết" class="anh-bai-viet">
                        <p class="noi-dung-bai-viet">
                            <h2>The MarQ District 1 - Nơi trải nghiệm đẳng cấp, nơi bạn gọi là "ngôi nhà."</h2>
                            <p>The MarQ District 1 là một dự án căn hộ chất lượng tại trung tâm Quận 1, thành phố Hồ Chí Minh. Với vị trí đắc địa và tiện ích hiện đại, nơi đây hứa hẹn mang đến trải nghiệm sống hoàn hảo cho cư dân và du khách. Tôi đã có cơ hội trải nghiệm một ngày tại đây và dưới đây là chia sẻ của tôi.</p>

                            <h6>Buổi Sáng: Thư Giãn Tại Hồ Bơi</h6>
                            <p>Ngày bắt đầu bằng việc thư giãn tại hồ bơi của The MarQ District 1. Hồ bơi lớn và thoải mái với cảnh quan tuyệt đẹp đã mang lại sự thư thái cho tôi. Tôi có thể nghỉ ngơi trên ghế dài bên bể bơi, ngắm nhìn toàn cảnh thành phố và tận hưởng ánh nắng mặt trời sớm.</p>

                            <h6>Buổi Trưa: Ăn Trưa Tại Nhà Hàng MarQ</h6>
                            <p>Sau khi tận hưởng buổi sáng tại hồ bơi, tôi đã dự định ăn trưa tại nhà hàng MarQ. Nhà hàng này nổi tiếng với các món ăn ngon và phục vụ nhiều món ăn đa dạng từ đủ các nền văn hóa. Tôi đã thử một món ăn Việt Nam truyền thống và không thể quên hương vị tuyệt vời của nó.</p>

                            <h6>Buổi Chiều: Thư Giãn Tại Công Viên</h6>
                            <p>Sau bữa trưa ngon miệng, tôi quyết định dành thời gian thư giãn tại công viên cách The MarQ District 1 không xa. Công viên này là nơi lý tưởng để thư giãn, đọc sách hoặc thậm chí tham gia vào một trò chơi bóng đá với bạn bè. Cảm giác mát mẻ và cây cỏ xanh mướt làm tôi cảm thấy thật sảng khoái.</p>

                            <h6>Buổi Tối: Dạo Chơi Quận 1</h6>
                            <p>Buổi tối, tôi quyết định khám phá thêm khu vực quận 1. Quận 1 nổi tiếng với đời sống về đêm sôi động và các nhà hàng, quán bar sang trọng. Tôi đã ghé thăm một số địa điểm nổi tiếng và thưởng thức những món ăn ngon tại đây.</p>

                            <h6>Kết Luận</h6>
                            <p>Ngày trải nghiệm tại The MarQ District 1 thực sự là một trải nghiệm đáng nhớ. Vị trí tốt, tiện ích đa dạng và không gian thoải mái đã tạo nên một ngày thư giãn và thú vị. Nếu bạn đến thành phố Hồ Chí Minh và muốn tận hưởng cuộc sống đô thị cao cấp, The MarQ District 1 là lựa chọn tuyệt vời.</p>
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bai-viet-gan-day">
                        <h2 class="text-dark">Bài viết gần đây</h2>
                        <hr>
                        <ul class="danh-sach-bai-viet-gan-day">
                            <li class="li-bai-viet-gan-day"><a href="#">Cuộc sống của cư dân tại The Global City trong tương lai sẽ thế nào</a></li>
                            <hr>
                            <li class="li-bai-viet-gan-day"><a href="#">Trải nghiệm một ngày tại The MarQ District 1 tại trung tâm TP.HCM</a></li>
                            <hr>
                            <li class="li-bai-viet-gan-day"><a href="#">Quận 1 hiện có những dự án căn hộ hạng sang nào và Nên chọn dự án nào ở thời điểm hiện tại ?</a></li>
                            <hr>
                            <li class="li-bai-viet-gan-day"><a href="#">Quận 1 hiện có những dự án căn hộ hạng sang nào và Nên chọn dự án nào ở thời điểm hiện tại ?</a></li>
                            <hr>
                            <!-- Thêm các liên kết cho các bài viết gần đây -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end bai viet don -->

         <!-- bai lien quan -->
         <div class="text-center mx-auto mt-5 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Bài viết liên quan</h1>
            <p>Khám phá các nội dung liên quan</p>
        </div>
        <div class="bai-viet-lq me-5 ms-5">
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
        <!-- end bai lien quan -->
@endsection