<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Str;

class ProductTableSeeder extends Seeder
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
            'name' => Str::random(10),
            'description' => Str::random(10),
            'price' => rand(100,500),
        ]);
    }
}
