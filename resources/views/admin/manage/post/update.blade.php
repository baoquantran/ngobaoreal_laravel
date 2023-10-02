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
							<a class="active" href="#">Sửa tin</a>
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
					<form class="row" method="post" action="{{route('post.update', $post->id_post)}}" enctype="multipart/form-data">
						@csrf @method('PUT')
						<div class="mb-3 col-md-6 col-12">
							<label for="exampleInputEmail1" class="form-label">Tiêu đề bài viết</label>
							<input type="text" class="form-control p" name="title" value="{{$post->title}}" id="exampleInputEmail1"
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
							<input name="hidden" type="radio" value="0"> hiện
							<input name="hidden" type="radio" value="1" checked> ẩn
						</div>
						<div class="mb-3 form-check">
							<input name="hot" type="radio" value="0"> Nêu nổi bật
							<input name="hot" type="radio" value="1" checked> Không nêu nổi bật
						</div>
                        <div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Mô tả bài viết</h3>
						<textarea name="vitri" id="" cols="30" rows="10">{{$post->subtitle}}</textarea>
						</div>
						<div class="mb-3 col-md-12 col-12">
						<h3 class="text-center">Nội dung bài viết</h3>
						<textarea name="tongquan" id="" cols="30" rows="10">{{$post->content}}</textarea>
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
