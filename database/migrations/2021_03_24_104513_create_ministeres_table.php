<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMinisteresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ministeres', function (Blueprint $table) {
            $table->id();
            $table->string("designation");
            $table->string("ministre");
            $table->string("nom");
            $table->text("adresse");
            $table->integer("phone");
            $table->date("nomination");

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
        Schema::dropIfExists('ministeres');

    }
}
