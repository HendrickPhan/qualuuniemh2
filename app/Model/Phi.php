<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ThacMac extends Model
{
    //
	protected $fillable = [
        'LoaiPhi',
		'GiaTri',
    ];
	public $rules = [
		'LoaiPhi'=> 'required',
		'GiaTri'=> 'required|numberic',
	];
	public $messages = [
		'LoaiPhi.required' => 'Loại phí là trường bắt buộc',
		'GiaTri.required' => 'Giá trị là trường bắt buộc',
	];
	protected $table = "thacmac";
	public $timestamps = false;
}
