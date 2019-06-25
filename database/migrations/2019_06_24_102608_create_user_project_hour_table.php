<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProjectHourTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_project_hour', function (Blueprint $table) {

            $table->unsignedInteger('user_id');

            $table->unsignedInteger('project_id');

            $table->unsignedInteger('hour_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

        $table->dropForeign(['user_id', 'project_id', 'hour_id']);
        $table->dropColumn(['user_id', 'project_id', 'hour_id']);

        Schema::dropIfExists('user_project_hour');

    }
}
