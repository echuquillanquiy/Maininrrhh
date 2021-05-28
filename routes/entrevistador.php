<?php

use App\Http\Livewire\EntrevistadorWork;
use Illuminate\Support\Facades\Route;

Route::redirect('', 'entrevistador/works');

Route::get('works', EntrevistadorWork::class)->middleware('can:Leer trabajos')->name('works.index');
