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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->unique()
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->char('code', 3)
                ->unique();
            $table->char('nip', 18)
                ->nullable()
                ->unique();
            $table->string('title_prefix', 32)
                ->nullable();
            $table->string('title_suffix', 32)
                ->nullable();
            $table->string('last_education', 8)
                ->nullable();
            $table->foreignId('position_id')
                ->nullable()
                ->constrained('teacher_positions')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('level_id')
                ->nullable()
                ->constrained('teacher_levels')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->string('mutation_record')
                ->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
