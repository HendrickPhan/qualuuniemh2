@extends('master')
	@section('content')
	<div id="loaimathang_contain" class="container">
		<h1>{{$loaimathang->TenLoaiMatHang}}</h1>
		<div id="allmathang_contain">
			<div class="row">
				
				@foreach($mathangs as $mathang)
					<div class="col-md-4">
						<div class="product-info">
							<h1>{{$mathang->TenMatHang}}<h1>
							<div class="owl-carousel owl-theme">
							@foreach($mathang['HinhAnh'] as $HinhAnh)
								<div class="item">
									<img src="{{$HinhAnh->URL}}">
								</div>
							@endforeach
							</div>
						</div>
					</div>
				@endforeach
			</div>
			
		</div>
			
	</div>
	
	
@endsection