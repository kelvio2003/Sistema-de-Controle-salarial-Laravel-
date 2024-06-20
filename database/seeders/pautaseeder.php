<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pauta;
class pautaseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        pauta::create(['nome'=>'Professor','p1'=>10,'p2'=>10,'p3'=>10]);
    }
}
