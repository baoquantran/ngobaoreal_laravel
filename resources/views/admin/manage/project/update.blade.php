@extends('admin.layout.layout')
@section('tieudetrang')
Cập nhật dự án
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
							<a class="active" href="#">Cập nhật dự án</a>
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
					<form class="row" method="post" action="{{route('project.update', $product->id_pro)}}" enctype="multipart/form-data">
					@csrf @method('PUT')
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label">Tên dự án</label>
							<input type="text" class="form-control p" name="name" value="{{$product->name}}" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
							<input type="text" class="form-control p" id="exampleInputEmail1" name="address" value="{{$product->address}}"
								aria-describedby="emailHelp">
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label">Nhập giá từ</label>
							<input type="number" class="form-control p" name="from_price" value="{{$product->from_price}}" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label">Nhập giá đến</label>
							<input type="number" class="form-control p" id="exampleInputEmail1" name="to_price" value="{{$product->to_price}}"
								aria-describedby="emailHelp">
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputPassword1" class="form-label">Trạng thái</label>
							<select class="form-control" name="id_status" id="">
								@foreach($status as $st)
								<option name ="id_status" value="{{$st->id_status}}">{{$st->name_status	}}</option>
								@endforeach
							</select>
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputPassword1" class="form-label">Loại</label>
							<select class="form-control" name="id_room" id="">
								@foreach($room as $r)
								<option name = "id_room" value="{{$r->id_room}}">{{$r->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="mb-3 col-md-12 col-12">
							<label for="exampleInputEmail1" class="form-label">Chọn ảnh</label>
							<input type="file"  class="form-control p" id="exampleInputEmail1"aria-describedby="emailHelp" name="img__new" value="{{$product->img}}" name="img__new">
						</div>
						<div class="mb-3 form-check">
							<input name="hide" type="radio" value="0"> hiện
							<input name="hide" type="radio" value="1" checked> ẩn
						</div>
						<div class="mb-3 form-check">
							<input name="kygui" type="radio" value="0"> Không nhận ký gửi
							<input name="kygui" type="radio" value="1" checked> Nhận ký gửi
							<label class="form-check-label" for="exampleCheck1">Ký gửi</label>
						</div>
						
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Tổng quan dự án</h3>
						<textarea name="tongquan"id="" cols="30" rows="10">{{$product->tongquan}}</textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Vị trí dự án dự án</h3>
						<textarea name="vitri" id="" cols="30" rows="10">{{$product->vitri}}</textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Tiện ích dự án</h3>
						<textarea name="tienich"  id="" cols="30" rows="10">{{$product->thanhtoan}}</textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Mặt bằng dự án</h3>
						<textarea name="matbang"  id="" cols="30" rows="10">{{$product->matbang}}</textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Thanh toán</h3>
						<textarea name="thanhtoan" id="" cols="70" rows="10">{{$product->thanhtoan}}</textarea>
						</div>
						<div class="col-md-2 col-12 m-auto">
							<button type="submit" class="btn btn-outline-warning">Cập nhật</button>
						</div>
					</form>
				</div>

			</div>
		</main>
		<!-- MAIN -->
@endsection
