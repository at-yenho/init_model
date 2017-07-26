<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status');
            $table->integer('room_id')->unsigned();
            $table->string('target');
            $table->integer('target_id');
            $table->string('request')->nullable();
            $table->integer('quantity');
            $table->datetime('checkin_date');
            $table->datetime('checkout_date');
            $table->timestamps();
        });
        Schema::table('reservations', function(Blueprint $table) {
            $table->foreign('room_id')->references('id')->on('rooms')
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
        Schema::table('reservations', function(Blueprint $table) {
            $table->dropForeign('reservations_room_id_foreign');
        }); 
        Schema::dropIfExists('reservations');
    }
}
