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
        Schema::create('subject_unpreferred_hours', function (Blueprint $table) {
            $table->id();
            $table->foreignId('subject_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->unsignedTinyInteger('day')
                ->nullable();
            $table->time('started_at');
            $table->time('finished_at');
            $table->timestamps();

            $table->unique([
                'subject_id',
                'day',
                'started_at',
                'finished_at',
            ], 'subject_unpreferred_hours');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subject_unpreferred_hours');
    }
};
