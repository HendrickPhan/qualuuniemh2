@extends('admin/master')
@section('content')


<div class="container">
	<div class="themNguoiDung">
		<h1>Thêm người dùng</h1>
		<hr>
		<form action="#" method="POST">
			<div class="form-group">
				<label for="username">Tên tài khoản:</label>
				<input type="text" id="username" class="form-control" readonly value="{{old('username')}}">
			</div>
			<div class="form-group">
				<label for="HoVaTen">Họ và tên:</label>
				<input type="text" id="HoVaTen" class="form-control" readonly value="{{old('HoVaTen')}}">
			</div>
			<div class="form-group">
				<label for="NgaySinh">Ngày sinh:</label>
				<input type="text" id="NgaySinh" class="form-control" readonly value="{{old('NgaySinh')}}">
			</div>
			<div class="form-group">
				<label for="SoDienThoai">Số điện thoại:</label>
				<input type="number" id="SoDienThoai" class="form-control" readonly value="{{old('SoDienThoai')}}">
			</div>
			<div class="form-group">
				<label for="email">Email:</label>
				<input type="email" id="email" class="form-control" readonly value="{{old('email')}}">
			</div>
			<div class="form-group">
				<label for="GioiTinh">Giới tính:</label>
				<select  id="GioiTinh" name="GioiTinh" value="{{old('GioiTinh')}}">
					<option value="Nam">Nam</option>
					<option value="Nữ">Nữ</option>
					<option value="Khác">Khác</option>
				</select>
			</div>
			<div class="form-group">
				<label for="DiaChi">Địa chỉ:</label>
				<input type="text" id="email" class="form-control" readonly value="{{old('DiaChi')}}">
			</div>
			<div class="form-group">
				<label for="ThanhPho">Thành phố:</label>
				<input type="text" id="email" class="form-control" readonly value="{{old('ThanhPho')}}">
			</div>
			<div class="form-group">
				<label for="Quan">Quận:</label>
				<input type="text" id="email" class="form-control" readonly value="{{old('Quan')}}">
			</div>
			<div class="form-group">
				<button class="btn btn-info" type="submit" id="loginbutton">Thêm</button>
			</div>
		</form>
	</div>
</div>
@endsection