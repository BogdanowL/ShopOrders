<?php

namespace App\Containers\AppSection\Order\Tasks;

use Apiato\Core\Exceptions\CoreInternalErrorException;
use App\Containers\AppSection\Order\Data\Repositories\OrderRepository;
use App\Ship\Parents\Tasks\Task as ParentTask;
use Prettus\Repository\Exceptions\RepositoryException;

class GetAllOrdersTask extends ParentTask
{
    public function __construct(
        protected OrderRepository $repository
    ) {
    }

    public function run(): mixed
    {
        return $this->repository->all();
    }
}
