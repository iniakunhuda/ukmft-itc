<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKaryasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyas', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('slug');
            $table->integer('kategori_id');
            $table->text('desc_singkat');
            $table->text('desc');
            $table->string('juara')->nullable();
            $table->string('lomba')->nullable();
            $table->string('mhs_nama')->nullable();
            $table->integer('mhs_angkatan')->nullable();
            $table->text('gambar');
            $table->text('url')->nullable();
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
        Schema::dropIfExists('karyas');
    }
}
