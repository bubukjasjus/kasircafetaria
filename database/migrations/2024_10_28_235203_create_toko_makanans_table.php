<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTokoMakanansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('toko_makanans', function (Blueprint $table) {
            $table->id();  // ID sebagai primary key
            $table->string('nama_makanan');  // Nama makanan
            $table->decimal('harga', 8, 2);  // Harga dengan dua desimal
            $table->integer('stok');  // Stok makanan
            $table->timestamps();  // Timestamp created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('toko_makanans');
    }
}