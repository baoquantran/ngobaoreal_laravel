@extends('admin.layout.layout')
@section('tieudetrang')
Danh sách dự án
@endsection
@section('noidung')
    	<!-- MAIN -->
		<main>
		<div class="head-title">
				<div class="left">
					<h1>Thêm tin mới</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Bảng điều khiển</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Thêm tin mới</a>
						</li>
					</ul>
				</div>
			</div>
		<div class="table-data">
				<div class="order">
					<form class="row" action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
					@csrf
					<input hidden name="poster" value="{{ Auth::user()->name }}" type="text">
					<input hidden name="slug" id="input2" type="text">
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label">Tiêu đề bài viết</label>
							<input type="text" name="title" class="form-control p" id="input1"
								aria-describedby="emailHelp">
						</div>
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputPassword1" class="form-label">Loại</label>
							<select class="form-control" name="typepost" id="">
								@foreach($typepost as $tp)
								<option name = "typepost" value="{{$tp->id_cp}}">{{$tp->name}}</option>
								@endforeach
							</select>
						</div>
						<div class="mb-3 col-md-12 col-12">
							<label for="exampleInputEmail1" class="form-label">Chọn ảnh</label>
							<input type="file" class="form-control p" id="exampleInputEmail1"aria-describedby="emailHelp" name="img__new">
						</div>
						<div class="mb-3 form-check">
							<input name="hidden" type="radio" value="0" checked> Ẩn
							<input name="hidden" type="radio" value="1"> Hiện
						</div>
						<div class="mb-3 form-check">
							<input name="hot" type="radio" value="0"> Nêu nổi bật
							<input name="hot" type="radio" value="1" checked> Không nêu nổi bật
						</div>
                        <div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Mô tả bài viết</h3>
						<textarea name="vitri" id="" cols="30" rows="10"></textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Nội dung bài viết</h3>
						<textarea name="tongquan" id="" cols="30" rows="10"></textarea>
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
