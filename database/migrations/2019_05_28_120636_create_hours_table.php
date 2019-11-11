<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHoursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hours', function (Blueprint $table) {

            $table->increments('hour_id');
            $table->integer('project_user_id')->unsigned();
            $table->foreign('project_user_id')->references('id')->on('project_user');   
            $table->date('date');
            $table->integer('hours');
            $table->string('status');
            $table->mediumText('description');

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
        Schema::table('hours', function (Blueprint $table) {
            $table->dropForeign(['user_id', 'project_id']);
            $table->dropColumn(['project_id', 'user_id']);
        });
    }
}
