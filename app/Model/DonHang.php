<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DonHang extends Model
{
    //
	protected $fillable = [
        'NgayDatHang',
		'NgayGiaoHang',
		'idChiTietDonHang',
		'idNguoiDung',
		'ThanhTien',
		'PhuongThucThanhToan',
		'PhuongThucGiaoTien',
    ];
	public $rules = [
		'NgayDatHang' =>'required',
		'NgayGiaoHang' => 'required|date',
		'idChiTietDonHang' => 'required',
		'idNguoiDung' => 'required'
		'ThanhTien' => 'required|numeric'
		'PhuongThucThanhToan' => 'required'
		'PhuongThucGiaoTien' => 'required'
	];
	public $messages = [
		'NgayDatHang.required' => 'Ngày đặt hàng là trường bắt buộc',
		'NgayGiaoHang.required' => 'Ngày giao hàng là trường bắt buộc',
		'idChiTietDonHang' => 'ID Chi tiết đơn hàng là trường bắt buộc',
		'idNguoiDung.required' => 'ID người dùng là trường bắt buộc',
		'ThanhTien.required' => 'Tổng tiền là trường bắt buộc',
		'PhuongThucThanhToan.required' => 'Phương thức thanh toán là trường bắt buộc',
		'PhuongThucGiaoTien.required' => 'Phương thức giao tiền là trường bắt buộc',
	];
	protected $table = "donhang";
	public $timestamps = false;
}
