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
							<a class="active" href="#">Thêm mới trạng thái dự án</a>
						</li>
					</ul>
				</div>
				<a href="{{ route('status-project.create') }}" class="btn-download nav-link">
                    <i class="bi bi-plus-circle-dotted"></i>
					<span class="text">Thêm mới trạng thái dự án</span>
				</a>
			</div>
		<div class="table-data">
				<div class="order">
					<form class="row" method="post" action="{{route('status-project.update', $status->id_status)}}">
					@csrf @method('PUT')
						<div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Tên trạng thái</label>
							<input type="text" name="name" class="form-control p" value="{{$status->name}}" id="exampleInputEmail1"
								aria-describedby="emailHelp">
						</div>
						<div class="mb-3 col-md-12">
							<input name="hidden" type="radio" value="0" {{ $status->hidden==0? "checked":"" }} > Ẩn
							<input name="hidden" type="radio" value="1" {{ $status->hidden==1? "checked":"" }} > Hiện
						</div class="mb-3 col-md-2">
							<button type="submit" class="btn btn-primary">Lưu dự án</button>
						</div>
					</form>
				</div>

			</div>
		</main>
		<!-- MAIN -->
@endsection
