<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cvs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->string('slug')->nullable();
            $table->string('name')->nullable();
            $table->string('type')->nullable();
            $table->string('sex')->nullable();
            $table->string('phone')->nullable();
            $table->string('additional_phone')->nullable();
            $table->string('email')->nullable();
            $table->boolean('marital_status')->nullable();
            $table->timestamp('dob')->nullable();
            $table->bigInteger('division_id')->nullable();
            $table->bigInteger('district_id')->nullable();
            $table->bigInteger('upazila_id')->nullable();
            $table->bigInteger('union_id')->nullable();
            $table->boolean('profession')->nullable();
            $table->text('reason_of_leaving')->nullable();
            $table->boolean('hafiz')->nullable();
            $table->string('education_medium')->nullable();
            $table->boolean('daorah')->nullable();
            $table->boolean('jsc')->nullable();
            $table->string('jsc_gpa')->nullable();
            $table->boolean('ssc')->nullable();
            $table->string('ssc_gpa')->nullable();
            $table->boolean('hsc')->nullable();
            $table->string('hsc_gpa')->nullable();
            $table->text('max_education')->nullable();
            $table->text('experience')->nullable();
            $table->text('majhab')->nullable();
            $table->text('politics')->nullable();
            $table->text('pir_muridi')->nullable();
            $table->text('majar')->nullable();
            $table->text('tabiz')->nullable();
            $table->text('milad')->nullable();
            $table->string('location_of_job')->nullable();
            $table->string('monthly_hadia')->nullable();
            $table->string('monthly_leave')->nullable();
            $table->string('taking_meal')->nullable();
            $table->string('staying_place')->nullable();
            $table->string('maktob')->nullable();
            $table->string('khatib')->nullable();
            $table->string('muajjin')->nullable();
            $table->string('kitab')->nullable();
            $table->string('nurani')->nullable();
            $table->string('hafizi')->nullable();
            $table->text('about')->nullable();
            $table->boolean('commitment')->nullable();
            $table->string('request_status')->nullable()->default('pending');
            $table->string('status')->nullable()->default('active');
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cvs');
    }
}
