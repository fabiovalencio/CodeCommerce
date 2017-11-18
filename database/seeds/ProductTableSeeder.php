<?php
/**
 * Created by PhpStorm.
 * User: fabiovalencio
 * Date: 18/11/17
 * Time: 10:41
 */

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Product;

class ProductTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('products')->truncate();

        factory('CodeCommerce\Product', 15)->create();
    }
}