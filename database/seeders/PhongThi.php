<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PhongThi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('phong_thi')->insert([
            'name'=>'phòng 1',
            'start'=>'2022-02-11 15:50:27',
            'end'=>'2022-02-19 15:50:27',
            'password'=>'123',
        ]);
    }
}
