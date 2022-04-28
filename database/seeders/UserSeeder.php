<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert([

        ['name' => 'Gosset',
        'firstname' => 'Geoffrey',
        'age' => '28',
        'role_id' => 1,
        'email' => 'admin@admin.com',
        'password' => bcrypt('admin@admin.com')],

        ['name' => 'Negan',
        'firstname' => 'walking',
        'age' => '43',
        'role_id' => 1,
        'email' => 'negan@negan.com',
        'password' => bcrypt('negan@negan.com')],

        ['name' => 'Rick',
        'firstname' => 'dead',
        'age' => '39',
        'role_id' => 1,
        'email' => 'rick@rick.com',
        'password' => bcrypt('rick@rick.com')],

        ['name' => 'Bouvier',
        'firstname' => 'Bastien',
        'age' => '30',
        'role_id' => 2,
        'email' => 'bastien@bastien.com',
        'password' => bcrypt('bastien@bastien.com')],

        ['name' => 'Remy',
        'firstname' => 'Julie',
        'age' => '33',
        'role_id' => 3,
        'email' => 'julie@julie.com',
        'password' => bcrypt('julie@julie.com')],

        ['name' => 'Washington',
        'firstname' => 'Denzel',
        'age' => '42',
        'role_id' => 4,
        'email' => 'denzel@denzel.com',
        'password' => bcrypt('denzel@denzel.com')],

       ]);
    }
}
