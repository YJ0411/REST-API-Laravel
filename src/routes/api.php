<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HealthController;
use Carbon\Carbon;

// Health check routes
Route::get('/health', [HealthController::class, 'index']);