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
            $table->uuid('user_id')->primary();
            $table->string('username', 25);
            $table->string('full_name', 40);
            $table->string('password', 100);
            $table->string('email', 40)->unique();
            $table->date('birth_date');
            $table->string('phone_num', 15);
            $table->string('prov', 20);
            $table->string('city', 20);
            $table->string('school', 20);
            $table->string('major', 10);
            $table->date('grad_date');
            $table->timestamp('email_verified_at')->nullable();
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
