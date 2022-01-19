<?php

namespace Database\Seeders;

use App\Models\Skill;
use App\Models\User;
use App\Models\Writer;
use Illuminate\Database\Seeder;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Skill::factory()
            ->hasAttached(Writer::factory(4)
                ->create([
                    'user_id'=>User::query()
                    ->inRandomOrder()
                    ->first()]))
            ->create();

    }
}
