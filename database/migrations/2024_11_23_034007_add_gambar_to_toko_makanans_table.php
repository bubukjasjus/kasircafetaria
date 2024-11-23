<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddGambarToTokoMakanansTable extends Migration
{
    public function up()
    {
        Schema::table('toko_makanans', function (Blueprint $table) {
            $table->string('gambar')->nullable(); // Menambahkan kolom 'gambar'
        });
    }

    public function down()
    {
        Schema::table('toko_makanans', function (Blueprint $table) {
            $table->dropColumn('gambar'); // Menghapus kolom 'gambar' jika rollback
        });
    }
}
