@extends('master')
	@section('content')

		<div class="container">
			
			<div class="registered_customer">
				
				<h1>Thanh toán</h1>
				<form method="POST">
					<label for="iduser_checkout"> Tên người dùng: </label><br>
					<input type="text" id="iduser_checkout" name="username_checkout"><br>
					<label  for="email_checkout"> Email:</label><br>
					<input type="text" id="email_checkout" name="email_checkout"><br>
					<label  for="address_checkout">Địa chỉ giao hàng: </label><br>
					<input type="text" id="address_checkout" name="address_checkout"><br>
					<label  for="phone_checkout">Số điện thoại liên hệ:</label><br>
					<input type="text" id="phone_checkout" name="phone_checkout"><br>
					<label  for="date_of_delivery">Ngày giao hàng:</label><br>
					<input type="text" id="date_of_delivery" name="date_of_delivery"><br>
					<h5 id="total_checkout"><b>Tổng tiền:</b>   <span>1235</span></h5>
					<a href="{{url('/cart')}}"class="btn btn-secondary button_checkout">Quay lại</a>
					<button class="btn btn-success button_checkout">Check out</button>				
				</form>	
			</div>	
		</div>
@endsection