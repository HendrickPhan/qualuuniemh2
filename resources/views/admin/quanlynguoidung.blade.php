@extends('admin/master')
@section('content')
	<div>
		<h1> Quản lý người dùng</h1>
		
	</div>
	<div class="quanly" >
		<button class="btn addbutton">Thêm người dùng</button>
		<div class="user-info">
			<table id="table_id">
				<thead>
					<tr>
						<th>ID</th>
						<th>Tên đăng nhập</th>
						<th>Email</th>
						<th>Số điện thoại</th>
						<th>Hành động</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>Row 1 Data 1</td>
						<td>Row 1 Data 2</td>
						<td>Row 1 Data 1</td>
						<td>Row 1 Data 2</td>
						<td>Row 1 Data 2</td>
					</tr>
					<tr>
						<td>Row 1 Data 1</td>
						<td>Row 1 Data 2</td>
						<td>Row 1 Data 1</td>
						<td>Row 1 Data 2</td>
						<td>Row 1 Data 2</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
@endsection