@extends('client.clients.layout.layout')
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
    @include('client.clients.include.noibat')
    <!-- dongbaivietnoibat -->
    <!-- bai viet -->
    <div class="container-fluid mb-5 p-4 justify-content-center wow fadeIn mt-5 row ps-5" data-wow-delay="0.1s"style="padding: 35px;">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h1 class="mb-3">{{$postmain[0]->name}}</h1>
        </div>
        <div class="news container">
            <!-- baivietphobien -->
            <div class="danhmucbaiviet row" id="bvphobien">
               
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
                            @foreach($catepost as $cp)
                            <li><a href="{{route('post',['cate_post'=>$cp->catep_slug])}}" id="phobien">{{$cp->name}}</a></li>
                            <hr>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="row g-0 gx-5 align-items-end mt-5">
                    <div class="col-lg-6">
                        <div class="text-start mx-auto mb-5 wow slideInLeft" data-wow-delay="0.1s">
                            <h3 class="mb-3 text-light">Tin phổ biến</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-8 order-md-1">
                    @foreach($postpb as $ppb)
                    <!-- Bài viết 1 -->
                    <div class="baiviet-don row">
                        <div class="anhbaiviet col-md-4">
                            <!-- Cột bên trái chứa ảnh -->
                            <img src="/{{$ppb->img}}"
                                alt="{{$ppb->title}}" class="img-fluid">
                            <span class="badge badge-primary">{{$ppb->name}}</span>
                        </div>

                        <div class="col-md-8">
                            <!-- Cột bên phải chứa tiêu đề, ngày đăng và nội dung bài viết -->
                            <h4><a class="text-dark mt-3" href="{{ route('post_detail', ['cate_post' => $ppb->catep_slug,'post_slug' => $ppb->slug]) }}">{{$ppb->title}}</a></h4>
                            <p>Ngày đăng: {{$ppb->ngaydang}}</p>
                            <p>{!! $ppb->subtitle !!}
                            </p>
                            <a href="{{ route('post_detail', ['cate_post' => $ppb->catep_slug,'post_slug' => $ppb->slug]) }}" class="btn btn-primary"> Đọc thêm</a>
                        </div>
                    </div>
                    @endforeach
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
                    @foreach($postmain as $pm)
                    <!-- Bài viết 1 -->
                    <div class="baiviet-don row">
                        <div class="anhbaiviet col-md-4">
                            <!-- Cột bên trái chứa ảnh -->
                            <img src="/{{$pm->img}}"
                                alt="{{$pm->title}}" class="img-fluid">
                            <span class="badge badge-primary">Tin tức</span>
                        </div>

                        <div class="col-md-8">
                            <!-- Cột bên phải chứa tiêu đề, ngày đăng và nội dung bài viết -->
                            <h4><a class="text-dark" href="{{ route('post_detail', ['cate_post' => $pm->catep_slug,'post_slug' => $pm->slug]) }}">{{$pm->name}}</a></h4>
                            <p>Ngày đăng: {{$pm->ngaydang}}</p>
                            <p>{!!$pm->subtitle!!}
                            </p>
                            <a href="{{ route('post_detail', ['cate_post' => $pm->catep_slug,'post_slug' => $pm->slug]) }}" class="btn btn-primary"> Đọc thêm</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- end bai viet -->
    @include('client.clients.include.posthot')
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