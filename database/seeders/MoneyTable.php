<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoneyTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['1', 1],
            ['2', 1],
            ['3', 1],
            ['4', 1],
            ['5', 1],
        ];

        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'client_id' => $role[0],
                'subscription_id' => $role[1],
            ]);
        }
    }
}
