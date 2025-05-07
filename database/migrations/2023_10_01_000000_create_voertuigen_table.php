<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoertuigenTable extends Migration
{
    public function up()
    {
        Schema::create('voertuigen', function (Blueprint $table) {
            $table->id();
            $table->string('kenteken');
            $table->string('type');
            $table->date('bouwjaar');
            $table->string('brandstof');
            $table->unsignedBigInteger('type_voertuig_id');
            $table->boolean('is_actief')->default(true);
            $table->text('opmerking')->nullable();
            $table->timestamps(); 
            $table->foreign('type_voertuig_id')->references('id')->on('type_voertuigen')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('voertuigen');
    }
}
