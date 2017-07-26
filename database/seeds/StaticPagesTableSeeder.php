<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class StaticPagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Model::unguard();
        // factory(App\StaticPage::class, 15)->create();//save into database
        // Model::reguard();
        DB::table('static_pages')->insert([[
            'title' => 'Introduction',
            'content' => 'This is company which was born in 2005',
        ]]);
    }
}
