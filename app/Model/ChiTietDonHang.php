<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChiTietDonHang extends Model
{
    //
	protected $fillable = [
        'idMatHang',
		'SoLuong',
		'DichVu',
    ];
	public $rules = [
		'idMatHang' =>'required',
		'SoLuong' => 'required|numeric',
		'DichVu' => 'required',
	];
	public $messages = [
		'idMatHang.required' => 'Mặt hàng là trường bắt buộc',
		'SoLuong.required' => 'Số lượng là trường bắt buộc',
		'DichVu.required' => 'Dịch vụ là trường bắt buộc',
	];
	protected $table = "chitietdonhang";
	public $timestamps = false;
}
