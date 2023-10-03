<div class="">
    <div class="menu ">
        <nav class="navbar navbar-expand-lg thanh-dieu-huong" id="thanhDieuHuong">
            <a href="/">
                <div class="navbar-brand ms-5">
                    <img src="/user/img/ngobaoreal.png" alt="" width="120px">
                </div>
            </a>
            <div class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menuChinh" aria-controls="menuChinh"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"><i class="fa-solid fa-caret-down"></i></span>
            </div>
            <div class="collapse navbar-collapse" id="menuChinh">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item p-2">
                        <a class="nav-link text-menu text-white" href="/masterise-central-point">masterise center
                            point</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link text-menu text-white" href="/lumiere-boulevard">lumiere boulevard</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link text-menu text-white" href="/lumiere-riverside"> LUMIÈRE Riverside</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link text-menu text-white" href="/delasol"> Delasol</a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link text-menu text-white" href="/themarq"> The Marq </a>
                    </li>
                    <li class="nav-item p-2">
                        <a class="nav-link text-menu text-white" href="/ky-gui">Ký gửi</a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Hiển thị form nằm ngang dưới thanh điều hướng -->
        <form class="form-menu row" id="kygui" method="post"
        action="{{ route('kygui.store') }}">
        @csrf
            <div class="row col-3">
                <div class="d-flex justify-content-center">
                    <h1 class="text-center text-primary">Tư vấn và ký gửi</h1>
                </div>
            </div>
            <div class="row col-9">
                <div class="col-md-5 mt-2 col-12 row">
                    <div class="col-6">
                        <input type="radio" name="options" value="1" id="option1" checked>
                        <label for="option1">Tìm mua/Thuê</label>
                    </div>
                    <div class="col-6">
                        <input type="radio" name="options" value="2" id="option2">
                        <label for="option2">Ký gửi bán/thuê</label>
                    </div>
                    <div class="col-6">
                        <input type="radio" name="options" value="3" id="option3">
                        <label for="option3">Xem bảng giá</label>
                    </div>
                    <div class="col-6">
                        <input type="radio" name="options" value="4" id="option4">
                        <label for="option4">Hẹn xem nhà</label>
                    </div>
                </div>
                <div class="col-md-2 mt-2 col-12">
                    <input type="text" class="form-control" name="name" id="hoTen" placeholder="Họ và Tên" required>
                </div>
                <div class="col-md-2 mt-2 col-12">
                    <input type="text" class="form-control" name="phone" id="soDienThoai" placeholder="Số Điện Thoại" required>
                </div>
                <div class="col-md-2 mt-2 col-12">
                    <input type="text" class="form-control" name="email" id="email" placeholder="Email" pattern="/^[a-zA-Z0-9.!#$%&’*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" required>
                </div>
                <div class="col-md-1 mt-2 col-12">
                    <button type="submit" class="btn btn-primary" id="liveToastBtn">Gửi</button>
                </div>
            </div>
        </form>
    </div>
</div>
