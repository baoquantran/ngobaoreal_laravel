@extends('admin.layout.layout')
@section('tieudetrang')
Danh sách báo giá
@endsection
@section('noidung')
    	<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Danh sách báo giá</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Bảng điều khiển</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Quản lý báo giá</a>
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
					<div class="head">
						<h3>Recent Orders</h3>
						<i class='bx bx-search' ></i>
						<i class='bx bx-filter' ></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>STT</th>
								<th>Ảnh</th>
								<th>Tên</th>
								<th>Địa chỉ</th>
								<th>Loại</th>
								<th>Ký gửi</th>
								<th>Trạng thái</th>
								<th>Cài đặt</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
@endsection