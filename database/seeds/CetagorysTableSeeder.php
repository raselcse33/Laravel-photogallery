<?php

use Illuminate\Database\Seeder;

class CetagorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Category::create([
        	'name'=>'Animal'

        ]);

        App\Category::create([
        	'name'=>'Flower'

        ]);

        App\Category::create([
        	'name'=>'Horror'

        ]);

        App\Category::create([
        	'name'=>'Natural'

        ]);
    }
}
