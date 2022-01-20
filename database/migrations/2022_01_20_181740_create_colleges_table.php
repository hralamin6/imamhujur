<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollegesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colleges', function (Blueprint $table) {
            $table->id();
            $table->string('board')->nullable();
            $table->string('district')->nullable();
            $table->string('upazila')->nullable();
            $table->string('name')->nullable();
            $table->string('shift')->nullable();
            $table->string('medium')->nullable();
            $table->string('group')->nullable();
            $table->string('gender')->nullable();
            $table->double('gpa')->nullable();
            $table->integer('sit')->nullable();
            $table->integer('mark')->nullable();
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
        Schema::dropIfExists('colleges');
    }
}
