<?php

use App\Http\Controllers\api\SupportApiController;
use Illuminate\Support\Facades\Route;


Route::apiResource('/supports', SupportApiController::class);
