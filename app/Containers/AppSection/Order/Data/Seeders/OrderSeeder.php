<?php

namespace App\Containers\AppSection\Order\Data\Seeders;

use App\Containers\AppSection\Order\Tasks\CreateOrderTask;
use App\Containers\AppSection\User\Data\Seeders\UserSeeder;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;

class OrderSeeder extends ParentSeeder
{
    private const MIN_PRICE = 3400;

    private const MAX_PRICE = 80000;

    private const DECIMALS = 2;

    private const SEED_COUNT = 50;

    public function run()
    {
        for ($i = 0; $i < self::SEED_COUNT; $i++){

            app(CreateOrderTask::class)->run($this->fakeData());
        }
    }


    private function fakeData()
    {
        return [
            'user_id' => random_int(1, UserSeeder::SEED_COUNT),
            'price' => fake()->randomFloat(self::DECIMALS, self::MIN_PRICE, self::MAX_PRICE),
            'is_paid' => random_int(0, 1),
            'description' => fake()->realTextBetween(180, 650, 3),
            'comment' => fake()->realText(150),
        ];
    }
}
