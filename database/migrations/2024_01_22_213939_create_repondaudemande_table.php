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
    Schema::create('repondaudemande', function (Blueprint $table) {
        $table->id();
        $table->string('type');
        $table->string('from');
        $table->string('to');
        $table->string('message');
        $table->unsignedBigInteger('id_prof'); // Foreign key column
        $table->rememberToken();
        $table->timestamps();

        $table->foreign('id_prof')->references('id')->on('prof')->onDelete('cascade');

        });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repondaudemande');
    }
};
