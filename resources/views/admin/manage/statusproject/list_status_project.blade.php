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
					@if(Session::exists('thongbao'))
  					<h4 class="alert alert-info text-center">{{ Session::get('thongbao') }}</h4>
					@endif
						<thead>
							<tr>
								<th>STT</th>
								<th>Tên</th>
								<th>Cài đặt</th>
							</tr>
						</thead>
						<tbody>
							@foreach($status as $st)
							<tr>
								<td>{{$st->id_status}}</td>
								<td>{{$st->name}}</td>
								<td class="">	
									<a class="btn btn-outline-primary  m-1" href="{{route('status-project.edit',$st->id_status)}}"><i class="bi bi-pencil-square"></i></a>
									<!-- <a class="btn btn-outline-danger  m-1" href=""><i class="bi bi-trash3"></i></a> -->
									<form class="d-inline" action="{{ route('status-project.destroy', $st->id_status) }}" method="POST">
  									@csrf @method('DELETE')
									<button type='submit' onclick="return confirm('Xóa hả')" class="btn btn-outline-danger">
									<i class="bi bi-trash3"></i>
									</button>
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