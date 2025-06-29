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
    Schema::create('ppdbs', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap');
        $table->string('email');
        $table->string('no_hp');
        $table->text('alamat');
        $table->string('asal_sekolah');
        $table->timestamps();
    });
}

};
