<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHolidaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('holidays', function (Blueprint $table) {
            $table->id();
            //Aggiungi colonne
            $table->unsignedTinyInteger('guests');
            $table->string('dicount_code', 8, 2)->nullable();
            $table->float('price', 8, 2);
            $table->boolean('confirmed');
            $table->string('address', 100);
            $table->string('post_code', 10);
            $table->string('city', 70);
            $table->string('country', 100);
            $table->text('description')->nullable();
            //
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
        Schema::dropIfExists('holidays');
    }
}
