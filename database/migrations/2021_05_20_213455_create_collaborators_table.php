<?php

use App\Models\Collaborator;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCollaboratorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('collaborators', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('departament_id')->nullable();
            $table->unsignedBigInteger('province_id')->nullable();
            $table->unsignedBigInteger('district_id')->nullable();
            $table->unsignedBigInteger('ubigee_id')->nullable();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('departament_id')->references('id')->on('departaments')->onDelete('cascade');
            $table->foreign('province_id')->references('id')->on('provinces')->onDelete('cascade');
            $table->foreign('district_id')->references('id')->on('districts')->onDelete('cascade');
            $table->foreign('ubigee_id')->references('id')->on('ubigees')->onDelete('cascade');

            $table->string('documento', 25);
            $table->string('ndocumento', 20)->unique();
            $table->string('nombres');
            $table->string('apellidos');
            $table->date('fechanac');
            $table->string('instruccion', 50);
            $table->string('telefono', 50);
            $table->string('direccion');
            $table->string('correo');
            $table->string('sexo', 2);
            $table->string('estadocivil',25);
            $table->string('sanguineo',3);
            $table->string('hijos',4);
            $table->string('contacto',50);
            $table->string('telemeergencia',9);
            $table->string('tiempocasa',50);
            $table->string('banco', 50);
            $table->string('cuentabancaria', 20);
            $table->enum('estado', [Collaborator::ACEPTADO, Collaborator::RECHAZADO])->default(Collaborator::ACEPTADO);

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
        Schema::dropIfExists('collaborators');
    }
}
