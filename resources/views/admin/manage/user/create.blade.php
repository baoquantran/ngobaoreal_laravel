@extends('admin.layout.layout')
@section('tieudetrang')
Thêm tài khoản người dùng
@endsection
@section('noidung')
    	<!-- MAIN -->
		<main>
		<div class="head-title">
				<div class="left">
					<h1>Thêm người dùng</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Bảng điều khiển</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Thêm tài khoản người dùng</a>
						</li>
					</ul>
				</div>
			</div>
		<div class="table-data">
				<div class="order">
					<form class="row" action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
						@csrf
						<div class="mb-3 col-md-12 col-12">
							<label for="exampleInputEmail1" class="form-label">Chọn ảnh</label>
							<input type="file" class="form-control p" id="exampleInputEmail1"aria-describedby="emailHelp" name="img__new" required>
						</div>
						<div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Họ và tên</label>
							<input type="text" class="form-control p" name="name" id="exampleInputEmail1"
								aria-describedby="emailHelp" required>
						</div>
                        <div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
							<input type="text" class="form-control p" name="phone" id="exampleInputEmail1"
								aria-describedby="emailHelp" required>
						</div>
                        <div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Email</label>
							<input type="email" class="form-control p" name="email" id="exampleInputEmail1"
								aria-describedby="emailHelp" required>
						</div>
                        <div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
							<input type="text" class="form-control p" name="address" id="exampleInputEmail1"
								aria-describedby="emailHelp" required>
						</div>
                        <div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Mật khẩu</label>
							<input type="password" class="form-control p" name="password" id="exampleInputEmail1"
								aria-describedby="emailHelp" required>
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
							<button type="submit" class="btn btn-primary">Thêm</button>
						</div>
					</form>
				</div>

			</div>
		</main>
		<!-- MAIN -->
@endsection
