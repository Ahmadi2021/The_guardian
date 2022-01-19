<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Drafts;
use App\Models\Manager;
use App\Models\Order;
use App\Models\Revision;
use App\Models\User;
use App\Models\Writer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        dd('hello');
//        Customer::factory()->count(50)->create();
        User::factory(4)
            ->has(Customer::factory(1)
                ->has(Order::factory(3)
                    ->has(Revision::factory(3))
                    ->has(Drafts::factory(1))
                    ->hasAttached(Manager::factory(3)
                        ->create(['user_id'=>User::query()
                            ->inRandomOrder()
                            ->first()]))
                    ->hasAttached(Writer::factory(3)
                        ->create([
                            'user_id'=>User::query()
                            ->inRandomOrder()
                            ->first()]))
                ))
            ->create();
//        User::factory()
//            ->has(Customer::factory()->has(Order::factory()->count(3))->count(1))
//            ->count(10)
//            ->create();


    }
}
