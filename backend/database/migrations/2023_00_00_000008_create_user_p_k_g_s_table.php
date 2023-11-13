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
        Schema::create('user_pkgs', function (Blueprint $table) {
            $table->uuid('user_pkg_id')->primary();
            $table->uuid('user_id');
            $table->integer('tryout_id');
            $table->integer('tryout_sub_id')->nullable();
            $table->timestamp('sub_start')->nullable();
            $table->foreign('user_id')->references('user_id')->on('users')->cascadeOnDelete();
            $table->foreign('tryout_id')->references('tryout_id')->on('tryout_pkgs')->cascadeOnDelete();
            $table->foreign('tryout_sub_id')->references('tryout_sub_id')->on('tryout_subs')->nullOnDelete();
            $table->timestamp('user_start')->nullable();
            $table->timestamp('user_end')->nullable();
            $table->float('score', 8, 3)->nullable();
            $table->longText('sub_to_score')->nullable();
            $table->tinyInteger('shuffle_seed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_pkgs');
    }
};
