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
        <p>Những thông tin quan trọng bạn không nên bỏ lỡ.</p>
    </div>
    @include('client.clients.include.noibat')
    <!-- dongbaivietnoibat -->
   
     <!--================Blog Categorie Area =================-->
		<section class="product-page_detail">
            <div class="text-center mx-auto mt-5 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Bài viết tin tức</h1>
            </div>
			<div class="container-fluid p-md-5 p-0">
				<div class="row">
					
					<div class="col-md-8 col-12">
                        @foreach($postmain as $p)
						<!--================Single Blog =================-->
						<div class="row d-flex  m-auto mt-5">
							<div class="col-md-3 blog-img m-auto">
								<img src="/{{$p->img}}" alt="">
							</div>
							<div class="col-md-9 col-12">
								<div class="">
									<p>{{$p->ngaydang}}</p>
									<h3><a class="text-dark" href="{{ route('post_detail', ['cate_post' => $p->catep_slug,'post_slug' => $p->slug]) }}">{{$p->title}}</a></h3>
									<p>{!! $p->subtitle !!}</p>
								</div>
								<div class=""> <!-- Đặt justify-content-start để nút ở đầu cột -->
									<button class="btn btn-outline-dark">Đọc thêm</button>
								</div>
							</div>
						</div>
                        @endforeach
					</div>
					<!--================Category Blog =================-->
					<div class=" row col-md-4 col-12 me-auto ms-auto mt-5">
						<div class="col-12">
							<h4 class="">Tin phổ biến</h4>
							<hr>
							<div class="">
                                @foreach($postpb as $p)
								<!--================Single Blog =================-->
								<div class="row mt-3">
									<div class="col-3 blog-img2">
										<img src="/{{$p->img}}" alt="">
									</div>
									<div class="col-9">
										<h5><a class="text-dark" href="{{ route('post_detail', ['cate_post' => $p->catep_slug,'post_slug' => $p->slug]) }}">{{$p->title}} </a></h5>
										<p>{{$p->ngaydang}}</p>
									</div>
								</div>
                                @endforeach
							</div>
						</div>
						<div class="col-12">
							<h4 class="mt-5">Danh mục</h4>
							<hr>
							<ul class="text-blog-container">
                                @foreach($catepost as $cp)
								<li class="mb-3 d-flex justify-content-between align-items-center ">
									<a class="text-dark text-single-blog" href="">{{$cp->name}}</a>
								</li>
                                @endforeach
							</ul>
							
						</div>
						
					</div>
				</div>
			</div>
		</section>
        <!--================Blog Categorie Area =================-->
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