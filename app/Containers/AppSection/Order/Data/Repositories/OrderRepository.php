<?php

namespace App\Containers\AppSection\Order\Data\Repositories;

use App\Ship\Parents\Repositories\Repository as ParentRepository;

class OrderRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',

    ];


}
