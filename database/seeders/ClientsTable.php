<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ClientsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = [
            ['Pogorelov Anton', '380980841385', '123456789', 1, 1, '8:00', Carbon::now(), Carbon::now()->addMonth()],
            ['Pogorelov Andrey', '380980841385', '123456789', 1, 2, '9:00', Carbon::now(), Carbon::now()->addMonth()],
            ['Pogorelov Nick', '380980841385', '123456789', 1, 3, '12:00', Carbon::now(), Carbon::now()->addMonth()],
            ['Pogorelov Mick', '380980841385', '123456789', 1, 4, '16:00', Carbon::now(), Carbon::now()->addMonth()],
            ['Pogorelov Matt', '380980841385', '123456789', 2, 5, '8:00', Carbon::now(), Carbon::now()->addMonth()],
        ];

        foreach ($clients as $client) {
            DB::table('clients')->insert([
                'name' => $client[0],
                'phone' => $client[1],
                'password' => Hash::make($client[2]),
                'gym_id' => $client[3],
                'trainer_id' => $client[4],
                'training_time' => $client[5],
                'payed' => $client[6],
                'next_payment' => $client[7],
            ]);
        }

        $clientTrainer = [
            ['1', '1'],
            ['2', '2'],
            ['3', '3'],
            ['4', '4'],
            ['5', '5'],
        ];

        foreach ($clientTrainer as $item) {
            DB::table('client_trainer')->insert([
                'client_id' => $item[0],
                'trainer_id' => $item[1],
            ]);
        }
    }
}
