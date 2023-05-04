<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddBulletToJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('jobs', function (Blueprint $table) {
            $table->longText('bullet')->nullable();
            $table->longText('bullet_one')->nullable();
            $table->longText('bullet_two')->nullable();
            $table->longText('bullet_three')->nullable();
            $table->longText('bullet_four')->nullable();
            $table->longText('bullet_five')->nullable();
            $table->longText('bullet_six')->nullable();
            $table->longText('bullet_seven')->nullable();
            $table->longText('bullet_eight')->nullable();
            $table->longText('bullet_nine')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('jobs', function (Blueprint $table) {
            //
        });
    }
}
