@extends('admin.layout.layout')
@section('tieudetrang')
    Danh sách tư vấn
@endsection
@section('noidung')
    <!-- MAIN -->
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Danh sách tư vấn</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Bảng điều khiển</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Quản lý tư vấn</a>
                    </li>
                </ul>
            </div>
            <button type="button" class="btn btn-warning" disabled>
                Tư vấn chưa xử lý: <span class="badge text-bg-danger">{{ $countZeroStatus }}</span>
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
                            <th>Yêu cầu từ khách hàng</th>
                            <th>Trạng thái</th>
                            <th>Chức năng</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($countTuvan == 0)
                            <tr>

                                <td></td>
                                <td></td>
                                <td>Không có khách hàng cần tư vấn</td>
                                <td></td>
                                <td></td>
                            </tr>
                        @else
                            @foreach ($data_tuvan as $dt_tuvan)
                                <tr>
                                    <td class="py-5">{{ $dt_tuvan->id_tuvan }}</td>
                                    <td>
                                        {{ $dt_tuvan->name }} <br>
                                        {{ $dt_tuvan->email }} <br>
                                        <b><i>Phone: </i></b>{{ $dt_tuvan->phone }}
                                    </td>
                                    <td>
                                        {{ $dt_tuvan->note }}
                                    </td>
                                    <td>
                                        @if ($dt_tuvan->status == 0)
                                            <span class="alert alert-danger custom-style"><i class='bx bx-x'></i> Chưa xử
                                                lý</span>
                                        @else
                                            @if ($dt_tuvan->status == 1)
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
                                        <form action="{{ route('tuvan.update', $dt_tuvan->id_tuvan) }}" method="POST">
                                            @csrf @method('PATCH')
                                            <button class="btn btn-outline-warning  m-1" type='submit'>
                                                <i class="bi bi-pencil-square"></i> Xử lý
                                            </button>
                                        </form>
                                        <div class="d-flex">

                                            <form action="{{ route('tuvan.check', $dt_tuvan->id_tuvan) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <button class="btn btn-outline-success m-1" type="submit">
                                                    <i class="bi bi-check"></i>
                                                </button>
                                            </form>
                                            <form action="{{ route('tuvan.destroy', $dt_tuvan->id_tuvan) }}" method="POST">
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
