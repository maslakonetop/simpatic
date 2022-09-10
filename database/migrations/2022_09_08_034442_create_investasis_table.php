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
        Schema::create('investasis', function (Blueprint $table) {
            $table->id();
            $table->string('namaproyek');
            $table->string('sektor');
            $table->string('kategori_pasar');
            $table->text('latarbelakang');
            $table->string('existing');
            $table->string('lokasi');
            $table->string('lattitude');
            $table->string('longitude');
            $table->string('id_kecamatan');
            $table->string('luas');
            $table->string('desk_luas');
            $table->string('status');
            $table->string('lingk_kerja');
            $table->string('sedia_pasar');
            $table->string('sedia_sumber');
            $table->string('nilai');
            $table->string('rincian_investasi');
            $table->string('layout');
            $table->string('skema');
            $table->string('npv');
            $table->string('irr');
            $table->string('bc_ratio');
            $table->string('payback_period');
            $table->string('pic');
            $table->string('nomor_hp');
            $table->string('email');
            $table->string('alamat');
            $table->string('photo')->nullable();
            $table->string('photo1')->nullable();
            $table->string('photo2')->nullable();
            $table->string('video')->nullable();
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
        Schema::dropIfExists('investasis');
    }
};
