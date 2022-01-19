<?php

namespace Database\Seeders;

use App\Models\Drafts;
use Illuminate\Database\Seeder;

class DraftsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Drafts::factory()->count(50)->create();
    }
}
