<?php

namespace App\Containers\AppSection\User\Actions;

use App\Containers\AppSection\User\Models\User;
use App\Containers\AppSection\User\Tasks\FindUserByIdTask;
use App\Containers\AppSection\User\Tasks\SumOrdersForPaidTask;
use App\Containers\AppSection\User\UI\WEB\Requests\FindUserByIdRequest;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Actions\Action as ParentAction;

class SumOrdersForPaid extends ParentAction
{
    /**
     * @throws NotFoundException
     */
    public function run(User $user, int $isPaid)
    {
        return app(SumOrdersForPaidTask::class)->run($user, $isPaid);
    }
}
