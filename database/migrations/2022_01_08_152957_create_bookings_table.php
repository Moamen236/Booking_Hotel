<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingsTable extends Migration
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
            $table->text('booking_reference');
            $table->foreignId('room_type_id')->constrained();
            $table->foreignId('room_id')->constrained();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('payment_id')->constrained();
            $table->date('check_in');
            $table->date('check_out');
            $table->tinyInteger('adults')->nullable();
            $table->tinyInteger('children')->nullable();
            $table->text('comment')->nullable();
            $table->string('payment_method')->default('cash');
            $table->string('status')->default('pending');
            $table->double('total_price');
            $table->boolean('is_active')->default(true);
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
}