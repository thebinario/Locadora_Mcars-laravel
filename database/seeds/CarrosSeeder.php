<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarrosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carros')->insert(
            [
            [
                'modelo' => "KWID",
                'placa' => 'YXS-2020'
            ],
            [
                'modelo' => "HD20",
                'placa' => 'FLEX-2020'
            ],
            [
                'modelo' => "PRISMA",
                'placa' => 'PHP-2222'
            ],
            [
                'modelo' => "PALIO",
                'placa' => 'LAR-1990'
            ],
            [
                'modelo' => "HILUX",
                'placa' => 'NOS-9S45'
            ],
            [
                'modelo' => "TORO",
                'placa' => 'QWE-6D45'
            ],
            ]
        );
    }
}
