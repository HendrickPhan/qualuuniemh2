<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Laravel</title>
			
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
				<div class="col-sm-3">
					<img src="upload/logo.png" width="50" height="50"/>
					<li>International Company </li>
				</div>
				<div class="col-sm-5" id="search-menu">
					<input type="text" value="Search for Products" id="searchproduct"><button class="btn" type="button" id="searchbutton"><b>Search</b></button></input>	
							
				</div>
				<div class="col-sm-4" id="info-menu">
					<img src="upload/phone.png" width="25" height="25"/>
					<li><a href="">800.860.6272</a></li>
					<li><img src="upload/sign_in.png" width="25" height="25"/><a href="">Sign in</a></li>
					<li><img src="upload/product.png" width="25" height="25"/><a href="">Cart</a></li>
				</div>
			</div>
		</div>
		<nav class="nav-menu">
			<li><a  href=""><b>Dây chuyền</b></a></li>
			<li><a  href=""><b>Nhẫn</b></a></li>
			<li><a  href=""><b>Quần áo</b></a></li>
			<li><a  href=""><b>Đồng hồ</b></a></li>
			<li><a  href=""><b>Vòng tay</b></a></li>
			<li><a  href=""><b>Gấu bông</b></a></li>
			<li><a  href=""><b>Khăn choàng</b></a></li>
		</nav>
	</header>