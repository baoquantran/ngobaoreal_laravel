<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="images/ngobaoreal2.png" />

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="/admin/style.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<title>@yield('tieudetrang')</title>
</head>

<body style="background-color: #eee;">


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<!-- <i class='bx bxs-smile'></i>
			<span class="text">AdminHub</span> -->
			<img class="logo_admin" src="/admin/images/ngobaoreal2.png" alt="">
		</a>
		<ul class="side-menu top">
			<li>
				<a class="nav-link" href="/dashboard">
					<i class='bx bxs-dashboard'></i>
					<span class="text">Bảng điều khiển</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="{{ route('project.index') }}">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Quản lý dự án</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="{{ route('status-project.index') }}">
					<i class='bx bxs-doughnut-chart'></i>
					<span class="text">Quản lý trạng thái dự án</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="{{ route('post.index') }}">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Quản lý bài viết</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="{{ route('type-post.index') }}">
					<i class='bx bxs-shopping-bag-alt'></i>
					<span class="text">Quản lý loại tin</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="#">
					<i class='bx bxs-group'></i>
					<span class="text">Quản lý ký gửi</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="#">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Quản lý tư vấn</span>
				</a>
			</li>
			<li>
				<a class="nav-link" href="#">
					<i class='bx bxs-message-dots'></i>
					<span class="text">Quản lý báo giá</span>
				</a>
			</li>
			
		</ul>
		<ul class="side-menu">
			<li>
				<a class="nav-link" href="#">
					<i class='bx bxs-cog'></i>
					<span class="text">Cài đặt</span>
				</a>
			</li>
			<li>
				<a href="#" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Đăng xuất</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->



	<!-- CONTENT -->
	<section id="content">
		<!-- NAVBAR -->
		<nav>
			<i class='bx bx-menu'></i>
			<a href="#" class="nav-link">Quản lý trang web - Ngô Bảo Real</a>
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
			<a class="nav-link" href="">Trung Hiếu</a>
			<div class="profile">
				<img src="https://images.unsplash.com/photo-1517841905240-472988babdf9?ixid=MnwxMjA3fDB8MHxzZWFyY2h8NHx8cGVvcGxlfGVufDB8fDB8fA%3D%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60"
					alt="">
				<ul class="profile-link">
					<li><a class="nav-link" href="#"><i class='bx bxs-user-circle icon'></i> Hồ sơ</a></li>
					<li><a class="nav-link" href="#"><i class='bx bxs-cog'></i> Cài đặt</a></li>
					<li><a class="nav-link" href="#"><i class='bx bxs-log-out-circle'></i> Đăng xuất</a></li>
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
		CKEDITOR.replace('description', {
    		filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}",
			language: 'vi',
		});

		CKEDITOR.replace('vitriduan', {
			filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}"
		});
		CKEDITOR.replace('matbangduan', {
			filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}"
		});
		CKEDITOR.replace('tienichduan', {
			filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}"
		});
		CKEDITOR.replace('thanhtoanduan', {
			filebrowserBrowseUrl: "{{ route('ckfinder_browser') }}"
		});
	</script>
	<script src="/admin/js/script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</html>
