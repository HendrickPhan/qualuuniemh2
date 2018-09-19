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
    <body>
	<header>
		<div class="container">
			<div class="row header-menu">
				<div class="col-md-2">
					<a href="{{url('/')}}"><img src="upload/logo.png" width="50" height="50"></a>
				</div>
				<div class="col-md-5" id="search-menu">
					<input type="text" placeholder=" Tìm sản phẩm" id="searchproduct"/>
					<button class="btn" type="button" id="searchbutton"><b>Tìm</b></button>
				</div>
				<div class="col-md-5" id="info-menu">
					
					<li><img src="upload/phone.png" width="25" height="25"/>0964.030.602</li>
					
					@if($user = Auth::user())
						<li><img src="upload/sign_in.png" width="25" height="25"/><a href="{{url('logout')}}"> Đăng Xuất</a></li>
						@if($user->Role==1)
							<li><img src="upload/sign_in.png" width="25" height="25"/><a href="{{url('logout')}}"> Admin page</a></li>
						@else
							<li><img src="upload/product.png" width="25" height="25"/><a href=""> Giỏ hàng</a></li>
						@endif
					@else
					<li><img src="upload/sign_in.png" width="25" height="25"/><a href="{{url('login')}}"> Đăng nhập</a></li>
					<li><img src="upload/product.png" width="25" height="25"/><a href=""> Giỏ hàng</a></li>
					@endif
				</div>
			</div>
		</div>
		<nav class="row nav-menu">
			<div class="product-type col-sm-2">
				<a href=""><b>Dây chuyền</b></a>
			</div>
			<div class="product-type col-sm-2">
				<a  href=""><b>Nhẫn</b></a>
			</div>
			<div class="product-type col-sm-2">
				<a  href=""><b>Quần áo</b></a>
			</div>
			<div class="product-type col-sm-2">
				<a  href=""><b>Đồng hồ</b></a>
			</div>
			<div class="product-type col-sm-2">
				<a  href=""><b>Vòng tay</b></a>
			</div>
			<div class="product-type col-sm-2">
				<a  href=""><b>Gấu bông</b></a>
			</div>
		</nav>
	</header>