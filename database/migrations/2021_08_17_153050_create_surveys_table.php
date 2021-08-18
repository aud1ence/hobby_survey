<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSurveysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('surveys', function (Blueprint $table) {
            $table->foreignId('food_id')
                ->constrained('foods')
                ->onUpdate('cascade')
                ->onDelete('cascade');
            $table->foreignId('pet_id')
                ->constrained('pets')
                ->onUpdate('cascade')
                ->onDelete('cascade');
//            $table->string('user')->unique();
            $table->string('user');
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
        Schema::dropIfExists('surveys');
    }
}
