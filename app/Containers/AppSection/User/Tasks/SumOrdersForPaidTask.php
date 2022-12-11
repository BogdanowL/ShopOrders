<?php

namespace App\Containers\AppSection\User\Tasks;

use App\Containers\AppSection\User\Data\Repositories\UserRepository;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Exceptions\NotFoundException;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Exception;

class SumOrdersForPaidTask extends ParentTask
{
    public function __construct(
        protected UserRepository $repository
    ) {
    }

    public function run(User $user, $isPaid)
    {
        try {
            return $this->repository->sumOrdersForPaid($user, $isPaid);
        } catch (Exception) {
            throw new NotFoundException();
        }
    }
}
