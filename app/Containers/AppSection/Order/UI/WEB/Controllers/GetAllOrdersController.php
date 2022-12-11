<?php

namespace App\Containers\AppSection\Order\UI\WEB\Controllers;

use App\Containers\AppSection\Order\Actions\GetAllOrdersAction;
use App\Containers\AppSection\Order\UI\WEB\Requests\GetAllOrdersRequest;
use App\Containers\AppSection\User\Actions\GetAllUsersAction;
use App\Ship\Parents\Controllers\WebController;

class GetAllOrdersController extends WebController
{
    public function index()
    {
        $orders = app(GetAllOrdersAction::class)->run();

        $users = app(GetAllUsersAction::class)->run();

        return view('appSection@order::index', compact('orders', 'users'));
    }
}
