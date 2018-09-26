@extends('admin/master')
@section('content')

<div class="container">
	<div class="suaMatHang">
		<h1>Sửa mặt hàng</h1>
		<hr>
		<form action='{{url("/admin/mathang/$mathang->id/edit")}}' method="POST">
			@if($errors->has('tenmathang'))
				<tr>
					<p style="color:red">{{$errors->first('tenmathang')}}</p>
				</tr>
			@endif
			<div class="form-group">
				<label for="tenmathang">Tên mặt hàng:</label>
				<input type="text" name="tenmathang" id="tenmathang" class="form-control" value="{{$mathang->tenmathang}}">
			</div>
			
			@if($errors->has('Gia'))
				<tr>
					<p style="color:red">{{$errors->first('Gia')}}</p>
				</tr>
			@endif
			<div class="form-group">
				<label for="Gia">Giá:</label>
				<input type="text" name="Gia" id="Gia" class="form-control" value="{{$mathang->Gia}}">
			</div>
			
			@if($errors->has('XuatXu'))
			<tr>
				<p style="color:red">{{$errors->first('XuatXu')}}</p>
			</tr>
			@endif
			<div class="form-group">
				<label for="XuatXu">Xuất Xứ:</label>
				<input type="text" name="XuatXu" id="XuatXu" class="form-control" value="{{$mathang->XuatXu}}">
			</div>
			@if($errors->has('SoLuongTon'))
			<tr>
				<p style="color:red">{{$errors->first('SoLuongTon')}}</p>
			</tr>
			@endif
			<div class="form-group">
				<label for="SoLuongTon">Số lương tồn:</label>
				<input type="number" name="SoLuongTon" id="SoLuongTon" class="form-control" value="{{$mathang->SoLuongTon}}">
			</div>
			@if($errors->has('MoTa'))
			<tr>
				<p style="color:red">{{$errors->first('MoTa')}}</p>
			</tr>
			@endif
			<div class="form-group">
				<label for="MoTa">Mô tả:</label>
				<input type="text" name="MoTa" id="MoTa" class="form-control" value="{{$mathang->MoTa}}">
			</div>
			@if($errors->has('idLoaiMatHang'))
			<tr>
				<p style="color:red">{{$errors->first('idLoaiMatHang')}}</p>
			</tr>
			@endif
			<div class="form-group">
				<label for="idLoaiMatHang">id Loại mặt hàng:</label>
				<input type="text" name="idLoaiMatHang" id="idLoaiMatHang" class="form-control" value="{{$mathang->idLoaiMatHang}}">
			</div>
			<div class="form-group">
				<button class="btn btn-info" type="submit" id="loginbutton">Sửa đổi</button>
			</div>
			{!! csrf_field() !!}
		</form>
	</div>
</div>
@endsection