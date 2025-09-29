<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('form');
});

Route::post('/submit', function (Request $request) {
    \Log::debug($request->all());

    $name = $request->input('name');
    $email = $request->input('email');

    return "Form data: $name, $email";
});