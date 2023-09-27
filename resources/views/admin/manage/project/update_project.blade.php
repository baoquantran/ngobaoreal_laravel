@extends('admin.layout.layout')
@section('tieudetrang')
Cập nhật dự án
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
							<a class="active" href="#">Cập nhật dự án</a>
						</li>
					</ul>
				</div>
				<a href="{{ route('project.create') }}" class="btn-download nav-link">
                    <i class="bi bi-plus-circle-dotted"></i>
					<span class="text">Thêm dự án mới</span>
				</a>
			</div>
		<div class="table-data">
				<div class="order">
					<form class="row">
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label">Tên dự án</label>
							<input type="text" class="form-control p" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
							<input type="text" class="form-control p" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label">Nhập giá từ</label>
							<input type="number" class="form-control p" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label">Nhập giá đến</label>
							<input type="number" class="form-control p" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputPassword1" class="form-label">Trạng thái</label>
							<select class="form-control" name="" id="">
								<option value="">Đang bán</option>
								<option value="">Cho thuê</option>
							</select>
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputPassword1" class="form-label">Loại</label>
							<select class="form-control" name="" id="">
								<option value="">Căn hộ</option>
								<option value="">Khách sạn</option>
							</select>
						</div>
						<div class="mb-3 col-md-12 col-12">
							<label for="exampleInputEmail1" class="form-label">Chọn ảnh</label>
							<input type="file" class="form-control p" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
							<label class="form-check-label" for="flexRadioDefault1">
							  Ẩn
							</label>
						  </div>
						  <div class="form-check">
							<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
							<label class="form-check-label" for="flexRadioDefault2">
							  Hiện
							</label>
						  </div>
						<div class="mb-3 form-check">
							<input type="checkbox" class="form-check-input" id="exampleCheck1">
							<label class="form-check-label" for="exampleCheck1">Ký gửi</label>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Tổng quan dự án</h3>
						<textarea name="description" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Vị trí dự án dự án</h3>
						<textarea name="vitriduan" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Tiện ích dự án</h3>
						<textarea name="tienichduan" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Mặt bằng dự án</h3>
						<textarea name="matbangduan" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Thanh toán</h3>
						<textarea name="thanhtoanduan" id="" cols="70" rows="10"></textarea>
						</div>
						<div class="col-md-2 col-12 m-auto">
							<button type="submit" class="btn btn-outline-warning">Cập nhật</button>
						</div>
					</form>
				</div>

			</div>
		</main>
		<!-- MAIN -->
@endsection
