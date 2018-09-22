<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MatHang extends Model
{
    //
	 protected $fillable = [
        'TenMatHang', 
		'Gia', 
		'XuatXu', 
		'SoLuongTon', 
    ];
	
	protected $table = "mathang";
	public $timestamps = false;
}
