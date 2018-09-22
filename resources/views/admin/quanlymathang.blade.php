@extends('admin/master')
@section('content')


<div class="container">
	<div>
		<h1> Quản lý mặt hàng</h1>
		
		<hr>
	</div>
	<div class="quanly" >
		<button class="btn btn-success addbsutton">Thêm mặt hàng</button>
		<div class="product-info">
			<table id="table_id" >
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên mặt hàng</th>
						<th>Xuất xứ</th>
						<th>Số lượng tồn</th>
						<th>ID Loại mặt hàng</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($product as $product)
					<tr>
						<td>{{$product->id}}</td>
						<td>{{$product->TenMatHang}}</td>
						<td>{{$product->XuatXu}}</td>
						<td>{{$product->SoLuongTon}}</td>
						<td>{{$product->idLoaiMatHang}}</td>
						<td>
						
						<a href='{{url("/admin/XemNguoiDung/$user->id")}}' class="btn btn-info">Xem</a>
						<a href="" class="btn btn-danger" data-id="{{$user->id}}">Sửa</a>
						<a href="" class="btn btn-secondary" data-id="{{$user->id}}">Xóa</a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
@endsection	