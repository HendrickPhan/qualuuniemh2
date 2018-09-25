<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class LoaiMatHang extends Model
{
    //
	protected $fillable = [
        'TenLoaiMatHang', 
    ];
	protected $table = "loaimathang";
	public $timestamps = false;
}
