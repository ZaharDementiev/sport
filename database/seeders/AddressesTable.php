<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $addresses = [
            ['Odesa', 'Levitana 79'],
            ['Odesa', 'Preobrazhenska 22'],
            ['Odesa', 'Mahachkalinska 35'],
            ['Lviv', 'Bandery 1'],
            ['Lviv', 'Lesenko 11'],
            ['Kyiv', 'Sofiivska 17'],
            ['Kyiv', 'Pushkinska 81']
        ];

        foreach ($addresses as $address) {
            DB::table('addresses')->insert([
                'city' => $address[0],
                'address' => $address[1],
            ]);
        }
    }
}
