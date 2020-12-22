<?php

namespace Database\Seeders;

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
        $adminUser = [
            ['type_user_id' =>1,
            'name'=> 'adminDP',
            'email'=>'adminDP@dedicated.com',
            'password'=> bcrypt('adminDP2020'),],

            ['type_user_id' =>2,
            'name'=> 'managerDP',
            'email'=>'managerDP@dedicated.com',
            'password'=> bcrypt('managerDP2020'),],

        ];
      
      foreach($adminUser as $admin)
      {
            DB::table('users')->insert($admin);
        }

    }
}
