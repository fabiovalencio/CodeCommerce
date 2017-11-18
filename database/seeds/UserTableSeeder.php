<?php
/**
 * Created by PhpStorm.
 * User: fabiovalencio
 * Date: 18/11/17
 * Time: 10:41
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\User;


class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->truncate();

        factory('CodeCommerce\User')->create([
            'name' => 'Fabio',
            'email' => 'fabiovalencio@gmail.com',
            'password' => '123456'
        ]);

        factory('CodeCommerce\User', 10)->create();
    }
}