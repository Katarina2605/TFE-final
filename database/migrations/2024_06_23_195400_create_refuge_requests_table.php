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
        Schema::create('refuge_requests', function (Blueprint $table) {
            $table->id();
            $table->string('nom_refuge')->nullable(false);
            $table->string('adresse_refuge')->nullable(false);
            $table->string('numero_refuge')->nullable(false);
            $table->string('site_web_refuge')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('refuge_requests');
    }

};
