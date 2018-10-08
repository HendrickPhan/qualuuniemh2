@extends('master')
	@section('content')

		<div class="container">
			
			<div class="registered_customer">
				
				<h1>Thanh toán</h1>
				<form>
					<h5> Tên người dùng: </h5>
					<input type="text" id="iduser_checkout" name="username_checkout">
					<h5> Email:</h5>
					<input type="text" id="email_checkout" name="email_checkout"><br>
					<h5>Địa chỉ giao hàng: </h5>
					<input type="text" id="address_checkout" name="address_checkout"><br>
					<h5>Số điện thoại liên hệ:</h5>
					<input type="text" id="phone_checkout" name="phone_checkout"><br>
					<button class="btn button_checkout btn-info">Check out</button>
				</form>	
			</div>	
		</div>
@endsection