<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cards', function (Blueprint $table) {
            $table->id();
            $table->string('requesting');
            $table->string('capturing');
            $table->string('what');
            $table->string('who');
            $table->string('where');
            $table->string('special_need')->nullable();
            $table->longText('notes');
            $table->string('global')->nullable();
            $table->string('photo')->nullable();
            $table->string('video')->nullable();
            $table->string('audio')->nullable();
            $table->string('knowledge')->nullable();
            $table->string('pro')->nullable();
            $table->string('commercial')->nullable();
            $table->string('used_for')->nullable();
            $table->string('proposed_price')->nullable();
            $table->string('currency')->nullable();
            $table->string('amount')->nullable();
            $table->string('start_date')->nullable();
            $table->string('end_date')->nullable();
            $table->enum('status', ['saved_for_later', 'in_progress','completed','declined','dustbin'])->nullable();
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
        Schema::dropIfExists('cards');
    }
}
