<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project_types', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('description');
            $table->softDeletes();
        });

        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->mediumTexT('description');
            $table->integer('access_key');
            $table->integer('project_type_id')->unsigned();
            $table->foreign('project_type_id')->references('id')->on('project_types');
            $table->integer('status_id')->unsigned()->default(1);
            $table->foreign('status_id')->references('id')->on('status');
            $table->integer('deleted_by')->nullable()->unsigned();
            $table->foreign('deleted_by')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });

        // users that can work in project
        Schema::create('project_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->softDeletes();
            $table->timestamps();
        });

        // person or enteprise that are owner of project
        Schema::create('person_project', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('project_id')->unsigned();
            $table->foreign('project_id')->references('id')->on('projects');
            $table->integer('person_id')->unsigned();
            $table->foreign('person_id')->references('id')->on('people');
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
        Schema::dropIfExists('person_project');
        Schema::dropIfExists('project_user');
        Schema::dropIfExists('projects');
        Schema::dropIfExists('project_types');
    }
}
