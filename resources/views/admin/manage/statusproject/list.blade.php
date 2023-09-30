@extends('admin.layout.layout')
@section('tieudetrang')
Danh sách trạng thái dự án
@endsection
@section('noidung')
    	<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Danh sách trạng thái dự án</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Bảng điều khiển</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Danh sách trạng thái dự án</a>
						</li>
					</ul>
				</div>
				<a href="{{ route('status-project.create') }}" class="btn-download nav-link">
                    <i class="bi bi-plus-circle-dotted"></i>
					<span class="text">Thêm trạng thái mới</span>
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
								<th>Tên</th>
								<th>Cài đặt</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Cho thuê</td>
								<td class="">	
									<a class="btn btn-outline-primary  m-1" href=""><i class="bi bi-trash3"></i></a>
									<a class="btn btn-outline-danger  m-1" href=""><i class="bi bi-pencil-square"></i></a>
								</td>
							</tr>
                            <tr>
								<td>2</td>
								<td>Đang bán</td>
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