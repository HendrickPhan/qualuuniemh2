<?php

use Illuminate\Database\Seeder;

class nguoidungtableseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
		DB::table('nguoidung')->insert([
            'TenDangNhap' => 'admin',
            'Email' => 'admin@admin.com',
            'MatKhau' => bcrypt('123456'),
			'Role' => 1,
			'HoVaTen' => 'admin',
			'Active' =>1
        ]);
    }
}
