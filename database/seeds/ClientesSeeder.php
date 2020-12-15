<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert(

            [
                [
                    'nome' => "Abiamel",
                    'cpf' => '000.000.000-00',
                ],
                [
                    'nome' => "Samara",
                    'cpf' => '000.000.000-00',
                ]
            ]


        );
    }
}
