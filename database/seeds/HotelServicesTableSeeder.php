<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class HotelServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(App\HotelService::class, 15)->create();//save into database
        Model::reguard();
    }
}
