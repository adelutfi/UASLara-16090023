<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePelamarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pelamars', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('nik',16)->unique();
            $table->string('nama',50);
            $table->date('tanggal_lahir');
            $table->string('tempat_lahir');
            $table->string('jenis_kelamin',9);
            $table->string('email')->unique();
            $table->char('no_hp',13)->unique();
            $table->string('lulusan_sekolah',3);
            $table->string('ktp');
            $table->string('ijazah');
            $table->string('surat_keterangan_dokter');
            $table->string('status')->default('menunggu');
            $table->boolean('deleted_at')->default(true);
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
        Schema::dropIfExists('pelamars');
    }
}
