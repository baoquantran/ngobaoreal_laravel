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
					@if(Session::exists('thongbao'))
					<h4 class="alert alert-info text-center">{{ Session::get('thongbao') }}</h4>
					@endif
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
							@foreach($project as $pr)
							<tr>
								<td>{{$pr->id_pro}}</td>
								<td><img src="/{{$pr->img}}"></td>
								<td>{{$pr->name}}</td>
								<td>{{$pr->address}}</td>
								<td>{{$pr->name_room}}</td>
								<td>
									@if($pr->kygui == 0)
										Không nhận ký gửi
									@else
										Đang nhận ký gửi
									@endif
								</td>
								<td>{{$pr->name_status}}</td>
								<td class="">	
									
									<a class="btn btn-outline-danger  m-1" href="{{route('project.edit', $pr->id_pro)}}"><i class="bi bi-pencil-square"></i></a>
									
									<form class="d-inline" action="{{ route('project.destroy', $pr->id_pro) }}" method="POST">
										@csrf @method('DELETE')
										<button type='submit' onclick="return confirm('Xác nhận xóa')" class="btn btn-outline-primary"><i class="bi bi-trash3"></i></button>
									</form>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
				
			</div>
		</main>
		<!-- MAIN -->
@endsection