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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->date('release_date');
            $table->integer('duration');
            $table->text('synopsis');
            $table->unsignedBigInteger('genre_id')->nullable(); // Set to allow null values
            $table->string('poster_url')->nullable();
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
