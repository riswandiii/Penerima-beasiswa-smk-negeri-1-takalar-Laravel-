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
        Schema::create('normalisasis', function (Blueprint $table) {
            $table->id();
            $table->integer('matrik_id');
            $table->string('nama');
            $table->decimal('c1');
            $table->decimal('c2');
            $table->decimal('c3');
            $table->decimal('c4');
            $table->decimal('hasil');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('normalisasis');
    }
};
