<?php

use App\Containers\AppSection\Order\UI\WEB\Controllers\FindOrderByIdController;
use Illuminate\Support\Facades\Route;

Route::get('order/{order}', [FindOrderByIdController::class, 'show'])
    ->name('order.show');

