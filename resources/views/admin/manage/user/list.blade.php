@extends('admin.layout.layout')
@section('tieudetrang')
Danh sách dự án
@endsection
@section('noidung')
    	<!-- MAIN -->
		<main>
			<div class="head-title">
				<div class="left">
					<h1>Danh sách người dùng</h1>
					<ul class="breadcrumb">
						<li>
							<a href="/dashboard">Bảng điều khiển</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="/user">Danh sách người dùng</a>
						</li>
					</ul>
				</div>
				<a href="{{ route('user.create') }}" class="btn-download nav-link">
                    <i class="bi bi-plus-circle-dotted"></i>
					<span class="text">Thêm người dùng mới</span>
				</a>
			</div>

			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Danh sách người dùng</h3>
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
								<th>Chức vụ</th>
								<th>Cài đặt</th>
							</tr>
						</thead>
						<tbody>
							@foreach($user as $u)
							<tr>
								<td>{{$u->id_user}}</td>
								<td class="anhuser"><img src="/{{$u->img}}"></td>
								<td>{{$u->name_users}}</td>
								<td>{{$u->address}}</td>
								<td>{{$u->name_role}}</td>
								<td class="">	
								<a class="btn btn-outline-danger  m-1" href="{{route('user.edit', $u->id_user)}}"><i class="bi bi-pencil-square"></i></a>
									
									<form class="d-inline" action="{{ route('user.destroy', $u->id_user) }}" method="POST">
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