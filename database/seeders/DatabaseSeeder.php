<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleAndPermissionSeeder::class,
//            RoleSeeder::class,
            UserSeeder::class,
            CustomerSeeder::class,
//            DraftsSeeder::class,
//            ManagerSeeder::class,
//            OrderSeeder::class,
//            OwnerSeeder::class,
            PermissionSeeder::class,
//            RevisionSeeder::class,
            SkillSeeder::class,
            WriterSeeder::class,

        ]);
    }
}
