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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name', 64);
            $table->string('username', 32)
                ->unique();
            $table->string('email', 64)
                ->nullable()
                ->unique();
            $table->unsignedTinyInteger('gender')
                ->nullable();
            $table->unsignedTinyInteger('religion')
                ->nullable();
            $table->string('birth_place', 64)
                ->nullable();
            $table->date('birth_date')
                ->nullable();
            $table->unsignedTinyInteger('entry_month')
                ->nullable();
            $table->year('entry_year')
                ->nullable();
            $table->timestamp('email_verified_at')
                ->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')
                ->primary();
            $table->string('token');
            $table->timestamp('created_at')
                ->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')
                ->primary();
            $table->foreignId('user_id')
                ->nullable()
                ->index();
            $table->string('ip_address', 45)
                ->nullable();
            $table->text('user_agent')
                ->nullable();
            $table->longText('payload');
            $table->integer('last_activity')
                ->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
