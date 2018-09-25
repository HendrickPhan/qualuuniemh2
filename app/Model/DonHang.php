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
	protected $table = "donhang";
	public $timestamps = false;
}
