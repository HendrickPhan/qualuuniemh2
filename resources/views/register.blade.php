<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Hàng lưu niệm H2</title>
			
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
		
		<!-- CSS -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/custom_style.css') }}" rel="stylesheet">
		<!-- JS -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/custom_js.js') }}"></script>
		
    </head>
    <body id="register">
			<div class="background">
			</div>
				<a href="{{ url('/') }}"><img class="logo" src="upload/logo.png" width="50" height="50"/></a>
				<div class="login-contain">
					<h1>ĐĂNG KÝ</h1>
					<form action="" id="register-form">
						<table>
							<tr>
								<td><label for="username">Tên tài khoản: </label></td>
								<td> <input type="text" id="username" name="username" placeholder="tentaikhoan"/></td>
							</tr>
							<tr>
								<td><label for="password">Mật khẩu:</label></td>
								<td><input type= "password" id="password" name="password"/></td>
							</tr>
							<tr>
								<td><label for="fullname">Họ và tên:</label></td>
								<td><input type= "text" id="fullname" name="fullname" placeholder="Nguyễn Văn A"/></td>
							</tr>
							<tr>
								<td><label for="birthday">Ngày sinh:</label></td>
								<td><input type= "text" id="birthday" name="birthday"/></td>
							</tr>
							<tr>
								<td><label for="gender">Giới tính:</label></td>
								<td><select  id="gender">
									<option value="1">Nam</option>
									<option value="2">Nữ</option>
									<option value="3">Khác</option>
								</select></td>
							</tr>
							<tr>
								<td><label for="phone">Số điện thoại:</label></td>
								<td><input type= "number" id="phone" name="phone" placeholder="0987654321"/></br></td>
							</tr>
							<tr>
								<td><label for="email">Email:</label></td>
								<td><input type= "email" id="email" name="email" placeholder="mail@mail.com"/></br></td>
							</tr>
							<tr>
								<td><label for="address">Địa chỉ:</label></td>
								<td><input type= "text" id="address" name="address" placeholder="123/đường 1"/></br></td>
							</tr>
							<tr>
								<td><label for="city">Thành phố:</label></td>
								<td><select id="city" name="city"/>
									<option value="HCM">Hồ Chí Minh</option>
								</select></br></td>
							</tr>
							<tr>
								<td><label for="county">Quận:</label></td>
								<td><select id="county" name="county"/>
									<option value="Q1">Quận 1</option>
								</select></br></td>
							</tr>
							<tr >
								<td colspan="2"><div class="button-holder">
									<button class="btn btn-info" type="button" id="loginbutton">Đăng ký</button>
								</div></td>
							</tr>
							<tr>
							<tr>
								<td colspan="2"><a href="{{url('login')}}">Đăng nhập</a></td>
							</tr>
							<tr>
								<td colspan="2"><a href="{{url('forget_password')}}">Quên mật khẩu? </a></td>
							</tr>
						</table>
						<input type="hidden" name="action" value="register"/>
					</form>
				</div>
			
@include('footer')
