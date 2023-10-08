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
					@if(Session::exists('thongbao'))
  					<h4 class="alert alert-info text-center">{{ Session::get('thongbao') }}</h4>
					@endif
						<thead>
							<tr>
								<th>ID tin</th>
								<th>Ảnh</th>
								<th>Tiêu đề</th>
								<th>Ngày đăng</th>
								<th>Ngày cập nhật</th>
								<th>Loại</th>
								<th>Trạng thái</th>
								<th>Người đăng</th>
								<th>Cài đặt</th>
							</tr>
						</thead>
						<tbody>
							@foreach($post as $p)
							<tr>
								<td>{{$p->id_post}}</td>
								<td><img src="/{{$p->img}}"></td>
								<td>{{$p->title}}</td>
								<td>{{$p->new_created_at}}</td>
								<td>{{$p->new_updated_at}}</td>
								<td>{{$p->name}}</td>
								<td>Đang ẩn</td>
								<td>{{$p->poster}}</td>
								<td class="">	
								<a class="btn btn-outline-danger  m-1" href="{{route('post.edit', $p->id_post)}}"><i class="bi bi-pencil-square"></i></a>
									
									<form class="d-inline" action="{{ route('post.destroy', $p->id_post) }}" method="POST">
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