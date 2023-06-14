<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CauHoi::class);
        $this->call(DapAn::class);
        $this->call(User::class);
        $this->call(PhongThi::class);
        $this->call(TaiLieu::class);
    }
}
