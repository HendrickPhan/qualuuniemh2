<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
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
