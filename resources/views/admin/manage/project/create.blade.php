@extends('admin.layout.layout')
@section('tieudetrang')
Danh sách dự án
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
							<a class="active" href="#">Thêm mới dự án</a>
						</li>
					</ul>
				</div>
			</div>
		<div class="table-data">
				<div class="order">
					<form class="row" action="{{route('project.store')}}" method="post" enctype="multipart/form-data">
					@csrf
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label" >Tên dự án</label>
							<input type="text" class="form-control p" name="name" id="input1"
								aria-describedby="emailHelp" required>
							<input hidden name="slug" id="input2" type="text">
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label">Tên đường</label>
							<input type="text" class="form-control p" name = "address" id="exampleInputEmail1"
								aria-describedby="emailHelp" required>
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputPassword1" class="form-label">Chọn tỉnh</label>
							<select class="form-select" name="id_local1" id="provinceSelect">
								@foreach($city as $c)
								<option name ="id_local" value="{{$c->id_local}}">{{$c->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputPassword1" class="form-label">Chọn Quận</label>
							<select class="form-select" name="id_local2" id="parentIDSelect">
								@foreach($district as $d)
								<option name ="id_local" value="{{$d->id_local}}">{{$d->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label">Nhập giá từ</label>
							<input type="number" class="form-control p" name="from_price" id="exampleInputEmail1"
								aria-describedby="emailHelp" required>
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label">Nhập giá đến</label>
							<input type="number" class="form-control p" name="to_price" id="exampleInputEmail1"
								aria-describedby="emailHelp" required>
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
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputPassword1" class="form-label">Tiến độ dự án</label>
							<select class="form-control" name="progress" id="">
								
								<option name="progress" value="0">Đang triễn khai</option>
								<option name="progress" value="1">Đã hoàn thành</option>
							</select>
						</div>
						<div class="mb-3 col-md-12 col-12">
							<label for="exampleInputEmail1" class="form-label">Chọn ảnh</label>
							<input type="file" class="form-control p" id="exampleInputEmail1"aria-describedby="emailHelp" name="img__new" required>
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
						<textarea  name="tongquan" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Vị trí dự án dự án</h3>
						<textarea  name="vitri" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Tiện ích dự án</h3>
						<textarea  name="tienich" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Mặt bằng dự án</h3>
						<textarea  name ="matbang" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Thanh toán</h3>
						<textarea name="thanhtoan" id="" cols="70" rows="10"></textarea>
						</div>
						<div class="col-md-2 col-12 m-auto">
							<button type="submit" class="btn btn-primary">Lưu dự án</button>
						</div>
					</form>
				</div>

			</div>
		</main>
		<!-- MAIN -->

		<script>
			// Lấy tham chiếu đến hai input
			var input1 = document.getElementById('input1');
			var input2 = document.getElementById('input2');

			// Thêm sự kiện 'input' cho input1
			input1.addEventListener('input', function () {
				// Sao chép giá trị của input1 vào input2
				input2.value = input1.value;
			});
		</script>
@endsection
