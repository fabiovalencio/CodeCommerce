<?php
/**
 * Created by PhpStorm.
 * User: fabiovalencio
 * Date: 18/11/17
 * Time: 10:41
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Category;

class CategoryTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('categories')->truncate();

        factory('CodeCommerce\Category', 15)->create();
    }
}