@extends('client.clients.layout.layout')
@section('tieudetrang')
@endsection
@section('baivietnoibat')
@endsection
@section('noidung')
    <!-- Header Start -->
    <div class="container-fluid header bg-white p-0">
        <div class="slider-container">
            <div class="slider">
                <div class="slide">
                    <img src="https://img.homedy.com/store/images/2020/02/15/phoi-canh-eco-green-sai-gon-637173889324999154.jpg"
                        alt="Slide 1">
                    <div>
                        <b>Ngô Bảo xin chào quý khách</b>
                        <p>Tại Ngọc Bảo Real, nơi quý khách quý khách tìm thấy sự chỉnh chu trong mọi chi tiết công việt</p>
                        <button data-bs-toggle="modal" data-bs-target="#banggia">Liên hệ Bảo</button>
                    </div>
                </div>
                <div class="slide">
                    <img src="https://www.lmpdesign.vn/thumbs/1920x800x2/upload/news/thiet-ke-cong-trinh-2-8901.jpg"
                        alt="Slide 2">
                    <div>
                        <b>Dịch vụ bất động sản toàn diện</b>
                        <p>Đồng hành cùng quý khách xuyên suốt vòng đời mua bán và quản lý tài sản</p>
                        <button data-bs-toggle="modal" data-bs-target="#banggia">Liên hệ Bảo</button>
                    </div>
                </div>
                <div class="slide">
                    <img src="https://www.lmpdesign.vn/thumbs/1920x800x2/upload/news/thiet-ke-cong-trinh-2-8901.jpg"
                        alt="Slide 3">
                    <div>
                        <b>Ngô Bảo xin chào quý khách</b>
                        <p>kh dsds đa a dadad adada adad </p>
                        <button data-bs-toggle="modal" data-bs-target="#banggia">Liên hệ Bảo</button>
                    </div>
                </div>
            </div>
            <div class="slider-dots"></div> <!-- Di chuyển thanh trạng thái lên trên banner -->
            <button class="slider-button slider-button-prev"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="slider-button slider-button-next"><i class="fa-solid fa-chevron-right"></i></button>
        </div>

    </div>
    <!-- Header End -->


    <!-- Search Start -->
    <div class="container-fluid bg-primary mb-5 wow fadeIn" data-wow-delay="0.1s" style="padding: 35px;">
        <div class="container">
            <div class="row g-2">
                <div class="col-md-10">

                    <div class="row g-2">
                        <div class="col-md-6">
                            <select class="form-select border-0 py-3" id="location" onchange="updateDistricts()">
                                <option value="all">Chọn thành phố</option>
                                <option value="hanoi">Hà Nội</option>
                                <option value="hochiminh">Hồ Chí Minh</option>
                                <!-- Thêm các tỉnh và thành phố khác ở Việt Nam vào đây -->
                            </select>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select border-0 py-3" id="district">

                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-dark border-0 w-100 py-3">Tìm kiếm</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Search End -->


    <!-- Category Start -->
    <!-- Category End -->


    <!-- NOIBAT -->
    @include('client.clients.include.noibat')
    <!-- NOITBAT -->
    <!-- dichvu -->
    <div class="container-xxl py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">Dịch vụ toàn diện của Bảo</h1>
            <p>Chỉnh chu trong từng chi tiết</p>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 mt-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="dichvu card custom-card ">
                        <div class="card-body text-center p-4">
                            <h5 class="pt-2 pb-2 text-white">Xây dựng thương hiệu</h5>
                            <p class="dichvu-text text-white">Lên ý tưởng và thực hiện video marketing thúc đẩy mạnh thương
                                hiệu sản phẩm</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-5  wow fadeInUp" data-wow-delay="0.3s">
                    <div class="dichvu card custom-card">
                        <div class="card-body text-center p-4 p-4">
                            <h5 class="pt-2 pb-2 text-white">Tư vấn bất động sản </h5>
                            <p class="dichvu-text text-white">các sản phẩm căn hộ và thuộc KĐT cao cấp chuẩn quốc tế và
                                chính sách bán hàng hấp dẫn</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-5  wow fadeInUp" data-wow-delay="0.5s">
                    <div class="dichvu card custom-card">
                        <div class="card-body text-center p-4">
                            <h5 class="pt-2 pb-2 text-white">Quản lý tài sản</h5>
                            <p class="dichvu-text text-white">Quản lý và khai thác tài sản tạo dòng tiền cho thuê và chuyển
                                nhượng tài sản</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 mt-5  wow fadeInUp" data-wow-delay="0.7s">
                    <div class="dichvu card custom-card">
                        <div class="card-body text-center p-4">
                            <h5 class="pt-2 pb-2 text-white">Hỗ trợ pháp lý</h5>
                            <p class="dichvu-text text-white">Hỗ trợ các vấn đề thủ tục pháp lý và hành chính và tài sản</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- enddichvu -->
    <!-- Property List Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                        <h1 class="mb-3">Các Sản Phẩm Bảo chuyên phân phối</h1>
                        <p>Cao cấp, độc đáo, khác biệt và mang phong cách riêng.</p>
                    </div>
                </div>
                <div class="col-lg-6 text-start text-lg-end wow slideInRight" data-wow-delay="0.1s">
                    <ul class="nav nav-pills d-inline-flex justify-content-end mb-5">
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary active" data-bs-toggle="pill" href="#tab-1">Tất cả</a>
                        </li>
                        <li class="nav-item me-2">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-2">Cho thuê</a>
                        </li>
                        <li class="nav-item me-0">
                            <a class="btn btn-outline-primary" data-bs-toggle="pill" href="#tab-3">Đang bán</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href="duan-detail.html"><img class="img-fluid" src="/user/img/property-1.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Đang Bán</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Căn Hộ</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="duan-detail.html">The OpusK Metropole</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An
                                        Khánh, TP. Thủ Đức</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Phòng Ngủ</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Phòng Tắm</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href="duan-detail.html"><img class="img-fluid" src="/user/img/property-2.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Cho Thuê</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Biệt Thự</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="duan-detail.html">The OpusK Metropole</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An
                                        Khánh, TP. Thủ Đức</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Phòng Ngủ</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Phòng Tắm</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-3.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Đang Bán</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Văn Phòng</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="duan-detail.html">The OpusK Metropole</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An
                                        Khánh, TP. Thủ Đức</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Phòng Ngủ</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Phòng Tắm</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-4.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Cho Thuê</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Tòa Nhà</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="duan-detail.html">The OpusK Metropole</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An
                                        Khánh, TP. Thủ Đức</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Phòng Ngủ</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Phòng Tắm</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-5.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Đang Bán</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Nhà Ở</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="duan-detail.html">The OpusK Metropole</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An
                                        Khánh, TP. Thủ Đức</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Phòng Ngủ</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Phòng Tắm</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-6.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        Cho Thuê</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Cửa Hàng</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="duan-detail.html">The OpusK Metropole</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An
                                        Khánh, TP. Thủ Đức</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Phòng Ngủ</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Phòng Tắm</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary py-3 px-5" href="">Xem Thêm Bất Động Sản</a>
                        </div>

                    </div>
                </div>
                <div id="tab-2" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-1.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Sell</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Appartment</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-2.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Rent</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Villa</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-3.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Sell</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Office</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-4.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Rent</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Building</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-5.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Sell</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Home</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-6.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Rent</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Shop</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                        </div>
                    </div>
                </div>
                <div id="tab-3" class="tab-pane fade show p-0">
                    <div class="row g-4">
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-1.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Sell</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Appartment</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-2.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Rent</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Villa</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-3.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Sell</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Office</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-4.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Rent</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Building</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-5.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Sell</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Home</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="property-item rounded overflow-hidden">
                                <div class="position-relative overflow-hidden">
                                    <a href=""><img class="img-fluid" src="/user/img/property-6.jpg"
                                            alt=""></a>
                                    <div
                                        class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                        For Rent</div>
                                    <div
                                        class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                        Shop</div>
                                </div>
                                <div class="p-4 pb-0">
                                    <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                    <a class="d-block h5 mb-2" href="">Golden Urban House For Sell</a>
                                    <p><i class="fa fa-map-marker-alt text-primary me-2"></i>123 Street, New York,
                                        USA</p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-ruler-combined text-primary me-2"></i>1000 Sqft</small>
                                    <small class="flex-fill text-center border-end py-2"><i
                                            class="fa fa-bed text-primary me-2"></i>3 Bed</small>
                                    <small class="flex-fill text-center py-2"><i
                                            class="fa fa-bath text-primary me-2"></i>2 Bath</small>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <a class="btn btn-primary py-3 px-5" href="">Browse More Property</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Property List End -->


    <!-- Call to Action Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="bg-light rounded p-3">
                <div class="bg-white rounded p-4" style="border: 1px dashed rgba(228, 168, 82)">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                            <img class="img-fluid rounded w-100" src="/user/img/ngobao5.jpg" alt="">
                        </div>
                        <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                            <div class="mb-4">
                                <h1 class="mb-3">Liên hệ với Bảo</h1>
                                <p>Hãy liên hệ với chúng tôi để chúng tôi có cơ hội tư vấn và hỗ trợ bạn một cách tận tâm và
                                    chuyên nghiệp hơn.</p>
                            </div>
                            <a class="btn btn-primary py-3 px-4 me-2" data-bs-toggle="modal" data-bs-target="#tuvan">Để
                                lại thông tin liên hệ</a>
                            <a href="" class="btn btn-dark py-3 px-4"><i class="fa fa-calendar-alt me-2"></i>Đặt
                                lịch hẹn</a>
                            <!-- modal -->
                            <div class="modal fade mt-5" id="tuvan" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header bg-primary">
                                            <h5 class="modal-title text-white" id="exampleModalLabel">Để lại thông tin
                                                liên hệ cho chúng tôi</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-4">
                                            <form id="myFormLH" method="post" action="{{ route('baogia.store') }}">
                                                @csrf
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" name="name"
                                                        placeholder="Nhập Tên">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="email" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" name="email"
                                                        placeholder="Nhập Email">
                                                </div>
                                                <div class="mb-3">
                                                    <input type="text" class="form-control" id="exampleInputEmail1"
                                                        aria-describedby="emailHelp" name="phone"
                                                        placeholder="Nhập Số điện thoại">
                                                </div>
                                                <div class="mb-3 form-check">
                                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                    <label class="form-check-label" for="exampleCheck1">Tôi chấp nhân cho
                                                        website lưu thông tin của tôi</label>
                                                </div>

                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Call to Action End -->
    <script>
        $(document).ready(function() {
            // Xử lý khi gửi form thành công và hiện thông báo toasts
            $('#liveToast').on('shown.bs.toast', function() {
                // Đóng tab có id= banggia
                $('#banggia').modal('hide');
                $('#tuvan').modal('hide');

                // Xóa hết value trong input
                $('#myFormLH input').val('');
            });

            // Xử lý khi đóng toasts
            $('#liveToast').on('hidden.bs.toast', function() {
                // Đóng tab có id= banggia
                $('#banggia').modal('hide');
                $('#tuvan').modal('hide');

                // Xóa hết value trong input
                $('#myFormLH input').val('');
            });

            // Xử lý khi submit form
            $('#myFormLH').on('submit', function(e) {
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



    <!-- Baivietnoibat -->
    @include('client.clients.include.posthot')
    <!-- End bai viet noi bat -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Khách hàng và đối tác</h1>
                <p>Chúng tôi tự hào về những lời đánh giá tích cực mà khách hàng và đối tác của chúng tôi đã chia sẻ về dịch
                    vụ và mối quan hệ làm việc với tôi.</p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
                <div class="testimonial-item bg-light rounded p-3">
                    <div class="bg-white border rounded p-4">
                        <p>
                            Bảo rất có nhiệt huyết và đam mê với nghề, luôn không ngừng học hỏi và rất chịu khó, làm từ
                            những công việc nhỏ nhất. Phong thái chỉnh chu.
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
                            Bảo rất có nhiệt huyết và đam mê với nghề, luôn không ngừng học hỏi và rất chịu khó, làm từ
                            những công việc nhỏ nhất. Phong thái chỉnh chu.
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
                            Bảo rất có nhiệt huyết và đam mê với nghề, luôn không ngừng học hỏi và rất chịu khó, làm từ
                            những công việc nhỏ nhất. Phong thái chỉnh chu.
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

    <!-- brands -->
    <div class="container-xxl py-5">
        <div class="container border-light">
            <div class="rounded p-3">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Sản Phẩm đến từ các Chủ Đầu Tư Uy Tín</h1>
                    <p>Sản phẩm đến từ các Chủ Đầu Tư Uy Tín, đảm bảo chất lượng và sự tin cậy cho mọi nhu cầu của bạn. Khám
                        phá danh sách các sản phẩm tuyệt vời của chúng tôi dưới đây</p>
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
