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
        factory(App\Model\News::class, 15)->create();
        Model::reguard();
    }
}
