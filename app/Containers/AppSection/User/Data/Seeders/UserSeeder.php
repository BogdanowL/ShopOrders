<?php

namespace App\Containers\AppSection\User\Data\Seeders;

use App\Containers\AppSection\User\Tasks\CreateUserTask;
use App\Ship\Parents\Seeders\Seeder as ParentSeeder;


class UserSeeder extends ParentSeeder
{
    public const SEED_COUNT = 10;

    public function run()
    {
        for ($i = 0; $i < self::SEED_COUNT; $i++){

            app(CreateUserTask::class)->run($this->fakeData());
        }
    }


    private function fakeData()
    {
          return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            'phone' => fake()->phoneNumber(),
            'contact_info' => fake()->address() . ' ' . fake()->city(),
              ];
    }
}
