<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SubscriptionsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subscriptions = [
            [15, 1],
            [29, 2],
            [50, 4],
            [70, 6]
        ];

        foreach ($subscriptions as $subscription) {
            DB::table('subscriptions')->insert([
                'amount' => $subscription[0],
                'term' => $subscription[1],
            ]);
        }
    }
}
