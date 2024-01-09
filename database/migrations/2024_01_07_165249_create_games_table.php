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
    Schema::create('games', function (Blueprint $table) {
        $table->id();
        $table->dateTime('fecha_hora');
        $table->unsignedBigInteger('local_id');
        $table->unsignedBigInteger('visitante_id');
        $table->integer('n_goles_local')->nullable();
        $table->integer('n_goles_visitante')->nullable();
        $table->timestamps();
    });

    Schema::table('games', function (Blueprint $table) {
        $table->foreign('local_id')->references('id')->on('teams');
        $table->foreign('visitante_id')->references('id')->on('teams');
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};

?>