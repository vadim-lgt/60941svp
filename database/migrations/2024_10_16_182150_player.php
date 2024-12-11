<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /* Run the migrations.
    */
    public function up(): void
    {
        Schema::create('player', function (Blueprint $table)
        {
            $table->id();
            $table->string('Full_name');
            $table->string('role');
            $table->unsignedBigInteger('team_id');
            $table->foreign('team_id')->references('id')->on('teams');
        });
    }

    /* Reverse the migrations.
    */
    public function down(): void
    {
        Schema::dropIfExists('player');
    }
};
