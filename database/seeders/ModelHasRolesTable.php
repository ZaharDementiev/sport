<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ModelHasRolesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            ['3', 'App\Models\User', 1],
            ['3', 'App\Models\User', 2],
            ['3', 'App\Models\User', 3],
            ['3', 'App\Models\User', 4],
            ['3', 'App\Models\User', 5],
            ['3', 'App\Models\User', 6],
            ['3', 'App\Models\User', 7],
            ['3', 'App\Models\User', 8],
            ['3', 'App\Models\User', 9],
            ['3', 'App\Models\User', 10],
            ['3', 'App\Models\User', 11],
            ['3', 'App\Models\User', 12],
            ['3', 'App\Models\User', 13],
            ['3', 'App\Models\User', 14],
            ['3', 'App\Models\User', 15],
            ['3', 'App\Models\User', 16],
            ['3', 'App\Models\User', 17],
            ['3', 'App\Models\User', 18],
            ['3', 'App\Models\User', 19],
            ['3', 'App\Models\User', 20],
            ['3', 'App\Models\User', 21],
            ['3', 'App\Models\User', 22],
            ['3', 'App\Models\User', 23],
            ['3', 'App\Models\User', 24],
            ['3', 'App\Models\User', 25],
            ['3', 'App\Models\User', 26],
            ['3', 'App\Models\User', 27],
            ['3', 'App\Models\User', 28],
            ['3', 'App\Models\User', 29],
            ['3', 'App\Models\User', 30],
            ['3', 'App\Models\User', 31],
            ['1', 'App\Models\User', 32],
            ['2', 'App\Models\User', 33],
            ['2', 'App\Models\User', 34],
            ['2', 'App\Models\User', 35],
            ['1', 'App\Models\User', 36],
            ['2', 'App\Models\User', 37],
        ];

        foreach ($roles as $role) {
            DB::table('model_has_roles')->insert([
                'role_id' => $role[0],
                'model_type' => $role[1],
                'model_id' => $role[2],
            ]);
        }
    }
}
