<?php

use Illuminate\Database\Seeder;
use TeachMe\Entities\User;
use Faker\Factory as Faker;


/**
 * Created by PhpStorm.
 * User: mauricio
 * Date: 15/10/15
 * Time: 10:34 AM
 */

class UserTableSeeder extends  Seeder {

    public function run ()
    {

        $this->createAdmin();
        $this->createUsers(50);
    }

    private function createAdmin()
    {
        User::create([
            'name' => 'mauricio',
            'email' => 'm@cla.com',
            'password' => bcrypt('admin ')
            //'roe' => 'admin'

        ]);
    }
    private function createUsers ($total)
    {
        $faker = Faker::create();

        for ($i = 1; $i <= $total; $i++ )
        {
            User::create([
                'name'=> $faker ->name,
                'email' => $faker->email,
                'password'=>bcrypt('secret')
            ]);
        }
    }

}