@extends('admin.layout.layout')
@section('tieudetrang')
Danh sách dự án
@endsection
@section('noidung')
    	<!-- MAIN -->
		<main>
		<div class="head-title">
				<div class="left">
					<h1>Thêm tin mới</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Bảng điều khiển</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Sửa tin</a>
						</li>
					</ul>
				</div>
				<a href="{{ route('post.create') }}" class="btn-download nav-link">
                    <i class="bi bi-plus-circle-dotted"></i>
					<span class="text">Thêm tin mới</span>
				</a>
			</div>
		<div class="table-data">
				<div class="order">
					<form class="row">
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label">Tiêu đề bài viết</label>
							<input type="text" class="form-control p" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputPassword1" class="form-label">Loại tin</label>
							<select class="form-control" name="" id="">
								<option value="">Đang bán</option>
								<option value="">Cho thuê</option>
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
							<label class="form-check-label" for="exampleCheck1">Nổi bật</label>
						</div>
                        <div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Mô tả bài viết</h3>
						<textarea name="vitriduan" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Nội dung bài viết</h3>
						<textarea name="description" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="col-md-2 col-12 m-auto">
							<button type="submit" class="btn btn-primary">Lưu dự án</button>
						</div>
					</form>
				</div>

			</div>
		</main>
		<!-- MAIN -->
@endsection
