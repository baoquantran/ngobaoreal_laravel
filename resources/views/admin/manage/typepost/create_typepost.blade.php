@extends('admin.layout.layout')
@section('tieudetrang')
Thêm loại tin
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
							<a class="active" href="#">Thêm mới loại tin</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download nav-link">
                    <i class="bi bi-plus-circle-dotted"></i>
					<span class="text">Thêm mới loại tin</span>
				</a>
			</div>
		<div class="table-data">
				<div class="order">
					<form class="row">
						<div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Tên loại tin</label>
							<input type="text" class="form-control p" id="exampleInputEmail1"
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
						<div class="col-md-2 col-12 m-auto">
							<button type="submit" class="btn btn-primary">Lưu loại tin</button>
						</div>
					</form>
				</div>

			</div>
		</main>
		<!-- MAIN -->
@endsection
