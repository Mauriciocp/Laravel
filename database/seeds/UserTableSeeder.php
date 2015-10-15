<?php

use Illuminate\Database\Seeder;
use TeachMe\Entities\User;



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

}