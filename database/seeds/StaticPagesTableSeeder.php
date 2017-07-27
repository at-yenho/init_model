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
        DB::table('static_pages')->insert([[
            'title' => 'Introduction',
            'content' => 'This is company which was born in 2005',
        ]]);
    }
}
