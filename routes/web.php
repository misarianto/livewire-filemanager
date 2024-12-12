<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use LivewireFilemanager\Filemanager\Http\Controllers\Files\FileController;

Volt::route('/', 'dashboard');

Route::get('{path}', [FileController::class, 'show'])->where('path', '.*')->name('assets.show');