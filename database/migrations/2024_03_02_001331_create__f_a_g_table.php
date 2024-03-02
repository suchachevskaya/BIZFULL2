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
        Schema::create('_f_a_g', function (Blueprint $table) {
            $table->id();
            $table->foreignId('project_id')->constrained();
            $table->text('question')->nullable();
            $table->text('answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_f_a_g');
    }
};
