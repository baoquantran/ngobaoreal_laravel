@extends('admin.layout.layout')
@section('tieudetrang')
Danh sách dự án
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
							<a class="active" href="#">Danh sách dự án</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download nav-link">
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
							<tr>
								<td>1</td>
								<td><img src="https://masterisehomes.com/masteri-centre-point/themes/storefront/public/assets/images/du-an-masteri-centre-point-masterise-homes_1920x1080.png"></td>
								<td>Masteries Center Point</td>
								<td>Thôn tri c1, Dlie Yang, Eahleo, DAK LAK</td>
								<td>Căn hộ</td>
								<td>Đang nhận ký gửi</td>
								<td>Đang bán</td>
								<td class="d-flex m-auto">	
									<a class="btn btn-outline-primary  m-1 " href=""><i class="bi bi-trash3"></i></a>
									<a class="btn btn-outline-danger  m-1" href=""><i class="bi bi-pencil-square"></i></a>
								</td>
							</tr>
                            <tr>
								<td>1</td>
								<td><img src="https://masterisehomes.com/masteri-centre-point/themes/storefront/public/assets/images/du-an-masteri-centre-point-masterise-homes_1920x1080.png"></td>
								<td>Masteries Center Point</td>
								<td>Thôn tri c1, Dlie Yang, Eahleo, DAK LAK</td>
								<td>Căn hộ</td>
								<td>Đang nhận ký gửi</td>
								<td>Đang bán</td>
								<td class="d-flex m-auto">	
									<a class="btn btn-outline-primary  m-1 " href=""><i class="bi bi-trash3"></i></a>
									<a class="btn btn-outline-danger  m-1" href=""><i class="bi bi-pencil-square"></i></a>
								</td>
							</tr>
                            <tr>
								<td>1</td>
								<td><img src="https://masterisehomes.com/masteri-centre-point/themes/storefront/public/assets/images/du-an-masteri-centre-point-masterise-homes_1920x1080.png"></td>
								<td>Masteries Center Point</td>
								<td>Thôn tri c1, Dlie Yang, Eahleo, DAK LAK</td>
								<td>Căn hộ</td>
								<td>Đang nhận ký gửi</td>
								<td>Đang bán</td>
								<td class="d-flex m-auto">	
									<a class="btn btn-outline-primary  m-1 " href=""><i class="bi bi-trash3"></i></a>
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