<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(App\Model\Place::class, 10)->create();
        Model::reguard();
    }
}
