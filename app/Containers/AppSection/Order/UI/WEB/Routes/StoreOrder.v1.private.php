<?php

use App\Containers\AppSection\Order\UI\WEB\Controllers\CreateOrderController;
use Illuminate\Support\Facades\Route;

Route::post('order/store', [CreateOrderController::class, 'store'])
    ->name('order.store');

