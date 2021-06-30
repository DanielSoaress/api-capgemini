<?php

use Illuminate\Database\Seeder;
use App\Account;


class AccountTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::create([
            'ag'      => '0001',
            'account'      => '60538591-7',
            'amount'     => 0,
            'user_id' => '0',
        ]);
        Account::create([
            'ag'      => '0001',
            'account'      => '60538698-5',
            'amount'     => 50.00,
            'user_id' => '1',
        ]);
        Account::create([
            'ag'      => '0001',
            'account'      => '60538297-0',
            'amount'     => 30.00,
            'user_id' => '2',
        ]);
        Account::create([
            'ag'      => '0001',
            'account'      => '60538655-8',
            'amount'     => 250.00,
            'user_id' => '3',
        ]);
    }
}
