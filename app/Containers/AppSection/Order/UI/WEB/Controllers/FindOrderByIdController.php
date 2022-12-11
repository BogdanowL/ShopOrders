<?php

namespace App\Containers\AppSection\Order\UI\WEB\Controllers;

use App\Containers\AppSection\Order\Actions\FindOrderByIdAction;
use App\Containers\AppSection\Order\Models\Order;
use App\Containers\AppSection\Order\UI\WEB\Requests\FindOrderByIdRequest;
use App\Ship\Parents\Controllers\WebController;

class FindOrderByIdController extends WebController
{
    public function show($id)
    {

        $order = app(FindOrderByIdAction::class)->run((int)$id);

        return view('appSection@order::show', compact('order'));
    }
}
