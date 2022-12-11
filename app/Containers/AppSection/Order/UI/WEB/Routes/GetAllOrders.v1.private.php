<?php

use App\Containers\AppSection\Order\UI\WEB\Controllers\GetAllOrdersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GetAllOrdersController::class, 'index'])->name('home');


