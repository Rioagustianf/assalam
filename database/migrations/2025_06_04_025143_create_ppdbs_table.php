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
        $table->string('nisn');
        $table->string('asal_sekolah')->nullable();
        $table->string('nik')->nullable();
        $table->enum('jenis_kelamin', ['Laki-laki', 'Perempuan'])->nullable();
        $table->string('tempat_lahir')->nullable();
        $table->date('tanggal_lahir')->nullable();
        $table->text('alamat_lengkap')->nullable();
        $table->enum('tinggal_bersama', ['Orang Tua', 'Wali', 'Pondok Pesantren', 'Asrama', 'Lainnya'])->nullable();
        $table->string('no_telp')->nullable();
        $table->unsignedTinyInteger('jumlah_saudara')->nullable();
        $table->string('no_kk')->nullable();
        $table->string('nama_ayah')->nullable();
        $table->string('nik_ayah')->nullable();
        $table->enum('pendidikan_ayah', ['Tidak Sekolah', 'Tamat SD/MI', 'Tamat SMP/MTs.', 'Tamat SMA/SMK/MA', 'Diploma', 'S1/S2'])->nullable();
        $table->string('pekerjaan_ayah')->nullable();
        $table->string('nama_ibu')->nullable();
        $table->string('nik_ibu')->nullable();
        $table->enum('pendidikan_ibu', ['Tidak Sekolah', 'Tamat SD/MI', 'Tamat SMP/MTs.', 'Tamat SMA/SMK/MA', 'Diploma', 'S1/S2'])->nullable();
        $table->string('pekerjaan_ibu')->nullable();
        $table->text('alamat_ortu')->nullable();
        $table->timestamps();
    });
}

};
