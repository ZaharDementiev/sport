<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['Pogorelov Alex', 'alex@gmail.com', '380980841385', '123456789', 'trainer', 1000, 1, 0],
            ['Samaylov Roman', 'roma@gmail.com', '380980841386', '123456789', 'trainer', 1000, 1, 1],
            ['Tatiaina Yulia', 'yulia@gmail.com', '380980841387', '123456789', 'trainer', 750, 1, 1],
            ['Salamaha Yulia', 'salam@gmail.com', '380980841388', '123456789', 'trainer', 850, 1, 0],
            ['Strongman Slava', 'slava@gmail.com', '380980841389', '123456789', 'trainer', 900, 2, 1],
            ['Samaylova Ludmila', 'lud@gmail.com', '380980841375', '123456789', 'trainer', 1000, 2, 1],
            ['Kulchitskaya Valentina', 'val@gmail.com', '380980841376', '123456789', 'trainer', 900, 2, 0],
            ['Salamaha Olesya', 'olesya@gmail.com', '380980841377', '123456789', 'trainer', 850, 2, 0],
            ['Kompanitsa Igor', 'igor@gmail.com', '380980841378', '123456789', 'trainer', 1100, 3, 1],
            ['Doniev Stanislav', 'stas@gmail.com', '380980841379', '123456789', 'trainer', 950, 3, 1],
            ['Shtan Anastasia', 'shtan@gmail.com', '380980841360', '123456789', 'trainer', 1000, 3, 0],
            ['Rozhkovskaya Tatiana', 'rozh@gmail.com', '380980841361', '123456789', 'trainer', 850, 3, 1],
            ['Zhyrun Karerina', 'kat@gmail.com', '3809808413862', '123456789', 'trainer', 1000, 3, 1],
            ['Doniev Nikolay', 'nik@gmail.com', '380980841363', '123456789', 'trainer', 1150, 4, 0],
            ['Bulgar Artur', 'artur@gmail.com', '380980841364', '123456789', 'trainer', 1000, 4, 1],
            ['Runa Olga', 'runa@gmail.com', '380980841365', '123456789', 'trainer', 850, 4, 1],
            ['Kozhanov Igor', 'kozh@gmail.com', '380980841366', '123456789', 'trainer', 900, 4, 0],
            ['Shuliak Katerina', 'shuliak@gmail.com', '380980841367', '123456789', 'trainer', 900, 4, 0],
            ['Panasov Denis', 'den@gmail.com', '380980841368', '123456789', 'trainer', 850, 5, 0],
            ['Runa Valentin', 'runaval@gmail.com', '380980841369', '123456789', 'trainer', 900, 5, 1],
            ['Olkin Olga', 'olkin@gmail.com', '380980841322', '123456789', 'trainer', 950, 5, 0],
            ['Egorkin Andrei', 'andrei@gmail.com', '380980841311', '123456789', 'trainer', 900, 5, 0],
            ['Sailor Sophie', 'sophie@gmail.com', '380980841312', '123456789', 'trainer', 950, 5, 1],
            ['Klas Marina', 'klas@gmail.com', '380980841313', '123456789', 'trainer', 900, 6, 1],
            ['Moisenko Stas', 'mois@gmail.com', '380980841314', '123456789', 'trainer', 950, 6, 1],
            ['Raketskii Maksim', 'max@gmail.com', '380980841315', '123456789', 'trainer', 900, 6, 0],
            ['Bondarenko Dmitrii', 'dmitrii@gmail.com', '380980841316', '123456789', 'trainer', 1100, 6, 0],
            ['Maksicha Maria', 'maria@gmail.com', '380980841317', '123456789', 'trainer', 1150, 7, 1],
            ['Alexandr Safo', 'sano@gmail.com', '380980841318', '123456789', 'trainer', 900, 7, 0],
            ['Kasnovetskii Andrei', 'kasn@gmail.com', '380980841319', '123456789', 'trainer', 950, 7, 0],

            ['Drevitskiy Nick', 'drev@gmail.com', '380669197621', '123456789', 'manager', 1400, 1, 0],
            ['Dementiev Zahar', 'zahardementiev@gmail.com', '380669197622', '123456789', 'manager', 1400, 2, 1],
            ['Kulaxyz Yurii', 'kulaxyz@gmail.com', '380669197623', '123456789', 'manager', 1400, 3, 0],
            ['Chernyak Dmitrii', 'chernyak@gmail.com', '380669197624', '123456789', 'manager', 1400, 4, 1],
            ['Gassiy Nikita', 'gassiy@gmail.com', '380669197625', '123456789', 'manager', 1400, 5, 0],
            ['Zayats Stas', 'zayats@gmail.com', '380669197626', '123456789', 'manager', 1400, 6, 1],
            ['Kozak Valera', 'kozak@gmail.com', '380669197627', '123456789', 'manager', 1400, 7, 0],

            ['Dementiev Zahar', 'admin@gmail.com', '123456789', '123456789', 'admin', 1400, 7, 0],

        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user[0],
                'email' => $user[1],
                'phone' => $user[2],
                'password' => Hash::make($user[3]),
                'type' => $user[4],
//                'salary' => $user[5],
                'gym_id' => $user[6],
                'working_day_type' => $user[7],
            ]);
        }
    }
}
