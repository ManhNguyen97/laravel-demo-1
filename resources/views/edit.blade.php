@extends('layout')
@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-8">
            <h3>Sửa thông tin nhân viên:</h3>
          </div>
          <div class="col-md-8">
            <a href="{{ route('nhanvien.index') }}" class="btn btn-primary">Danh sách nhân viên</a>
          </div>
        </div>
      </div>

      <div class="card-body">
        <form action="{{ route('nhanvien.update', $nhanvien->id) }}" method="POST">
          @csrf
          @method('PUT')
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label>Mã nhân viên: </label>
                <input type="text" name="MaNV" value="{{ $nhanvien->MaNV }}" class="form-control">
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Họ & Tên: </label>
                <input type="text" name="HoTen" value="{{ $nhanvien->HoTen }}" class="form-control">
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Ngày sinh: </label>
                <input type="date" name="NgaySinh" value="{{ $nhanvien->NgaySinh }}" class="form-control">
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Giới tính: </label>
                <select name="GioiTinh" class="form-select">
                  <option>Chọn giới tính</option>
                  <option value="Nam" {{ $nhanvien->GioiTinh == 'Nam' ? 'selected' : '' }}>Nam</option>
                  <option value="Nữ" {{ $nhanvien->GioiTinh == 'Nữ' ? 'selected' : '' }}>Nữ</option>
                </select>
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Địa chỉ: </label>
                <input type="text" name="DiaChi" value="{{ $nhanvien->DiaChi }}" class="form-control">
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Số điện thoại: </label>
                <input type="number" name="SDT" value="{{ $nhanvien->SDT }}" class="form-control">
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Ghi chú: </label>
                <input type="text" name="GhiChu" value="{{ $nhanvien->GhiChu }}" class="form-control">
              </div>
            </div>
          </div>
          <br>
          <button class="btn btn-primary" type="submit">Cập nhật</button>
        </form>
      </div>
    </div>
  </div>
@endsection