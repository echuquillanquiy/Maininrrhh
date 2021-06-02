<?php

use App\Http\Controllers\Entrevistador\CollaboratorController;
use App\Http\Controllers\Entrevistador\WorkController;
use App\Http\Livewire\Entrevistador\CollaboratorDatoGeneral;
use App\Http\Livewire\Entrevistador\CollaboratorDatoMedico;
use App\Http\Livewire\Entrevistador\CollaboratorTraining;
use Illuminate\Support\Facades\Route;

Route::redirect('', 'entrevistador/works');

Route::resource('works', WorkController::class)->names('works');

Route::resource('collaborators', CollaboratorController::class)->names('collaborators');

Route::get('collaborators/{collaborator}/datogenerals', CollaboratorDatoGeneral::class)->name('collaborators.datogenerals');

Route::get('collaborators/{collaborator}/datosmedicos', CollaboratorDatoMedico::class)->name('collaborators.datosmedicos');

Route::get('collaborators/{collaborator}/trainings', CollaboratorTraining::class)->name('collaborators.trainings');


