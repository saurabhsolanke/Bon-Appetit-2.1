<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
           'product name' => 'iphone 12',
           'product no' => '12',
           'photo' => 'https://i.ebayimg.com/images/g/u-kAAOSw9p9aXNyf/s-l500.jpg',
           'price' => 6923.88,
           'org name' => 'mc Donals ',
           'vendors name' => 'Harsh',
        ]);

 
    }
}
