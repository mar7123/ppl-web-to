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
        Schema::create('tryout_pkgs', function (Blueprint $table) {
            $table->uuid('tryout_id')->primary();
            $table->string('title', 25);
            $table->date('start_date');
            $table->date('end_date');
            $table->text("desc_to");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tryout_pkgs');
    }
};
