<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('job_title');
            $table->string('job_location');
            $table->string('job_position');
            $table->longText('job_desc');
            $table->longText('job_skills');
            $table->string('how_to_apply');
            $table->string('link');
            $table->string('company');
            $table->integer('user_id');
            $table->string('country');
            $table->string('title')->nullable();
            $table->longText('desc')->nullable();
            $table->string('title_one')->nullable();
            $table->longText('desc_one')->nullable();
            $table->string('title_two')->nullable();
            $table->longText('desc_two')->nullable();
            $table->string('title_three')->nullable();
            $table->longText('desc_three')->nullable();
            $table->mediumText('company_logo')->nullable();
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
        Schema::dropIfExists('jobs');
    }
}
