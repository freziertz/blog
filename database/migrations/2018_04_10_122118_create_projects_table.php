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
    	if(!Schema::hasTable('projects')){
    	Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('name');
            $table->longtext('description');
            $table->integer('days')->unsigned()->nullable();
            $table->integer('company_id')->unsigned()->foreign()->references('id')->on('companies');
            $table->integer('user_id')->unsigned()->foreign()->references('id')->on('users');

        });
    }


    Schema::table('projects', function (Blueprint $table) {
    	$table->string('description');

    });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
}
