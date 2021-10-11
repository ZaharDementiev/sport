<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTable::class);
        $this->call(AddressesTable::class);
        $this->call(SubscriptionsTable::class);
        $this->call(RolesTable::class);
        $this->call(ModelHasRolesTable::class);
        $this->call(ClientsTable::class);
//        $this->call(MoneyTable::class);
    }
}
