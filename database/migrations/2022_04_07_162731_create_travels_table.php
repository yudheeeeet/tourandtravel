<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('foto')->nullable();
            $table->enum('jenis', ['promo', 'reguler']);
            $table->string('harga', 50);
            $table->string('waktu', 10);
            $table->string('jumlah', 25)->nullable();
            $table->string('deadline', 25)->nullable();
            $table->text('deskripsi', 1250);
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
        Schema::dropIfExists('travels');
    }
}
