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
            $table->string('location');
            $table->string('Country');
            $table->text('photo');
            $table->text('description');
            $table->decimal('prix', 6,2);
            $table->date('start_date');
            $table->date('end_date');
            $table->enum('status', ['En Attente', 'Accepter', 'Refuser'])->default('En Attente');
            $table->boolean('soft_delete')->default(false);
            $table->unsignedBigInteger('proprietaire_id');
            $table->foreign('proprietaire_id')->references('id')->on('proprietaires')->onDelete('cascade');
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
