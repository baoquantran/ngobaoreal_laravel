@extends('admin.layout.layout')
@section('tieudetrang')
@endsection
@section('noidung')
		<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Tổng quan</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Bảng điều khiển</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Tổng quan</a>
						</li>
					</ul>
				</div>
				<a href="#" class="btn-download">
					<i class='bx bxs-cloud-download'></i>
					<span class="text">Download PDF</span>
				</a>
			</div>

			<ul class="box-info">
				<li>
					<i class='bx bxs-calendar-check'></i>
					<span class="text">
						<h3>15</h3>
						<p>Tổng số dự án</p>
					</span>
				</li>
				<li>
					<i class='bx bxs-group'></i>
					<span class="text">
						<h3>3</h3>
						<p>Số user</p>
					</span>
				</li>
			</ul>


			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Dự án</h3>
						<i class='bx bx-search'></i>
						<i class='bx bx-filter'></i>
					</div>
					<table>
						<thead>
							<tr>
								<th>Tên dự án</th>
								<th>Loại</th>
								<th>Trạng thái</th>
								<th>Địa chỉ</th>
							</tr>
						</thead>
						<tbody>
							<!-- <tr>
								<td>
									<img src="images/people.png">
									<p>John Doe</p>
								</td>
								<td>01-10-2021</td>
								<td><span class="status completed">Đã hoàn thành</span></td>
							</tr> -->
							<tr>
								<td>

									<p>MASTERIES CENTER POINT</p>
								</td>
								<td>Căn hộ</td>
								<td>Đang bán</td>
								<td>129/9a Đông Bắc, TCH, Q12</td>
							</tr>
						</tbody>
					</table>
				</div>
				<div class="todo">
					<div class="head">
						<h3>Ghi chú</h3>
						<div class="todo_box">
							<input type="text" name="" id="inputBox" placeholder="Ghi chú gì đó ...">
							<button onclick="addTask()">
								<i class='bx bx-plus'></i>
							</button>
						</div>
						<i class='bx bx-trash' onclick="delAllTask()"></i>
					</div>
					<ul id="list-container">
						<!-- <li class="checked">task 1</li>
						<li>task 1</li>
						<li>task 1</li> -->
					</ul>
				</div>
			</div>
		</main>
		<!-- MAIN -->
@endsection
