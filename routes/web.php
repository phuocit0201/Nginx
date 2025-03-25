<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/send-email-queue', [App\Http\Controllers\SendEmailQueue::class, 'index']);
Route::post('/send-email-queue', [App\Http\Controllers\SendEmailQueue::class, 'sendEmail'])->name('send.email.queue');

Route::get('/test-cicd', [App\Http\Controllers\SendEmailQueue::class, 'index']);
Route::get('/test-cicd1', [App\Http\Controllers\SendEmailQueue::class, 'index']);
Route::get('/test-cicd2', [App\Http\Controllers\SendEmailQueue::class, 'index']);
Route::get('/test-cicd3', [App\Http\Controllers\SendEmailQueue::class, 'index']);
Route::get('/test-cicd4', [App\Http\Controllers\SendEmailQueue::class, 'index']);
Route::get('/test-cicd5', [App\Http\Controllers\SendEmailQueue::class, 'index']);
Route::get('/test-cicd6', [App\Http\Controllers\SendEmailQueue::class, 'index']);