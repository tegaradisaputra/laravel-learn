<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    $data = 'straa';
    $age = 18;
    return view('about', ['data' => $data, 'age' => $age]); //passing data -> array

    //return view('about', compact('data', 'age')); // passing data -> compact

    // return view('about')
    //                 ->with('data', 'straa')
    //                 ->with('age', 18); // passing data -> with()
});

Route::get('/contact', function () {
    return view('contact.index');
});

Route::get('/siswa', function () {
    $data = [
        ['nama' => 'budi', 'nilai' => 80, 'id' => 1001],
        ['nama' => 'alex', 'nilai' => 75, 'id' => 1002],
        ['nama' => 'putra', 'nilai' => 90, 'id' => 1003]
    ];
    return view('siswa.index', ['data' => $data]);
});

Route::get('/siswa/{id}', function ($id) {
    // dd($id);
    return view('siswa.show', ['id' => $id]); // route wildcard
});


