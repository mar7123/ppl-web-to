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
        Schema::create('tryout_questions', function (Blueprint $table) {
            $table->integer('question_id')->autoIncrement();
            $table->integer('tryout_sub_id');
            $table->foreign('tryout_sub_id')->references('tryout_sub_id')->on('tryout_subs')->cascadeOnDelete();
            $table->text('question_desc');
            $table->text('question_img')->nullable();
            $table->tinyInteger('question_type')->default(0);
            $table->float('question_weight', 8, 3)->default(0.99);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tryout_questions');
    }
};
