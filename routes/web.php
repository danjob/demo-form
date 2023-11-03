<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;

Route::get('/', function () {
    return redirect()->route('demo.create');
});

Route::resource('demo', DemoController::class)
    ->only(['index', 'store', 'create']);
