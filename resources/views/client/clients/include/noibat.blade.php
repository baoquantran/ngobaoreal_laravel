@if(count($posthot) > 0)
<div class="container-xxl py-5">
<div class="text-center mx-auto mt-5 mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
        <h1 class="mb-3">Bài viết nổi bật</h1>
        <p>Những thông tin quan trọng bạn không nên bỏ lỡ.</p>
    </div>
    <div class="container hot">
        @foreach($posthot as $ph)
        <div class="row g-5 align-items-center d-flex">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="/{{$ph->img}}">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="mb-4">{{$ph->title}}</h1>
                <p class="mb-4">{!! $ph->subtitle !!}</p>
                
                <a class="btn btn-primary py-3 px-5 mt-3" href="{{ route('post_detail', ['cate_post' => $ph->catep_slug,'post_slug' => $ph->slug]) }}">Đọc thêm</a>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endif