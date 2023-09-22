@extends('user.layout')
@section('tieudetrang')

@endsection
@section('noidung')
        <!-- Header Start -->
        <div class="container-fluid header bg-white p-0">
            <div class="row g-0 align-items-center flex-column-reverse flex-md-row">
                <div class="col-md-6 p-5 mt-lg-5">
                    <h1 class="display-5 animated fadeIn mb-4">Ngô Bảo Real dự án</h1> 
                        <nav aria-label="breadcrumb animated fadeIn">
                        <ol class="breadcrumb text-uppercase">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item text-body active" aria-current="page">Dự án</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-md-6 animated fadeIn">
                    <img class="img-fluid" src="/user/img/ngobao6.jpg" alt="">
                </div>
            </div>
        </div>
        <!-- Header End -->
                <!-- Property List Start -->
                <div class="container-xxl py-5" id="duanhanghieu">
                    <div class="container">
                        <div class="row g-0 gx-5 align-items-end mt-5">
                            <div class="col-lg-6">
                                <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                                    <h3 class=" text-light">BẤT ĐỘNG SẢN HÀNG HIỆU</h3>
                                    <p>Giá trị được bảo chứng vượt thời gian trên toàn thế giới. Biểu tượng của thành công và địa vị.</p>
                                </div>
                            </div>
                        </div>
                        <hr class="mb-5">
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane fade show p-0 active">
                                <div class="row g-4">
                                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                        <div class="property-item rounded overflow-hidden">
                                            <div class="position-relative overflow-hidden">
                                                <a href=""><img class="img-fluid" src="/user/img/property-1.jpg" alt=""></a>
                                                <div
                                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                    Đang Bán</div>
                                                <div
                                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                    Căn Hộ</div>
                                            </div>
                                            <div class="p-4 pb-0">
                                                <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                                <a class="d-block h5 mb-2" href="">The OpusK Metropole</a>
                                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An Khánh, TP. Thủ Đức</p>
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
                                                <a href=""><img class="img-fluid" src="/user/img/property-2.jpg" alt=""></a>
                                                <div
                                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                    Cho Thuê</div>
                                                <div
                                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                    Biệt Thự</div>
                                            </div>
                                            <div class="p-4 pb-0">
                                                <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                                <a class="d-block h5 mb-2" href="">The OpusK Metropole</a>
                                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An Khánh, TP. Thủ Đức</p>
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
                                                <a href=""><img class="img-fluid" src="/user/img/property-3.jpg" alt=""></a>
                                                <div
                                                    class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                                    Đang Bán</div>
                                                <div
                                                    class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                                    Văn Phòng</div>
                                            </div>
                                            <div class="p-4 pb-0">
                                                <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                                <a class="d-block h5 mb-2" href="">The OpusK Metropole</a>
                                                <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An Khánh, TP. Thủ Đức</p>
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Property List End -->
            <!-- thegolobalcity -->
                <div class="theglobalcity wow fadeIn" data-wow-delay="0.1s">
                    <div class="custom-header">
                        <h3 class="custom-title">TOWNSHIP</h3>
                    </div>
                    <div class="custom-content">
                        <div class="custom-subheader">
                            <h2 class="custom-subtitle">The Global City</h2>
                            <p class="custom-description">Khu đô thị biểu tượng "DOWNTOWN" mới của Thành phố Hồ Chí Minh</p>
                            <hr class="bg-white">
                        </div>
                        <div class="custom-subheader">
                            <p class="custom-description"><i class="fa-solid fa-location-dot"></i> Phường An Phú, TP. Thủ Đức, TP. Hồ Chí Minh</p>
                        </div>
                    </div>
                </div>
            <!-- endglobalcity   -->
                
         <!-- Property List Start -->
         <div class="container-xxl py-5" id="duandahoanthanh">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end mt-5">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h3 class="mb-3 text-light">Dự án đã hoàn thành</h3>
                        </div>
                    </div>
                </div>
                <hr class="mb-5">
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="/user/img/property-1.jpg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Đang Bán</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Căn Hộ</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                        <a class="d-block h5 mb-2" href="">The OpusK Metropole</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An Khánh, TP. Thủ Đức</p>
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
                                        <a href=""><img class="img-fluid" src="/user/img/property-2.jpg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Cho Thuê</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Biệt Thự</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                        <a class="d-block h5 mb-2" href="">The OpusK Metropole</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An Khánh, TP. Thủ Đức</p>
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
                                        <a href=""><img class="img-fluid" src="/user/img/property-3.jpg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Đang Bán</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Văn Phòng</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                        <a class="d-block h5 mb-2" href="">The OpusK Metropole</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An Khánh, TP. Thủ Đức</p>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->
         <!-- Property List Start -->
         <div class="container-xxl py-5" id="duandangtrienkhai">
            <div class="container">
                <div class="row g-0 gx-5 align-items-end mt-5">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h3 class="mb-3 text-light">Dự án đang phát triển</h3>
                        </div>
                    </div>
                </div>
                <hr class="mb-5">
                <div class="tab-content">
                    <div id="tab-1" class="tab-pane fade show p-0 active">
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="property-item rounded overflow-hidden">
                                    <div class="position-relative overflow-hidden">
                                        <a href=""><img class="img-fluid" src="/user/img/property-1.jpg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Đang Bán</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Căn Hộ</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                        <a class="d-block h5 mb-2" href="">The OpusK Metropole</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An Khánh, TP. Thủ Đức</p>
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
                                        <a href=""><img class="img-fluid" src="/user/img/property-2.jpg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Cho Thuê</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Biệt Thự</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                        <a class="d-block h5 mb-2" href="">The OpusK Metropole</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An Khánh, TP. Thủ Đức</p>
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
                                        <a href=""><img class="img-fluid" src="/user/img/property-3.jpg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Đang Bán</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Văn Phòng</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                        <a class="d-block h5 mb-2" href="">The OpusK Metropole</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An Khánh, TP. Thủ Đức</p>
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
                                        <a href=""><img class="img-fluid" src="/user/img/property-3.jpg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Đang Bán</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Văn Phòng</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                        <a class="d-block h5 mb-2" href="">The OpusK Metropole</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An Khánh, TP. Thủ Đức</p>
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
                                        <a href=""><img class="img-fluid" src="/user/img/property-3.jpg" alt=""></a>
                                        <div
                                            class="bg-primary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Đang Bán</div>
                                        <div
                                            class="bg-white rounded-top text-primary position-absolute start-0 bottom-0 mx-4 pt-1 px-3">
                                            Văn Phòng</div>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <h5 class="text-primary mb-3">13 - 100 tỷ</h5>
                                        <a class="d-block h5 mb-2" href="">The OpusK Metropole</a>
                                        <p><i class="fa fa-map-marker-alt text-primary me-2"></i>Lô 1.14 Thủ Thiêm, P. An Khánh, TP. Thủ Đức</p>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Property List End -->
@endsection