<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('transaction', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->unsignedBigInteger('travel_id')->nullable();
            $table->foreign('travel_id')->references('id')->on('travels');
            $table->unsignedBigInteger('rentcar_id')->nullable();
            $table->foreign('rentcar_id')->references('id')->on('rentcar');
            $table->string('tanggal', 25)->nullable();
            $table->string('tujuan', 50)->nullable();
            $table->string('ktp')->nullable();
            $table->string('driver')->nullable();
            $table->string('waktu', 50);
            $table->string('jumlah', 25)->nullable();
            $table->text('catatan');
            $table->enum('status', ['Menunggu Konfirmasi', 'Menunggu Pembayaran', 'Dibatalkan/Gagal', 'Sukses']);
            $table->string('slip')->nullable();
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
        Schema::dropIfExists('transaction');
    }
}
