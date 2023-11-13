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
        Schema::create('tryout_subs', function (Blueprint $table) {
            $table->integer('tryout_sub_id')->autoIncrement();
            $table->integer('tryout_id');
            $table->foreign('tryout_id')->references('tryout_id')->on('tryout_pkgs')->cascadeOnDelete();
            $table->string('sub_title', 50);
            $table->smallInteger('sub_duration');
            $table->tinyInteger('sub_order');
            $table->float('mean_val', 8, 3)->default(500.0);
            $table->float('std_val', 8, 3)->default(100.0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tryout_subs');
    }
};
