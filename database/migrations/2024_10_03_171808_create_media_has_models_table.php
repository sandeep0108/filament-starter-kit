<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('media_has_models', function (Blueprint $table) {
            $table->id();

            //Morph
            $table->string('model_type');
            $table->string('model_id');

            //Folder
            $table->foreignId('media_id')->constrained('media')->onDelete('cascade');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('media_has_models');
    }
};
