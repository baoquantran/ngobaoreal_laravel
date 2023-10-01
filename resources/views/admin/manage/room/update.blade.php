@extends('admin.layout.layout')
@section('tieudetrang')
Cập nhật loại dự án
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
							<a class="active" href="#">Thêm mới trạng thái dự án</a>
						</li>
					</ul>
				</div>
				<a href="{{ route('room.create') }}" class="btn-download nav-link">
                    <i class="bi bi-plus-circle-dotted"></i>
					<span class="text">Thêm mới loại dự án</span>
				</a>
			</div>
		<div class="table-data">
				<div class="order">
					<form class="row" method="post" action="{{route('room.update', $room->id_room)}}">
					@csrf @method('PUT')
						<div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Tên trạng thái</label>
							<input type="text" name="name" class="form-control p" value="{{$room->name}}" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
                        <div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Thứ tự</label>
							<input type="number" name="number" class="form-control p" value="{{$room->number}}" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
						<div class="mb-3 col-md-12">
							<input name="hidden" type="radio" value="0" {{ $room->hidden==0? "checked":"" }} > Ẩn
							<input name="hidden" type="radio" value="1" {{ $room->hidden==1? "checked":"" }} > Hiện
						</div class="mb-3 col-md-2">
							<button type="submit" class="btn btn-primary">Lưu dự án</button>
						</div>
					</form>
				</div>

			</div>
		</main>
		<!-- MAIN -->
@endsection
