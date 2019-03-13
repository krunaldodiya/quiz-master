<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('host_id')->default(1);
            $table->integer('category_id')->default(1);
            $table->integer('entry_fee')->default(0);
            $table->integer('total_participants')->default(100);
            $table->integer('total_winners')->default(10);
            $table->integer('all_questions_count')->default(50);
            $table->integer('answerable_questions_count')->default(10);
            $table->text('all_questions_meta')->nullable();
            $table->text('answerable_questions_meta')->nullable();
            $table->timestamp('expired_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quizzes');
    }
}
