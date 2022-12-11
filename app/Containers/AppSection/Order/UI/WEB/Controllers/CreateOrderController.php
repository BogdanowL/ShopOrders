<?php

namespace App\Containers\AppSection\Order\UI\WEB\Controllers;

use App\Containers\AppSection\Order\Actions\CreateOrderAction;
use App\Containers\AppSection\Order\UI\WEB\Requests\CreateOrderRequest;
use App\Containers\AppSection\Order\UI\WEB\Requests\StoreOrderRequest;
use App\Ship\Parents\Controllers\WebController;

class CreateOrderController extends WebController
{
    public function create(CreateOrderRequest $request)
    {

    }

    public function store(StoreOrderRequest $request)
    {
        $dto = $request->data();

        app(CreateOrderAction::class)->run($dto->toArray());

        return redirect()->back();
    }
}
