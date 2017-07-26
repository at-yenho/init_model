<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class RatingCommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        factory(App\RatingComment::class, 15)->create();//save into database
        Model::reguard();
    }
}
