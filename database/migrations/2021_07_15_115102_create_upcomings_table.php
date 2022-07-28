<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUpcomingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return voids
     */  
    public function up()
    {
        Schema::create('upcomings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id');
            $table->date('date');
            $table->time('time');
            $table->boolean('status')->default(true);
            $table->string('class_type');
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
        Schema::dropIfExists('upcomings');
    }
}
