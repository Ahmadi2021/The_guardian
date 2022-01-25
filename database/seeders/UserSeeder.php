<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(User::count() === 0)
        {
            $users = [
                [
                    'name'=>'Admin',
                    'email'=>'admin@guardian.com',
                    'password'=>Hash::make('password'),
                    'created_at'=>Carbon::now()
                ],
                [
                    'name'=>'Manager',
                    'email'=>'manager@guardian.com',
                    'password'=>Hash::make('password'),
                    'created_at'=>Carbon::now()
                ],
                [
                    'name'=>'Writer',
                    'email'=>'writer@guardian.com',
                    'password'=>Hash::make('password'),
                    'created_at'=>Carbon::now()
                ],
                [
                    'name'=>'Customer',
                    'email'=>'customer@guardian.com',
                    'password'=>Hash::make('password'),
                    'created_at'=>Carbon::now()
                ]
            ];
            User::query()->insert($users);


            $roles = Role::all();
            User::all()->map(function($user, $key)use($roles){
                $user->roles()->attach(++$key);
            });
//            User::factory()
//                ->has(Customer::factory())
//                ->create();
        }
    }
}
