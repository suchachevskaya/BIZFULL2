<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('description')->nullable();
            $table->enum('category', ['technology', 'art', 'health', 'education', 'ecology', 'social', 'science and research'])->default('technology');
            $table->string('status')->default(App\Enums\ProjectStatus::OPEN->value);
            $table->string('attachment')->nullable();
            $table->date('deadline')->nullable();
            $table->text('contact')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('status_change_by_id')->nullable()->constrained('users');
            $table->timestamps();
            $table->text('short_desc')->nullable();
            $table->decimal('funding')->nullable();
            $table->text('video')->nullable();
            $table->text('email')->nullable();
            $table->integer('phone')->nullable();

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
