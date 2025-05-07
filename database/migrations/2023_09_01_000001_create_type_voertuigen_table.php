<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeVoertuigenTable extends Migration
{
    public function up()
    {
        Schema::create('type_voertuigen', function (Blueprint $table) {
            $table->id();
            $table->string('type_voertuig');
            $table->string('rijbewijscategorie');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('type_voertuigen');
    }
}
