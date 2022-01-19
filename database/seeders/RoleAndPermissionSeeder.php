<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionSeeder extends Seeder
{
    private $admin, $manager, $writer, $customer;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->createRoles();
        $this->createPermissions();
        $this->assignPermission();
    }
    public function createRoles(){
        $this->admin =Role::firstOrCreate(['name'=>'admin']);
        $this->manager =Role::firstOrCreate(['name'=>'manager']);
        $this->writer =Role::firstOrCreate(['name'=>'writer']);
        $this->customer =Role::firstOrCreate(['name'=>'customer']);

    }
    public function createPermissions(){
        //Order
        Permission::firstOrCreate(['name'=>'view_all_orders']);
        Permission::firstOrCreate(['name'=>'view_order']);
        Permission::firstOrCreate(['name'=>'create_order']);
        Permission::firstOrCreate(['name'=>'update_order']);
        //Order Assigned To Writer
        Permission::firstOrCreate(['name'=>'view_all_assignedOrdersToWriters']);
        Permission::firstOrCreate(['name'=>'view_assignedOrderToWriter']);
        Permission::firstOrCreate(['name'=>'create_assignedOrderToWriter']);
        Permission::firstOrCreate(['name'=>'update_assignedOrderToWriter']);
        Permission::firstOrCreate(['name'=>'delete_assignedOrderToWriter']);
        //Order Assigned To Manager
        Permission::firstOrCreate(['name'=>'view_all_assignedOrdersToManagers']);
        Permission::firstOrCreate(['name'=>'view_assignedOrderToManager']);
        Permission::firstOrCreate(['name'=>'create_assignedOrderToManager']);
        Permission::firstOrCreate(['name'=>'update_assignedOrderToManager']);
        Permission::firstOrCreate(['name'=>'delete_assignedOrderToManager']);

    }
    public function assignPermission(){
        $this->admin->givePermissionTo(Permission::all());
        $this->manager->givePermissionTo([
            //order
            'view_all_orders',
            'view_order',

            //assigned order to writer
            'view_all_assignedOrdersToWriters',
            'view_assignedOrderToWriter',
            'create_assignedOrderToWriter',
            'update_assignedOrderToWriter',
            'delete_assignedOrderToWriter',
        ]);
    }
}
