<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(App\News::class, 15)->create();//save into database
        Model::reguard();
    }
}
