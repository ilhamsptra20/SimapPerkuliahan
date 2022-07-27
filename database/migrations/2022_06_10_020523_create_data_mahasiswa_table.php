<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->char('no_reg', 14)->index();
            $table->boolean('status')->nullable();
            $table->string('nama', 75);
            $table->enum('jenis_kelamin', ['p', 'l']);
            $table->string('tempat_lahir', 30);
            $table->date('tanggal_lahir');
            $table->boolean('status_martial')->default(false);
            $table->enum('kewarganegaraan', ['wna', 'wni']);
            $table->string('agama', 10);
            $table->tinyText('tempat_tinggal');
            $table->string('no_hp', 25)->unique();
            $table->string('email', 75)->unique();
            $table->enum('sekolah', ['smk', 'sma']);
            $table->string('nama_sekolah', 50);
            $table->string('jurusan_sekolah', 15);
            $table->tinyText('alamat_sekolah');
            $table->year('tahun_lulus');
            $table->string('no_ijazah', 15)->unique();
            $table->string('nama_orangtua', 35);
            $table->char('no_hp_orangtua', 25)->unique()->nullable();
            $table->string('email_orangtua', 35)->unique()->nullable();
            $table->string('pekerjaan_orangtua', 15)->nullable();
            $table->string('instansi_orangtua', 25)->nullable();
            $table->string('pendidikan_orangtua', 4)->nullable();
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
        Schema::dropIfExists('data_mahasiswa');
    }
};
