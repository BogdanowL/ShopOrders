<?php

use App\Containers\AppSection\Order\UI\WEB\Controllers\CreateOrderController;
use Illuminate\Support\Facades\Route;

Route::get('order/create', [CreateOrderController::class, 'create'])
    ->name('order.create');

