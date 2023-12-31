<div class="container-fluid nav-bar bg-transparent">
            <nav class="navbar navbar-expand-lg navbar-light py-0 px-4">
                <a href="/" class="navbar-brand d-flex align-items-center text-center">
                    <img src="https://truststone.blob.core.windows.net/images/4952845e-27da-47c4-840e-09530fa46a0e/0f3e24292ce7445cabf69cf5661a9afa.png"
                        alt="">
                </a>
                <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="/" class="nav-item nav-link active">Trang chủ</a>
                        <a href="/gioi-thieu" class="nav-item nav-link">Giới thiệu</a>
                        <div class="nav-item dropdown">
                            <a href="/bai-viet-ngobaoreal" id="project-link" class="nav-link dropdown-toggle">Bài viết</a>
                            <div class="dropdown-menu rounded-0 m-0" style="background-color: #E4A852; border: none;">
                                
                            @foreach($catepost as $cp)
                                <a href="{{route('post',['cate_post'=>$cp->catep_slug])}}" class="dropdown-item">{{$cp->name}}</a>
                            @endforeach
                            </div>
                        </div>
                        <div class="nav-item dropdown">
                            <a href="/du-an" id="project-link" class="nav-link dropdown-toggle">Dự án</a>
                            <div class="dropdown-menu rounded-0 m-0" style="background-color: #E4A852; border: none;">
                                <a href="/du-an#duanhanghieu" class="dropdown-item" id="hanghieu">Branded Residences</a>
                                <a href="/du-an#duandahoanthanh" class="dropdown-item" id="dahoanthanh">Dự án đã hoàn
                                    thành</a>
                                <a href="/du-an#duandangtrienkhai" class="dropdown-item" id="dangtrienkhai">Dự án đang
                                    triễn khai</a>
                            </div>
                        </div>
                        <a href="/ky-gui" class="nav-item nav-link" target="_blank">Ký gửi</a>
                        <a href="/tuyen-dung" class="nav-item nav-link">Tuyển dụng</a>
                        <a href="/lien-he" class="nav-item nav-link">Liên hệ</a>
                    </div>
                    <a href="/login" class="btn btn-primary px-3 d-none d-lg-flex"><i class="fa-regular fa-user"></i></a>
                </div>
            </nav>
        </div>