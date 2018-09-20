@extends('admin/master')
@section('content')


<div class="container">

@if($action == "view")
	<div class="xemNguoiDung">
		<h1>Thông tin người dùng</h1>
		<hr>
		
		<div class="form-group">
			<label for="username">Tên tài khoản:</label>
			<input type="text" id="username" class="form-control" readonly value="{{$user->username}}">
		</div>
		<div class="form-group">
			<label for="HoVaTen">Họ và tên:</label>
			<input type="text" id="HoVaTen" class="form-control" readonly value="{{$user->HoVaTen}}">
		</div>
		<div class="form-group">
			<label for="NgaySinh">Ngày sinh:</label>
			<input type="text" id="NgaySinh" class="form-control" readonly value="{{$user->NgaySinh}}">
		</div>
		<div class="form-group">
			<label for="SoDienThoai">Số điện thoại:</label>
			<input type="number" id="SoDienThoai" class="form-control" readonly value="{{$user->SoDienThoai}}">
		</div>
		<div class="form-group">
			<label for="email">Email:</label>
			<input type="email" id="email" class="form-control" readonly value="{{$user->email}}">
		</div>
		<div class="form-group">
			<label for="DiaChi">Địa chỉ:</label>
			<input type="text" id="email" class="form-control" readonly value="{{$user->DiaChi}}">
		</div>
		<div class="form-group">
			<label for="ThanhPho">Thành phố:</label>
			<input type="text" id="email" class="form-control" readonly value="{{$user->ThanhPho}}">
		</div>
		<div class="form-group">
			<label for="Quan">Quận:</label>
			<input type="text" id="email" class="form-control" readonly value="{{$user->Quan}}">
		</div>
	</div>
@elseif($action == "add")
	<div class="themNguoiDung">
		<h1>Thêm người dùng</h1>
		
		<hr>
	</div>
@elseif($action == "edit")
	<div class="suaNguoiDung">
		<h1>Sửa người dùng</h1>
		
		<hr>
	</div>
@endif
</div>
@endsection