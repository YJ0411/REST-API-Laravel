<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Carbon\Carbon;

class HealthController extends Controller
{
    /**
     * Get API health status
     */
    public function index()
    {
        return response()->json([
            'status' => 'ok',
            'timestamp' => Carbon::now('Asia/Kuala_Lumpur')->format('Y-m-d H:i:s') . ' MYT',
            'message' => 'YJ Laravel REST API is running!',
            'laravel_version' => app()->version(),
            'php_version' => phpversion(),
        ]);
    }
}