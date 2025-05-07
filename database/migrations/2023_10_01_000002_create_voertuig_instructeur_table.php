<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoertuigInstructeurTable extends Migration
{
    public function up()
    {
        Schema::create('voertuig_instructeur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('voertuig_id');
            $table->unsignedBigInteger('instructeur_id');
            $table->date('datum_toekenning');
            $table->timestamps();

            $table->foreign('voertuig_id')->references('id')->on('voertuigen')->onDelete('cascade');
            $table->foreign('instructeur_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('voertuig_instructeur');
    }
}
