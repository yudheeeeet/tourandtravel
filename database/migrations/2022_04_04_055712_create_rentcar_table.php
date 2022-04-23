<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentcarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rentcar', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('foto')->nullable();
            $table->string('plat');
            $table->string('warna');
            $table->integer('stnk');
            $table->string('bpkb');
            $table->string('harga');
            $table->enum('status', ['Tersedia', 'Disewa']);
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
        Schema::dropIfExists('rentcar');
    }
}
