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
        Schema::create('player_team', function (Blueprint $table) {
            $table->foreignId("team_id")->constrained();
            $table->foreignId("player_id")->constrained();
            $table->integer("from")->nullable()->default(null);            
            $table->integer("to")->nullable()->default(null);            
            $table->primary(["team_id", "player_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_team');
    }
};
