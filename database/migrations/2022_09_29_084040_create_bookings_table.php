<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->char('booking_reference')->unique();
            $table->string('fullname');
            $table->string('nationality');
            $table->string('email');
            $table->integer('no_people');
            $table->integer('no_children')->nullable();
            $table->text('allergies')->nullable();
            $table->text('services');
            $table->date('start');
            $table->date('end');
            $table->string('info')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
