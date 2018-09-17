<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonhangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donhang', function (Blueprint $table) {
            $table->increments('id');
			$table->date('NgayDatHang');
			$table->date('NgayGiaoHang');
			$table->string('idChiTietDonHang',50);
			$table->string('idNguoiDung',50);
			$table->integer('ThanhTien');
			$table->integer('PhuongThucThanhToan');
			$table->integer('PhuongThucGiaoHang');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donhang');
    }
}
