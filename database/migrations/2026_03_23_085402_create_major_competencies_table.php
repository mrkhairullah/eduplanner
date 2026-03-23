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
        Schema::create('major_competencies', function (Blueprint $table) {
            $table->id();
            $table->char('code', 3)
                ->unique();
            $table->string('name', 64)
                ->unique();
            $table->foreignId('major_program_id')
                ->nullable()
                ->constrained()
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->foreignId('tic_id')
                ->nullable()
                ->unique()
                ->constrained('teachers')
                ->cascadeOnUpdate()
                ->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('major_competencies');
    }
};
