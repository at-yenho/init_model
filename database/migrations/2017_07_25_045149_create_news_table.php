<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->string('content');
            $table->integer('category_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('news', function(Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('news', function(Blueprint $table) {
            $table->dropForeign('news_category_id_foreign');
        }); 
        Schema::dropIfExists('news');
    }
}
