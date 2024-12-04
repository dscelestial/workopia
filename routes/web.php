<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', [HomeController::class, 'index'])->name('pages.index');

Route::resource('jobs', JobController::class);
