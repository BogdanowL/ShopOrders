<?php

namespace App\Containers\AppSection\User\UI\WEB\Controllers;

use App\Containers\AppSection\Order\Models\Order;
use App\Containers\AppSection\User\Actions\FindUserByIdAction;
use App\Containers\AppSection\User\Actions\SumAllOrdersAction;
use App\Containers\AppSection\User\Actions\SumOrdersForPaid;
use App\Containers\AppSection\User\UI\WEB\Requests\FindUserByIdRequest;
use App\Ship\Parents\Controllers\WebController;

class FindUserByIdController extends WebController
{
    public function show($id)
    {
        $user = app(FindUserByIdAction::class)->run((int)$id);

        $notPaidSum = app(SumOrdersForPaid::class)->run($user, Order::PAID_FALSE);
        $paidSum = app(SumOrdersForPaid::class)->run($user, Order::PAID_TRUE);
        $allOrdersSum = app(SumAllOrdersAction::class)->run($user);

        return view('appSection@user::show', compact('user', 'paidSum', 'notPaidSum', 'allOrdersSum'));

    }
}
