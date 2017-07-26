<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_services', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id')->unsigned();
            $table->integer('service_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('hotel_services', function(Blueprint $table) {
            $table->foreign('hotel_id')->references('id')->on('hotels')
                        ->onDelete('restrict')
                        ->onUpdate('restrict');
            $table->foreign('service_id')->references('id')->on('services')
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
        Schema::table('hotel_services', function(Blueprint $table) {
            $table->dropForeign('hotels_services_hotel_id_foreign');
        });
        Schema::table('hotels_services', function(Blueprint $table) {
            $table->dropForeign('hotels_services_service_id_foreign');
        });
        Schema::dropIfExists('rating_comment');
    }
}
