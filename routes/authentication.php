<?php

use App\Modules\Authentication\App\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::resource('users', UsersController::class);