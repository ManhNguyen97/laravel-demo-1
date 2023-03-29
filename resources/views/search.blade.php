@extends('layout')

@section('content')
  <div class="container">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col-md-8">
            <h3>Danh sách nhân viên tìm kiếm: </h3>
          </div>
          <div class="col-md-8">
            <a href="{{ route('nhanvien.index') }}" class="btn btn-primary">Về danh sách nhân viên</a>
          </div>
        </div>
      </div>

      <div class="card-body">
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
            @if($nhanvien->isNotEmpty())
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
            @else 
                <div>
                    <h2>No posts found</h2>
                </div>
            @endif
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection