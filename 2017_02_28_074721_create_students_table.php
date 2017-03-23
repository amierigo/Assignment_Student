<?php

use Illuminate\Support\Facades\Schema; 
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;


class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            Schema::create('students', function (Blueprint $table) {
                    $table-> increments('id');
                    $table->integer('student_id');
                    $table->string('first_name',20);
                    $table->string('middle_name',20);
                    $table->string('last_name',20);
                    $table->string('program',20);
                    $table->string('address',30);
                    $table->string('guardian_name',20);
                    $table->integer('guardian_contact');
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
        Schema::dropIfExists('students');
    }

}