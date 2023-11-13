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
        Schema::create('user_answers', function (Blueprint $table) {
            $table->integer('user_answer_id')->autoIncrement();
            $table->integer('user_pkg_quest_id');
            $table->integer('choice_id');
            $table->tinyInteger('choice_val')->nullable();
            $table->foreign('user_pkg_quest_id')->references('user_pkg_quest_id')->on('user_pkg_quests')->cascadeOnDelete();
            $table->foreign('choice_id')->references('choice_id')->on('question_choices')->cascadeOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_answers');
    }
};
