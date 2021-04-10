<?php

use App\Modules\Entity\App\Controllers\EntitiesController;
use Illuminate\Support\Facades\Route;

Route::resource('entities', EntitiesController::class);