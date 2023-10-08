<div class="container-xxl py-5">
            <div class="container">
                <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    <h1 class="mb-3">Các bài viết nổi bật</h1>
                    <p>Các bài viết chất lượng, độc đáo và đầy cảm hứng.</p>
                </div>
                <div class="bai-viet-lq">
                @if(count($postpp) > 0)
                    @foreach($postpp as $p)
                    <div class="bai-viet-lq-list">
                        <div class="post-single me-3 mt-5 mb-5 ms-3">
                            <div class="post card">
                                <img src="/{{$p->img}}" class="card-img-top" alt="Ảnh bài viết 1">
                                <div class="card-body d-grid justify-content-center">
                                <h5 class="card-title text-light pb-5">
                                    <a href="{{ route('post_detail', ['cate_post' => $p->catep_slug,'post_slug' => $p->slug]) }}">
                                        {{$p->title}}
                                    </a>
                                </h5>
                                    <a class="d-flex justify-content-end" href="blog-single.html">Đọc thêm</a>
                                </div>
                                <div class="card-footer text-muted">
                                {{$p->created_at}}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @else
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                    
                    <p>Hiện tạo chưa có bài viết nào.</p>
                </div>
                    @endif
                </div>
            </div>
        </div>