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

            $table->unsignedBigInteger('collaborator_id');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->unsignedBigInteger('amount_id')->nullable();
            $table->unsignedBigInteger('area_id')->nullable();
            $table->unsignedBigInteger('position_id')->nullable();

            $table->foreign('collaborator_id')->references('id')->on('collaborators')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('amount_id')->references('id')->on('amounts')->onDelete('cascade');
            $table->foreign('area_id')->references('id')->on('areas')->onDelete('cascade');
            $table->foreign('position_id')->references('id')->on('positions')->onDelete('cascade');

            $table->string('respirador');
            $table->string('zapatos');
            $table->string('tallazapato',4);
            $table->string('tallapantalon',4);
            $table->string('tallacamisa',4);
            $table->date('inicioinduccion')->nullable();
            $table->date('fininduccion')->nullable();
            $table->string('lugarinduccion', 25)->nullable();
            $table->string('especialidad',50)->nullable();
            $table->string('medio', 50);
            $table->text('observaciones')->nullable();
            $table->text('comentarios')->nullable();

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
