<?php

use Illuminate\Support\Facades\Route;

Route::get('/lama', function () {
    return view('about');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('fiturTTS');
});

Route::get('/publish', function () {
    return view('fiturPublishing');
});

Route::get('/search', function () {
    return view('fiturSearchPaper');
});

Route::get('/translate', function () {
    return view('fiturTranslate');
});

Route::get('/summarize', function () {
    return view('fiturSummarize');
});

Route::get('/summarize2', function () {
    return view('summarize2');
});