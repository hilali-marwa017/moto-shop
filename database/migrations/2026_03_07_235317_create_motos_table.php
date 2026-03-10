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
{
    Schema::create('motos', function (Blueprint $table) {
        $table->id();
        $table->string('titre');
        $table->string('marque');
        $table->enum('type', ['Sportive', 'Routière', 'Chopper', 'Cross', 'Scooter', 'Autre']);
        $table->string('ville');
        $table->integer('annee');
        $table->integer('kilometrage');
        $table->decimal('prix', 10, 2);
        $table->text('description')->nullable();
        $table->string('photo')->nullable();
        $table->enum('statut', ['disponible', 'vendue'])->default('disponible');
        $table->timestamps();
    });
}
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('motos');
    }
};
