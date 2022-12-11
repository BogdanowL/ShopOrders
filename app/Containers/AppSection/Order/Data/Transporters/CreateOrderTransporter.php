<?php

namespace App\Containers\AppSection\Order\Data\Transporters;

use Spatie\LaravelData\Data;

class CreateOrderTransporter extends Data
{
    public function __construct(
        public int $user_id,
        public float $price,
        public string $description,
        public string $comment,
    ) {
    }

}
