@extends('admin.layout.layout')
@section('tieudetrang')
Thêm trạng thái dự án
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
							<a class="active" href="#">Thêm mới loại dự án</a>
						</li>
					</ul>
				</div>
			</div>
		<div class="table-data">
				<div class="order">
					<form class="row" method="post" action="{{route('room.store')}}"> @csrf
						<div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Tên loại</label>
							<input type="text" class="form-control p" name="name" id="exampleInputEmail1"
								aria-describedby="emailHelp" required>
						</div>
                        <div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Thứ tự</label>
							<input type="number" class="form-control p" name="number" id="exampleInputEmail1"
								aria-describedby="emailHelp" required>
						</div>
						<div class='mb-3 px-2'> 
					        <input name="hidden" type="radio" value="0"> Ẩn
					        <input name="hidden" type="radio" value="1" checked> Hiện
					    </div>
						<div class="col-md-2 col-12 m-auto">
							<button type="submit" class="btn btn-primary">Lưu dự án</button>
						</div>
					</form>
				</div>

			</div>
		</main>
		<!-- MAIN -->
@endsection
