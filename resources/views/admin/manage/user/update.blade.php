@extends('admin.layout.layout')
@section('tieudetrang')
Sửa tài khoản người dùng
@endsection
@section('noidung')
    	<!-- MAIN -->
		<main>
		<div class="head-title">
				<div class="left">
					<h1>Thêm dự án</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Bảng điều khiển</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Sửa tài khoản người dùng</a>
						</li>
					</ul>
				</div>
				<a href="{{ route('user.create') }}" class="btn-download nav-link">
                    <i class="bi bi-plus-circle-dotted"></i>
					<span class="text">Thêm mới tài khoản người dùng</span>
				</a>
			</div>
		<div class="table-data">
				<div class="order">
					<form class="row">
						<div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Họ và tên</label>
							<input type="text" class="form-control p" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
                        <div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
							<input type="text" class="form-control p" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
                        <div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Email</label>
							<input type="text" class="form-control p" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
                        <div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
							<input type="text" class="form-control p" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
                        <div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
							<input type="text" class="form-control p" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
							  Admin
							</label>
						  </div>
						  <div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
							<label class="form-check-label" for="flexRadioDefault2">
							  Người viết bài
							</label>
						  </div>
						<div class="col-md-2 col-12 m-auto">
							<button type="submit" class="btn btn-primary">Cập nhật</button>
						</div>
					</form>
				</div>

			</div>
		</main>
		<!-- MAIN -->
@endsection
