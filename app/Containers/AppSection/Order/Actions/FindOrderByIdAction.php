<?php

namespace App\Containers\AppSection\Order\Actions;

use App\Containers\AppSection\Order\Models\Order;
use App\Containers\AppSection\Order\Tasks\FindOrderByIdTask;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class FindOrderByIdAction extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run($id): Order
    {
        return app(FindOrderByIdTask::class)->run($id);
    }
}
