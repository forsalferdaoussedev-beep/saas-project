<?php

use Illuminate\Support\Facades\Route;

// Will be filled in Phase 3
Route::get('/ping', fn() => response()->json(['message' => 'API v1 is alive 🚀']));