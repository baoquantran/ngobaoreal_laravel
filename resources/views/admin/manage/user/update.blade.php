@extends('admin.layout.layout')
@section('tieudetrang')
Sửa tài khoản người dùng
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
							<a class="active" href="#">Sửa tài khoản người dùng</a>
						</li>
					</ul>
				</div>
				<a href="{{ route('user.create') }}" class="btn-download nav-link">
                    <i class="bi bi-plus-circle-dotted"></i>
					<span class="text">Thêm mới tài khoản người dùng</span>
				</a>
			</div>
		<div class="table-data">
				<div class="order">
				<form class="row" method="post" action="{{route('user.update', $user->id_user)}}" enctype="multipart/form-data">
					@csrf @method('PUT')
						<div class="mb-3 col-md-12 col-12">
							<label for="exampleInputEmail1" class="form-label">Chọn ảnh</label>
							<input type="file" class="form-control p" id="exampleInputEmail1"aria-describedby="emailHelp" name="img__new">
						</div>
						<div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Họ và tên</label>
							<input type="text" class="form-control p" name="name" value="{{$user->name}}" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
                        <div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
							<input type="text" class="form-control p" name="phone" value="{{$user->phone}}" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
                        <div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Email</label>
							<input type="email" class="form-control p" id="exampleInputEmail1" name="email" value="{{$user->email}}"
								aria-describedby="emailHelp">
						</div>
                        <div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
							<input type="text" class="form-control p" id="exampleInputEmail1" name="address" value="{{$user->address}}"
								aria-describedby="emailHelp">
						</div>
                        <div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
							<input type="password" class="form-control p" id="exampleInputEmail1" name="password" value="{{$user->password}}"
								aria-describedby="emailHelp">
						</div>
						  <div class="mb-3 col-md-12 col-12">
							<label for="exampleInputPassword1" class="form-label">Chức</label>
							<select class="form-control" name="role_id" id="">
								@foreach($role as $r)
								<option name = "role_id" value="{{$r->id}}">{{$r->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="col-md-2 col-12 m-auto">
							<button type="submit" class="btn btn-primary">Cập nhật</button>
						</div>
					</form>
				</div>

			</div>
		</main>
		<!-- MAIN -->
@endsection
