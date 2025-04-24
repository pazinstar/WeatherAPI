<?php

use App\Http\Controllers\API\WeatherController;
use Illuminate\Support\Facades\Route;

Route::get('/weather/{city}', [WeatherController::class, 'show']);
