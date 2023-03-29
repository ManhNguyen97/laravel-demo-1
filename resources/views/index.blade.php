@extends('layout')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-8">
            <h3>Danh sách nhân viên:</h3>
          </div>
          <div><a href="{{ route('nhanvien.create') }}" class="btn btn-primary">Thêm mới</a></div><br>
          <div class="form-group">
            <form action="{{ route('search') }}" method="GET">
              <label>Tìm theo tên nhân viên: </label>
              <input type="text" name="search" required />
              <button type="submit" class="btn btn-primary">Search</button>
            </form>
          </div>
        </div>
      </div>

      <div class="card-body">
        @if (Session::has('thongbao'))
          <div class="alert alert-success">
            {{ Session::get('thongbao') }}
          </div>
        @endif
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>ID</th>
              <th>Mã NV</th>
              <th>Họ & Tên</th>
              <th>Ngày sinh</th>
              <th>Giới tính</th>
              <th>Địa chỉ</th>
              <th>Số ĐT</th>
              <th>Ghi chú</th>
              <th></th>
            </tr>
          </thead>

          <tbody>
            @foreach ($nhanvien as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->MaNV }}</td>
                <td>{{ $item->HoTen }}</td>
                <td>{{ $item->NgaySinh }}</td>
                <td>{{ $item->GioiTinh }}</td>
                <td>{{ $item->DiaChi }}</td>
                <td>{{ $item->SDT }}</td>
                <td>{{ $item->GhiChu }}</td>
                <td>
                  
                  <form action="{{ route('nhanvien.destroy', $item->id) }}" method="POST">
                    <a href="{{ route('nhanvien.show', $item->id) }}" class="btn btn-info">Xem</a>
                    <a href="{{ route('nhanvien.edit', $item->id) }}" class="btn btn-success">Sửa</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Xóa</button>
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection