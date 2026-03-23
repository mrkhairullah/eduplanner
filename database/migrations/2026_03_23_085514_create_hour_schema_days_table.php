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
        Schema::create('hour_schema_days', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hour_schema_id')
                ->constrained()
                ->cascadeOnUpdate()
                ->cascadeOnDelete();
            $table->unsignedTinyInteger('day');
            $table->time('started_at');
            $table->time('finished_at');
            $table->timestamps();

            $table->unique([
                'hour_schema_id',
                'day',
                'started_at',
                'finished_at',
            ], 'hour_schema_days');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hour_schema_days');
    }
};
