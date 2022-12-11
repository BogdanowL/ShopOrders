<?php

namespace App\Containers\AppSection\User\Data\Repositories;

use App\Containers\AppSection\Order\Models\Order;
use App\Containers\AppSection\User\Models\User;
use App\Ship\Parents\Repositories\Repository as ParentRepository;

class UserRepository extends ParentRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id' => '=',
        // ...
    ];

    public function sumOrdersForPaid(User $user, int $isPaid)
    {

        return $user->orders()
            ->where(Order::PAID_COLUMN, '=', $isPaid)
            ->pluck('price')
            ->sum();
    }

    public function sumAllOrders(User $user) : float
    {
        return $user->orders()
            ->pluck('price')
            ->sum();
    }
}
