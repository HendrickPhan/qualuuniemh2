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
			<div class="header-menu">
				<div class="container">
					<div class="row">
						<div class="nav-quanli col-md-2">
							<a href=""><b>Người dùng</b></a>
						</div>
						<div class="nav-quanli col-md-2">
							<a href=""><b>Mặt hàng</b></a>
						</div>
						<div class="nav-quanli col-md-2">
							<a href=""><b>Loại mặt hàng</b></a>
						</div>
						<div class="nav-quanli col-md-2">
							<a href=""><b>Đơn hàng</b></a>
						</div>
						<div class="nav-quanli col-md-2">
							<a href=""><b>Phí dịch vụ</b></a>
						</div>
						<div class="nav-quanli col-md-2">							
								<li><img src="/upload/sign_out.png" width="25" height="25"/><a href="{{url('logout')}}"> Đăng Xuất</a></li>			
						</div>
					</div>
				</div>
			</div>
		</header>
	@section('content')
	@show
		<footer>
			<div class="cover">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<h3>Nav links</h3>
							<a href="">Link 1</a><br>
							<a href="">Link 2</a><br>
							<a href="">Link 3</a><br>
							<a href="">Link 4</a><br>
						</div>
						
						<div class="col-sm-3">
							<h3>Liên hệ</h3>
							<address>
							<p><b>Địa chỉ: </b><i>Trường CNTT<br>
								Linh Trung, Thủ Đức, HCM</i>
							</p>
							<p><b>Điện thoại: </b><i>0964030602</i>
							</p>
							<p><b>Mail: </b><a href="mailto:16520412@gm.uit.edu.vn" target="_blank"><i>16520412@gm.uit.edu.vn</i></a>
							</p>
							</address>
						</div>

						<div class="col-sm-3">
							<h3>Dev Team</h3>
							<p>
								<a href="https://www.facebook.com/phandinhminh.hieu" target="_blank">Phan Đình Minh Hiếu</a><br>
								<a href="https://www.facebook.com/profile.php?id=100005208618396"  target="_blank">Hà Kiệt Hùng</a>
							</p>
						</div>
						<div class="col-sm-3">
							<h3>Follow Us</h3>
							</br>
							<a href="https://www.facebook.com/phandinhminh.hieu" target="_blank"><img src="/upload/facebook.png"/></a>
							<a href="https://plus.google.com/110251690083587542042" target="_blank"><img src="/upload/google.png"/></a>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</body>
</html>

