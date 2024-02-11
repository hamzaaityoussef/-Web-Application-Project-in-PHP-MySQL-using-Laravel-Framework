<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('annonces', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('classe');
            $table->string('description');
            $table->string('creator');
            // $table->unsignedBigInteger('id_chefdepartement');
            // $table->unsignedBigInteger('id_cheffiliere');

            // $table->foreign('id_creator')->references('id')->on('prof')->onDelete('cascade');
            // $table->foreign('id_chefdepartement')->references('id')->on('chefdepartement')->onDelete('cascade');
            // $table->foreign('id_cheffiliere')->references('id')->on('cheffiliere')->onDelete('cascade');
            
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('annonces');
       
    }
};
