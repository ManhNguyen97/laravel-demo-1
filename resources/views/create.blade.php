@extends('layout')
@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-8">
            <h3>Thêm nhân viên:</h3>
          </div>
          <div class="col-md-8">
            <a href="{{ route('nhanvien.index') }}" class="btn btn-primary">Danh sách nhân viên</a>
          </div>
        </div>
      </div>

      <div class="card-body">
        <form action="{{ route('nhanvien.store') }}" method="POST">
          @csrf
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label>Mã nhân viên: </label>
                <input type="text" name="MaNV" class="form-control">
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Họ & Tên: </label>
                <input type="text" name="HoTen" class="form-control">
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Ngày sinh: </label>
                <input type="date" name="NgaySinh" class="form-control">
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Giới tính: </label>
                <select name="GioiTinh" class="form-select">
                  <option selected>Chọn giới tính</option>
                  <option value="Nam">Nam</option>
                  <option value="Nữ">Nữ</option>
                </select>
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Địa chỉ: </label>
                <input type="text" name="DiaChi" class="form-control">
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Số điện thoại: </label>
                <input type="number" name="SDT" class="form-control">
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Ghi chú: </label>
                <input type="text" name="GhiChu" class="form-control">
              </div>
            </div>
          </div>
          <br>
          <button class="btn btn-primary" type="submit">Lưu</button>
        </form>
      </div>
    </div>
  </div>
@endsection