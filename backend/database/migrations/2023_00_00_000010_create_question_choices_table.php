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
        Schema::create('question_choices', function (Blueprint $table) {
            $table->integer('choice_id')->autoIncrement();
            $table->integer('question_id');
            $table->foreign('question_id')->references('question_id')->on('tryout_questions')->cascadeOnDelete();
            $table->text('choice_img')->nullable();
            $table->text('choice_desc');
            $table->tinyInteger('choice_val')->nullable();
            $table->boolean('true_answer');
            $table->text('explanation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_choices');
    }
};
