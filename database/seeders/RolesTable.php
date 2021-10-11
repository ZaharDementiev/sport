<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['trainer', 'web'],
            ['manager', 'web'],
            ['admin', 'web'],
        ];

        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'name' => $role[0],
                'guard_name' => $role[1],
            ]);
        }
    }
}
