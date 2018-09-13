<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
        <title>Laravel</title>
			
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
		
		<!-- CSS -->
        <link href="/css/app.css" rel="stylesheet" type="text/css">
		<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
		<link href="{{ asset('css/custom_style.css') }}" rel="stylesheet">
		<!-- JS -->
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('js/custom_js.js') }}"></script>
		
    </head>
    <body>
	<header>
		<div class="container">
			<div class="row header-menu">
				<div class="col-sm-3">
					<img src="upload/logo/png"/>
				</div>
				<div class="col-sm-5">
					<input type="text" value="Search for Products" id="searchproduct"/>
					<button class="btn" type="button">Search</button>			
				</div>
				<div class="col-sm-4">
					<li>800.860.6272</li>
					<li>Sign in</li>
					<li>Cart</li>
				</div>
			</div>
		</div>
		<nav class="nav-menu">
			<li>Dây chuyền</li>
			<li>Nhẫn</li>
			<li>Quần áo</li>
			<li>Đồng hồ</li>
			<li>Vòng tay</li>
			<li>Gấu bông</li>
			<li>Khăn choàng</li>
		</nav>
	</header>