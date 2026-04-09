<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

$jobs = [
    [
        'id' => 1,
        'title' => 'Laravel Developer',
        'salary' => '$40000'
    ],
    [
        'id' => 2,
        'title' => 'Vue.js Developer',
        'salary' => '$30000'
    ],
    [
        'id' => 3,
        'title' => 'React Developer',
        'salary' => '$35000'
    ]
];


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs', function () use ($jobs) {
    return view(
        'jobs',

    );
});

Route::get('/jobs/{id}', function ($id) use ($jobs) {
    $job = Arr::first($jobs, function ($value) use ($id) {
        return $value['id'] == $id;
    });

    if (!$job) {
        abort(404);
    }

    return view('job', ['job' => $job]);
});


Route::get('/contact', function () {
    return view('contact');
});
