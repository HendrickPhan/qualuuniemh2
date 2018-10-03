@extends('master')
	@section('content')
	
	<?php var_dump($mathangs);?>
	<div id="giohang_contain" class="container">
		
		<div class="giohang-info">
			<h1>Giỏ hàng của bạn</h1>
			<table class="table" id="table_giohang" >
				<thead>
					<tr>
						<th>Tên mặt hàng</th>
						<th>Giá</th>
						<th>Số lượng</th>
						<th>Thành tiền</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>Mặt hàng 1</th>
						<th>100.000VND</th>
						<th>5</th>
						<th>500.000VND</th>
						<th>
							<a href='' class="btn btn-info">Xem</a>
							<a href="" class="btn btn-danger">Sửa</a>
							<a href="" class="btn btn-secondary">Xóa</a>
						</th>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="row"> 
			<div class="col-md-8">
			</div>
			<div class="col-md-4 calculating">
				<div class="calculating_element">
					<p><b>Tổng tiền:</b></p>
					<p><b>Thuế phát sinh(VAT,..):</b></p>
					<p><b>Phí vận chuyển:</b></p>
				</div>
				<div class="total_calculating">
					<p><b>Tổng tất cả:</b></p>
				</div>
			</div> 
		</div>
		<div class="cart-action">
			<div class="row">
				<div class="col-md-8">
				</div>
				<div class="col-md-4">
					<button class="btn btn-default returnbutton">Tiếp tục mua hàng</button>
					<button class="btn btn-success checkoutbutton">Checkout đơn hàng</button>
				</div>
					
			
					
			</div>
		</div>
	</div>
@endsection