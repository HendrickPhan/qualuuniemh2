@extends('admin/master')
@section('content')


<div class="container">
	<div>
		<h1> Quản lý người dùng</h1>
		
		<hr>
	</div>
	<div class="quanly" >
		<button class="btn btn-success addbutton">Thêm người dùng</button>
		<div class="user-info">
			<table id="table_id" >
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên đăng nhập</th>
						<th>Email</th>
						<th>Số điện thoại</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($users as $user)
					<tr>
						<td>{{$user->id}}</td>
						<td>{{$user->username}}</td>
						<td>{{$user->email}}</td>
						<td>{{$user->SoDienThoai}}</td>
						<td>
						
						<a href='{{url("/admin/XemNguoiDung/$user->id")}}' class="btn btn-info">Xem</a>
						<a href="" class="btn btn-danger" data-id="{{$user->id}}">Sửa</a>
						<a href="" class="btn btn-secondary" data-id="{{$user->id}}">Xóa</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection