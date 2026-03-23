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
        Schema::create('hour_schemas', function (Blueprint $table) {
            $table->id();
            $table->string('type', 16);
            $table->year('academic_year_started_at');
            $table->year('academic_year_finished_at');
            $table->boolean('active')
                ->default(false);
            $table->string('level');
            $table->foreignId('major_competency_id')
                ->nullable()
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->string('fragment');
            $table->timestamps();

            $table->unique([
                'type',
                'academic_year_started_at',
                'academic_year_finished_at',
                'active',
                'level',
                'major_competency_id',
                'fragment',
            ], 'hour_schemas_unique');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hour_schemas');
    }
};
