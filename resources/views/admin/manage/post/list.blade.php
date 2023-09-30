@extends('admin.layout.layout')
@section('tieudetrang')
Danh sách tin
@endsection
@section('noidung')
    	<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Danh sách dự án</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Bảng điều khiển</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Danh sách tin tức</a>
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
								<th>Tiêu đề</th>
								<th>Ngày đăng</th>
								<th>Loại</th>
								<th>Lượt xem</th>
								<th>Trạng thái</th>
								<th>Cài đặt</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td><img src="https://masterisehomes.com/masteri-centre-point/themes/storefront/public/assets/images/du-an-masteri-centre-point-masterise-homes_1920x1080.png"></td>
								<td>Một ngày sống đẹp</td>
								<td>27/9/2023</td>
								<td>Tin tức</td>
								<td>13</td>
								<td>Đang ẩn</td>
								<td class="">	
									<a class="btn btn-outline-primary  m-1" href=""><i class="bi bi-trash3"></i></a>
									<a class="btn btn-outline-danger  m-1" href=""><i class="bi bi-pencil-square"></i></a>
								</td>
							</tr>
							<tr>
								<td>1</td>
								<td><img src="https://masterisehomes.com/masteri-centre-point/themes/storefront/public/assets/images/du-an-masteri-centre-point-masterise-homes_1920x1080.png"></td>
								<td>Một ngày sống đẹp</td>
								<td>27/9/2023</td>
								<td>Tin tức</td>
								<td>13</td>
								<td>Đang ẩn</td>
								<td class="">	
									<a class="btn btn-outline-primary  m-1" href=""><i class="bi bi-trash3"></i></a>
									<a class="btn btn-outline-danger  m-1" href=""><i class="bi bi-pencil-square"></i></a>
								</td>
							</tr>
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
@endsection