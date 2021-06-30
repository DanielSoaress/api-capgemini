<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => 'Antonio Martin Marcos Corte Real',
            'cpf'      => '02072637368',
            'email'     => 'antoniomartinmarcoscortereal@lencise.com',
            'phone' => '8599218-9357',
            'password'  => bcrypt('MinhaSenhaAqui'),
        ]);
        User::create([
            'name'      => 'Nina Andreia Gabrielly Nogueira',
            'cpf'      => '54246010901',
            'email'     => 'ninaandreiagabriellynogueira@soespodonto.com.br',
            'phone' => '8539983364',
            'password'  => bcrypt('MinhaSenhaAqui'),
        ]);
        User::create([
            'name'      => 'Luiz Thales Lopes',
            'cpf'      => '49719140135',
            'email'     => 'luizthaleslopes_@galvao.com',
            'phone' => '69989943850',
            'password'  => bcrypt('MinhaSenhaAqui'),
        ]);
        User::create([
            'name'      => 'João Daniel Figueiredo',
            'cpf'      => '35899140135',
            'email'     => 'joaodanielfigueiredo@lojasrayton.com',
            'phone' => '6925508847',
            'password'  => bcrypt('MinhaSenhaAqui'),
        ]);
    }
}
