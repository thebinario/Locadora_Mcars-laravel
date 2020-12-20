<?php

use App\Operacao;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OperacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('operacaos')->insert(
            [
                [
                    'data' => 'asd',
                    'operacao' => 'YXS-2020',
                    'valor' => '123',
                ],
                [
                    'data' => 'asddwq',
                    'operacao' => 'YXS-2020',
                    'valor' => '123',
                ],

            ]
        );
    }
}
