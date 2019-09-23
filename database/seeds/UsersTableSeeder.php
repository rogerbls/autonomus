<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()    {
         //Opção 1
         DB::table('users')->insert([
            'name'=>'Administrador',
            'email'=>'rogerbls51@gmail.com',
            'password'=>bcrypt('Bento@2019'),
            'created_at'=>date('Y-m-d H:i:s')
            ]);

        //opção 2
        factory(App\User::class,5)->create();
    }
}
