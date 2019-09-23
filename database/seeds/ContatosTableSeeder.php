<?php

use Illuminate\Database\Seeder;

class ContatosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Opção 1
        DB::table('contatos')->insert([
        'saudacao'=>'Sr.',
        'nome'=> 'Róger Soares',
        'telefone'=> '51 99110-1195',
        'data_nascimento'=> '1981-12-18',
        'email'=>'rogerbls51@gmail.com',
        'observacao'=> 'Contato criado com seeader metodo DB',
        'created_at'=>date('Y-m-d H:i:s')
        ]);
        
        //opção 2
        factory(App\Contato::class, 20)->create();
    }
}
