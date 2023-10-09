@extends('admin.layout.layout')
@section('tieudetrang')
Thêm loại tin
@endsection
@section('noidung')
    	<!-- MAIN -->
		<main>
		<div class="head-title">
				<div class="left">
					<h1>Thêm loại tin</h1>
					<ul class="breadcrumb">
						<li>
							<a href="#">Bảng điều khiển</a>
						</li>
						<li><i class='bx bx-chevron-right'></i></li>
						<li>
							<a class="active" href="#">Thêm loại tin mới</a>
						</li>
					</ul>
				</div>
			</div>
		<div class="table-data">
				<div class="order">
					<form class="row" method="post" action="{{route('type-post.store')}}"> @csrf
						<div class="mb-3 col-md-12">
							<label for="exampleInputEmail1" class="form-label">Tên trạng thái</label>
							<input type="text" class="form-control p" name="name" id="input1"
								aria-describedby="emailHelp" required>
							<input hidden type="text" name="catep_slug" id="input2">
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
