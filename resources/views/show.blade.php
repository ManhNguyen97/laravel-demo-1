@extends('layout')
@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-8">
            <h3>Thông tin nhân viên:</h3>
          </div>
          <div class="col-md-8">
            <a href="{{ route('nhanvien.index') }}" class="btn btn-primary">Danh sách nhân viên</a>
          </div>
        </div>
      </div>

      <div class="card-body">
          <div class="row">
            <div class="col-md-8">
              <div class="form-group">
                <label>Mã nhân viên: </label>
                <p>{{ $nhanvien->MaNV }}</p>
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Họ & Tên: </label>
                <p>{{ $nhanvien->HoTen }}</p>
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Ngày sinh: </label>
                <p>{{ $nhanvien->NgaySinh }}</p>
             </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Giới tính: </label>
                <p>{{ $nhanvien->GioiTinh }}</p>
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Địa chỉ: </label>
                <p>{{ $nhanvien->DiaChi }}</p>
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Số điện thoại: </label>
                <p>{{ $nhanvien->SDT }}</p>
              </div>
            </div>

            <div class="col-md-8">
              <div class="form-group">
                <label>Ghi chú: </label>
                <p>{{ $nhanvien->GhiChu }}</p>
              </div>
            </div>
          </div>
          <br>
        </form>
      </div>
    </div>
  </div>
@endsection