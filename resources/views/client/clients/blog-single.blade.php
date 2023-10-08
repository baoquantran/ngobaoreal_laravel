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
        <!-- bai viet don -->
        <div class="container noi-dung mt-5">
            <div class="row">
                <div class="col-md-8">
                    <div class="bai-viet">
                        <div class="tags pb-5" style="color: #ccc;">
                      
                        </div>
                        <h1 class="tieu-de text-light">{{$postDetail->title}}</h1>
                        <p><b>Ngày đăng: </b>{{$postDetail->created_at}}</p>
                        <p><b>Người đăng:</b> {{$postDetail->poster}}</p>
                        <img src="/{{$postDetail->img}}" alt="{{$postDetail->title}}" class="anh-bai-viet">
                        <p class="noi-dung-bai-viet">
                        {!! $postDetail->content !!}
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="bai-viet-gan-day">
                        <h2 class="text-dark">Bài viết gần đây</h2>
                        <hr>
                        <ul class="danh-sach-bai-viet-gan-day">
                            @foreach($post as $p)
                            <li class="li-bai-viet-gan-day"><a href="#">{{$p->title}}</a></li>
                            <hr>
                            @endforeach
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
        @if(count($postlq) > 0)
            @foreach($postlq as $plq)
            <div class="bai-viet-lq-list">
                <div class="post-single me-3 mt-5 mb-5 ms-3">
                    <div class="post card">
                        <img src="/{{$plq->img}}" class="card-img-top" alt="{{$plq->title}}">
                        <div class="card-body d-grid justify-content-center">
                            <h5 class="card-title text-light pb-5"><a href="{{ route('post_detail', ['cate_post' => $plq->catep_slug,'post_slug' => $plq->slug]) }}">{{$plq->title}}</a>
                            </h5>
                            <a class="d-flex justify-content-end" href="{{ route('post_detail', ['cate_post' => $plq->catep_slug,'post_slug' => $plq->slug]) }}">Đọc thêm</a>
                        </div>
                        <div class="card-footer text-muted">
                        {{$plq->ngaydang}}
                        </div>
                    </div>
                </div>
            </div>
           @endforeach
        @else
        <div class="text-center mx-auto mt-5 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
           
            <p>Hiện chưa có bài viết nào liên quan</p>
        </div>
        @endif
        </div>
        <!-- end bai lien quan -->
@endsection