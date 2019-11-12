<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('group_teachers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('groupsubject_id')->unsigned();
            $table->foreign('groupsubject_id')
                  ->references('id')->on('group_subjects');
            $table->bigInteger('teachersubject_id')->unsigned();
            $table->foreign('teachersubject_id')
                  ->references('id')->on('teacher_subjects');
            $table->integer('request')->default(0);
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
        Schema::dropIfExists('group_teachers');
    }
}
