<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="/admin/images/ngobaoreal2.png" />

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <!-- My CSS -->
    <link rel="stylesheet" href="/admin/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>@yield('tieudetrang')</title>
</head>

<body>

    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <!-- <i class='bx bxs-smile'></i>
   <span class="text">AdminHub</span> -->
            <img class="logo_admin" src="/admin/images/ngobaoreal2.png" alt="">
        </a>
        <ul class="side-menu top">
            <li class="{{ Route::currentRouteName() === 'dashboard' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Bảng điều khiển</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() === 'room.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('room.index') }}">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Quản lý danh mục dự án</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() === 'project.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('project.index') }}">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Quản lý dự án</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() === 'status-project.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('status-project.index') }}">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Quản lý trạng thái dự án</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() === 'type-post.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('type-post.index') }}">
                    <i class='bx bxs-book'></i>
                    <span class="text">Quản lý danh mục bài viết</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() === 'post.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('post.index') }}">
                    <i class='bx bxs-book'></i>
                    <span class="text">Quản lý bài viết</span>
                </a>
            </li>

            <li class="{{ Route::currentRouteName() === 'user.index' ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('user.index') }}">
                    <i class='bx bxs-group'></i>
                    <span class="text">Quản lý tài khoản</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() === 'kygui.index' ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('kygui.index') }}">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Quản lý ký gửi</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() === 'tuvan.index' ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('tuvan.index') }}">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Quản lý tư vấn</span>
                </a>
            </li>
            <li class="{{ Route::currentRouteName() === 'baogia.index' ? 'active' : '' }} ">
                <a class="nav-link" href="{{ route('baogia.index') }}">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Quản lý báo giá</span>
                    {{-- <span class="badge rounded-pill text-bg-danger mx-5">9</span> --}}
                </a>
            </li>


            {{-- <li >
				<a class="nav-link" href="#">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Quản lý danh mục slide</span>
				</a>
			</li>
			<li >
				<a class="nav-link" href="#">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Quản lý slide</span>
				</a>
			</li>
			<li >
				<a class="nav-link" href="#">
					<i class='bx bx-user-plus'></i>
					<span class="text">Tuyển dụng</span>
				</a>
			</li> --}}

        </ul>
        <ul class="side-menu">
            <li>
                <a class="nav-link" href="#">
                    <i class='bx bxs-cog'></i>
                    <span class="text">Cài đặt</span>
                </a>
            </li>
            <li>
                <a href="{{ url('/') }}" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Quay lại client</span>
                </a>
            </li>
            {{-- <li>
				<a href="" class="logout">
					<i class='bx bx-power-off'></i>
					<span class="text">Tắt nguồn</span>
				</a>
			</li> --}}
        </ul>
    </section>
    <!-- SIDEBAR -->



    <!-- CONTENT -->
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>
            <a href="#" class="nav-link">Quản lý Website - Admin: Ngô Bảo Real</a>
            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Tìm kiếm...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            <!-- <a href="#" class="notification">
    <i class='bx bxs-bell' ></i>
    <span class="num">8</span>
   </a>
   <a href="#" class="profile">
    <img src="images/people.png">
   </a> -->
            <a class="nav-link" href="">{{ Auth::user()->name }}</a>
            <div class="profile">
                <img src="{{ Auth::user()->img }}"
                    alt="">
                <ul class="profile-link">
                    <li><a class="nav-link" href="#"><i class='bx bxs-user-circle icon'></i> Hồ sơ</a></li>
                    <li><a class="nav-link" href="#"><i class='bx bxs-cog'></i> Cài đặt</a></li>
                    <li><a class="nav-link" href="{{ url('/logout') }}"><i class='bx bxs-log-out-circle'></i> Đăng xuất</a></li>
                </ul>
            </div>
        </nav>
        <!-- NAVBAR -->
        <!-- MAIN -->
        @yield('noidung')
        <!-- ENDMAIN -->

    </section>
    <!-- CONTENT -->

</body>
<script src="https://cdn.ckeditor.com/4.21.0/full/ckeditor.js"></script>
@include('ckfinder::setup')
<script>
    CKEDITOR.replace('tongquan', {
        filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
        language: 'vi',
    });

    CKEDITOR.replace('vitri', {
        filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}"
    });
    CKEDITOR.replace('matbang', {
        filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}"
    });
    CKEDITOR.replace('tienich', {
        filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}"
    });
    CKEDITOR.replace('thanhtoan', {
        filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}"
    });
</script>
<script src="/admin/js/script.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
</script>

</html>
