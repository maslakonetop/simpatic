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
        Schema::create('sub_sektors', function (Blueprint $table) {
            $table->id();
            $table->string('sektor');
            $table->string('id_sektor');
            $table->string('sub_sektor');
            $table->string('indikator1');
            $table->string('indikator2');
            $table->string('indikator3');
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
        Schema::dropIfExists('sub_sektors');
    }
};
