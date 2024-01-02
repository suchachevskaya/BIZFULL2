<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Livewire\Component;
use App\Models\project;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');
            $table->enum('category', ['technology', 'art','health','education','ecology', 'social', 'science and research'])->default('technology');
            $table->string('status')->default(App\Enums\ProjectStatus::OPEN->value);
            $table->string('attachment')->nullable();
            $table->date('deadline');
            $table->text('contact');
            $table->foreignId('user_id')->constrained();
            $table->foreignId('status_change_by_id')->nullable()->constrained('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
