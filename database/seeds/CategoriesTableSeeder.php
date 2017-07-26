<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        // factory(App\Categoties::class, 15)->create();//save into database
        // Model::reguard();
        DB::table('categories')->insert([[
            'name' => 'Promotion',
        ],[
            'name' => 'Event',
        ]]);
    }
}
