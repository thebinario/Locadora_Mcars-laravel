<?php

use App\Caixas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CaixasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*DB::table('caixas')->insert(
            [
            [
                'data' => "KWID",
                'operacao' => 'YXS-2020',
                'valor' => '7500'
            ],
            [
                'data' => "KWID",
                'operacao' => 'YXS-2020',
                'valor' => '7500'
            ],
            ]
        );*/

        $caixa = [
            [
                'data' => "KWID",
                'operacao' => 'YXS-2020',
                'valor' => '7500'
            ],
            [
                'data' => "qwe",
                'operacao' => 'YXS-2020',
                'valor' => '7500'
            ],
            [
                'data' => "tret",
                'operacao' => 'YXS-2020',
                'valor' => '7500'
            ],
        ];

        foreach ($caixa as $op) {
            Caixas::create([
                'data' =>  $op['data'],
                'operacao' => $op['operacao'],
                'valor'   =>  $op['valor']
            ]);
        }
    }
}
