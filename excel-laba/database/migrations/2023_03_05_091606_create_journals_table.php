<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->string("date")->nullable();
            $table->string("course")->nullable();
            $table->string("group")->nullable();
            $table->string("title")->nullable();
            $table->string("lectures")->nullable();
            $table->string("practical")->nullable();
            $table->string("laboratory")->nullable();
            $table->string("modular_control")->nullable();
            $table->string("consultations_semester")->nullable();
            $table->string("consultations_exam")->nullable();
            $table->string("credits")->nullable();
            $table->string("exams")->nullable();
            $table->string("term_papers")->nullable();
            $table->string("bachelor_wrc")->nullable();
            $table->string("speciallist_wrc")->nullable();
            $table->string("masters_wrc")->nullable();
            $table->string("practice_management")->nullable();
            $table->string("state_examinations")->nullable();
            $table->string("wrc_rewiew")->nullable();
            $table->string("wrc_defence")->nullable();
            $table->string("graduate_student_management")->nullable();
            $table->string("other")->nullable();
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
        Schema::dropIfExists('journals');
    }
};
