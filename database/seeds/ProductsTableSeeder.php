<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	'name'=> 'Brogue Shoes',
        	'price'=> 500,
             'description'=> 'Quality shoes for men', 
          ]);
    }
}
