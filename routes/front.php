<?php

use App\Http\Controllers\Front\FrontHomeController;

Route::get('/', [FrontHomeController::class, 'index']);
