@extends('user.layout')
@section('tieudetrang')
@endsection
@section('noidung')
        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Ngô Văn Anh Hoài Bảo</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Giới thiệu</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="/user/img/ngobao4.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->
        <!-- bai viet -->
        <div class="container-fluid mb-5 p-4 justify-content-center wow fadeIn mt-5" data-wow-delay="0.1s" style="padding: 35px;">
            <div class="p-5 baigioithieu">
                <header class="d-flex justify-content-center mb-5">
                    <h1>Ngô Bảo - Nơi Của Sản Phẩm Xứng Tầm và Giá Trị Được Bảo Dưỡng</h1>
                </header>
                <div class="container">
                    <p>Xin chào Quý khách và đối tác thân mến,</p>
                    <p>Từ năm 2020, chúng tôi, tại Ngô Bảo Real, đã bước chân vào thế giới sôi động của ngành dịch vụ Bất Động Sản. Chúng tôi đã có cơ hội trải nghiệm sự tiếp cận với các sản phẩm cao cấp được tạo ra bởi các Chủ Đầu Tư đạt chuẩn quốc tế. Từ những kinh nghiệm đó, chúng tôi nhận thấy mình không chỉ đơn thuần là một người môi giới, mà hơn thế nữa, chúng tôi muốn trở thành một dịch vụ toàn diện, luôn đồng hành cùng Khách hàng.</p>
                    <p>Với sứ mệnh đó, chúng tôi đã thành lập mạng lưới hệ thống Ngô Bảo Real - Bảo, nơi mà sản phẩm xứng tầm và giá trị được bảo dưỡng.</p>
                    <h2>Dịch vụ của chúng tôi bao gồm:</h2>
                    <ul>
                        <li>Đa dạng hóa nguồn Sản phẩm Portfolio tập trung vào dòng cao cấp hạng sang và chuẩn mực chất lượng.</li>
                        <li>Khai thác tài sản để tối ưu hóa dòng tiền từ tài sản.</li>
                        <li>Bảo quản giá trị bền vững trong suốt vòng đời của tài sản.</li>
                    </ul>
                    <p>Với ba cốt lõi dịch vụ trên, chúng tôi tin rằng Quý khách hàng sẽ tìm thấy sản phẩm phù hợp với phong cách của mình và hoàn toàn yên tâm về việc tài sản của mình sẽ được quản lý và bảo tồn đúng cách để giá trị của nó được duy trì và tăng trưởng.</p>
                    <p>Chúng tôi rất vui mừng được hợp tác cùng Quý khách hàng và Đối tác. Xin vui lòng liên hệ với chúng tôi để biết thêm chi tiết.</p>
                    <p>Trân trọng,</p>
                    <p>Ngô Bảo</p>
                </div>
            </div>
        </div>
        <!-- end bai viet -->
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
        <!-- hoatdong -->
        <div class="container-xxl py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Ngô Bảo qua các hoạt động</h1>
                <p>Không ngừng học hỏi tăng giá trị dịch vụ</p>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4 mb-4 hoatdong">
                        <div class="m-3 hoatdongs">
                            <img src="/user/img/ngobao10.jpeg" alt="Hình ảnh 2" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 hoatdong">
                        <div class="m-3 hoatdongs">
                            <img src="/user/img/ngobao11.jpeg" alt="Hình ảnh 2" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 hoatdong">
                        <div class="m-3 hoatdongs">
                            <img src="/user/img/ngobao12.jpeg" alt="Hình ảnh 2" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 mb-4 hoatdong">
                        <div class="m-3 hoatdongs">
                            <img src="/user/img/ngobao13.jpg" alt="Hình ảnh 2" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 hoatdong">
                        <div class="m-3 hoatdongs">
                            <img src="/user/img/ngobao14.jpeg" alt="Hình ảnh 2" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-md-4 mb-4 hoatdong">
                        <div class="m-3 hoatdongs">
                            <img src="/user/img/ngobao15.jpeg" alt="Hình ảnh 2" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        <!-- endhoatdong -->
        <!-- Testimonial Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Khách hàng và đối tác</h1>
                    <p>Chúng tôi tự hào về những lời đánh giá tích cực mà khách hàng và đối tác của chúng tôi đã chia sẻ về dịch vụ và mối quan hệ làm việc với tôi.</p>
                </div>
                <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>
                                Bảo rất có nhiệt huyết và đam mê với nghề, luôn không ngừng học hỏi và rất chịu khó, làm từ những công việc nhỏ nhất. Phong thái chỉnh chu.
                            </p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="/user/img/testimonial-1.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Phương</h6>
                                    <small>Đồng nghiệp</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>
                                Bảo rất có nhiệt huyết và đam mê với nghề, luôn không ngừng học hỏi và rất chịu khó, làm từ những công việc nhỏ nhất. Phong thái chỉnh chu.
                            </p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="/user/img/testimonial-1.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Phương</h6>
                                    <small>Đồng nghiệp</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded p-3">
                        <div class="bg-white border rounded p-4">
                            <p>
                                Bảo rất có nhiệt huyết và đam mê với nghề, luôn không ngừng học hỏi và rất chịu khó, làm từ những công việc nhỏ nhất. Phong thái chỉnh chu.
                            </p>
                            <div class="d-flex align-items-center">
                                <img class="img-fluid flex-shrink-0 rounded" src="/user/img/testimonial-1.jpg"
                                    style="width: 45px; height: 45px;">
                                <div class="ps-3">
                                    <h6 class="fw-bold mb-1">Phương</h6>
                                    <small>Đồng nghiệp</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
@endsection