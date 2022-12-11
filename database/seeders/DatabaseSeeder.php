<?php

namespace Database\Seeders;

use Apiato\Core\Loaders\SeederLoaderTrait;
use App\Containers\AppSection\User\Models\User;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder
 */
class DatabaseSeeder extends Seeder
{
    use SeederLoaderTrait;

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        $this->runLoadingSeeders();
    }
}
