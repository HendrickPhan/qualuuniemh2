@extends('master')
	@section('content')
	<div id="mathang_contain" class="container">
		<div class="section1 row">
			<div class = "mathang_imgs col-md-6">
				<div class="owl-carousel owl-theme">
					@foreach($hinhanhs as $hinhanh)
						<div class="main_img item">
							<img src="{{$hinhanh->URL}}">
						</div>
					@endforeach
				</div>
			</div>
			<div class = "mathang_desc col-md-6">
				<div class="title">
					<h1>{{$mathang->TenMatHang}}<h1>
				</div>
				<div class="xuatxu">
					<label>Xuất xứ:</label> <span>{{$mathang->XuatXu}}</span>
				</div>
				<div class="xuatxu">
					<label>Loại mặt hàng:</label> <span>{{$loaimathang->TenLoaiMatHang}}</span>
				</div>
				<div class="description">
				
					<p>
					<label>Mô tả:</label> 
					{{$mathang->MoTa}}
					</p>
				</div>
				<div class="price">
					<h2>{{$mathang->Gia}} vnđ</h2>
				</div>
				<div class="add_to_card form-group">
					<label class="">Số lượng:</label> 
					<input class="soluong form-control" type="number" name="soluong" max="99" min="1" id="soluong" value="1"/>
					<button class="btn btn-warning add_to_cart_btn_with_quantity" id="addToCart" value="{{$mathang->id}}">Thêm vào giỏ</button>
				</div>
			</div>
		</div>
		
		
		<div class="section2">
			<div class="container">
				<div class="danhgia">
					<h3>Bình Luận: </h3>
					
					<div class="comment row">
						<div class="col-md-1"> 
							<img class="user-avatar" href="#" src="/upload/user_avatar.jpg"/>
						</div>
						<div class="col-md-11">
							<a><b>Người dùng 1</b><a/></br>
							<a class="comment-content">Mặt hàng này rất đẹp và bền</a>
						</div>
					</div>
					
					<div class="comment row">
						<div class="col-md-1"> 
							<img class="user-avatar" href="#" src="/upload/user_avatar.jpg"/>
						</div>
						<div class="col-md-11">
							<a><b>Người dùng 2</b><a/></br>
							<a class="comment-content">Đoán xem</a>
						</div>
					</div>
					
					
					<div class="comment row">
						<div class="col-md-1"> 
							<img class="user-avatar" href="#" src="/upload/user_avatar.jpg"/>
						</div>
						<div class="col-md-11">
							<a><b>Người dùng 3</b><a/></br>
							<a class="comment-content">Mặt hàng này rất đẹp và bền</a>
						</div>
					</div>
					
				</div>
					
				<div class="cauhoi">
					<h3 class="ask-header">Thêm bình luận: </h3>
					<div>
						<textarea class="form-control ask-field" row="5" cols="50" placeholder="Đặt câu hỏi?"></textarea>
						<button class="btn btn-ask" type="button"><b>Gửi câu hỏi</b> </button>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
