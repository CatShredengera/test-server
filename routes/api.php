<?php

use App\Http\Controllers\Api\CompanyController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'company'], function () {
    Route::get('/', [CompanyController::class, 'index']);
});
