<?php

use Illuminate\Support\Facades\Route;

Route::get('toastr-notification',[\App\Http\Controllers\ToastrNotificationController::class,'toastrNotification']);
