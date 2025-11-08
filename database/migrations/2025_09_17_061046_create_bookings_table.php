<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->string('guest_name');
            $table->enum('gender', ['Laki-laki','Perempuan']);
            $table->string('id_number', 20); // validated 16 digits
            $table->foreignId('room_id')->constrained('rooms')->onDelete('cascade');
            $table->integer('price'); // price per night snapshot
            $table->date('date_start');
            $table->integer('duration'); // malam
            $table->boolean('breakfast')->default(false);
            $table->integer('total'); // final total bayar
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
