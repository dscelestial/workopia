<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/jobs', function () {
    return view('jobs.index', [
        'title' => 'Jobs',
        'jobs' => [
            'Web Developer',
            'Software Engineer',
            'Database Administrator',
            'System Analyst'
        ],
    ]);
});
