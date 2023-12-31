@extends('admin.layout.layout')
@section('tieudetrang')
    Danh sách báo giá
@endsection
@section('noidung')
    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Danh sách báo giá</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Bảng điều khiển</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Quản lý báo giá</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-warning" disabled>
                Báo giá chưa xử lý: <span class="badge text-bg-danger">{{ $countZeroStatus }}</span>
            </button>
        </div>



        <div class="table-data">
            <div class="order">
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            {{-- <th>Họ và tên</th> --}}
                            <th>Thông tin khách hàng</th>
                            {{-- <th>Số điện thoại</th> --}}
                            <th>Lời nhắn từ khách hàng</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($countBaogia == 0)
                            <tr>

                                <td ></td>
                                <td ></td>
                                <td >Không có khách hàng cần báo giá</td>
                                <td ></td>
                                <td></td>
                            </tr>
                        @else
                            @foreach ($data_baogia as $dt_baogia)
                                <tr>
                                    <td class="py-5">{{ $dt_baogia->id_baogia }}</td>
                                    {{-- <td>{{ $dt_baogia->name }}</td> --}}
                                    <td>
                                        {{ $dt_baogia->name }} <br>
                                        {{ $dt_baogia->email }} <br>
                                        <b><i>Phone: </i></b>{{ $dt_baogia->phone }}
                                    </td>
                                    {{-- <td></td> --}}
                                    <td>{{ $dt_baogia->note }}</td>
                                    <td>
                                        @if ($dt_baogia->status == 0)
                                            <span class="alert alert-danger custom-style"><i class='bx bx-x'></i> Chưa xử
                                                lý</span>
                                        @else
                                            @if ($dt_baogia->status == 1)
                                                <span class="alert alert-warning custom-style"><i class='bx bx-send'></i>
                                                    Đang
                                                    xử lý</span>
                                            @else
                                                <span class="alert alert-success custom-style"><i class='bx bx-check'></i>
                                                    Đã xử
                                                    lý</span>
                                            @endif
                                        @endif
                                    </td>
                                    <td class="">
                                        <form action="{{ route('baogia.update', $dt_baogia->id_baogia) }}" method="POST">
                                            @csrf @method('PATCH')
                                            <button class="btn btn-outline-warning  m-1" type='submit'>
                                                <i class="bi bi-pencil-square"></i> Xử lý
                                            </button>
                                        </form>
                                        <div class="d-flex">

                                            <form action="{{ route('baogia.check', $dt_baogia->id_baogia) }}"
                                                method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button class="btn btn-outline-success m-1" type="submit">
                                                    <i class="bi bi-check"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('baogia.destroy', $dt_baogia->id_baogia) }}"
                                                method="POST">
                                                @csrf @method('DELETE')
                                                <button type="submit" class="btn btn-outline-danger m-1"><i
                                                        class="bi bi-trash3"></i></button>
                                            </form>
                                        </div>
                                        {{-- <a class="btn btn-outline-danger  m-1" href="">
                                            <i class="bi bi-trash3"></i></a> --}}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>

        </div>
    </main>
    <!-- MAIN -->
@endsection
