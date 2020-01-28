<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_user', function (Blueprint $table) {

            $table->increments('id');  //projectuserid
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

            $table->timestamp('start_date' )->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('end_date' )->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->boolean('active')->default(false);
            $table->softDeletes();
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
        Schema::table('project_user', function (Blueprint $table) {
            $table->dropForeign('project_user_user_id_foreign');
            $table->dropForeign('project_user_project_id_foreign');
            $table->dropColumn(['project_id', 'user_id']);
        });
    }
}
