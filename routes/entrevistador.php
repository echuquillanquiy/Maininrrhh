<?php

use App\Http\Controllers\Entrevistador\CollaboratorController;
use App\Http\Controllers\Entrevistador\WorkController;
use Illuminate\Support\Facades\Route;

Route::redirect('', 'entrevistador/works');

Route::resource('works', WorkController::class)->names('works');

Route::resource('collaborators', CollaboratorController::class)->names('collaborators');

