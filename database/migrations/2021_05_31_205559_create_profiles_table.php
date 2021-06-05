<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->string('country');
            $table->string('student')->nullable();
            $table->string('student_study_fields')->nullable();
            $table->string('profession');
            $table->string('hobby');
            $table->string('interests');
            $table->string('pro')->nullable();
            $table->string('relevant_websites')->nullable();
            $table->string('notes')->nullable();
            $table->string('profile');
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
        Schema::dropIfExists('profiles');
    }
}
