<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

		$permissionsByRole = [
		    'super_admin' => [
			    ['name'=>'warehouse_list'],
			    ['name'=>'warehouse_create'],
			    ['name'=>'warehouse_edit'],
			    ['name'=>'warehouse_show'],
			    ['name'=>'warehouse_delete'],

			    ['name'=>'user_list'],
			    ['name'=>'user_create'],
			    ['name'=>'user_edit'],
			    ['name'=>'user_show'],
			    ['name'=>'user_delete'],

				['name'=>'service_list'],
			    ['name'=>'service_create'],
			    ['name'=>'service_edit'],
			    ['name'=>'service_show'],
			    ['name'=>'service_delete'],

				['name'=>'plan_list'],
			    ['name'=>'plan_create'],
			    ['name'=>'plan_edit'],
			    ['name'=>'plan_show'],
			    ['name'=>'plan_delete'],
		    ],
		    
		    'warehouse_admin' => [
				['name'=>'product_list'],
			    ['name'=>'product_create'],
			    ['name'=>'product_edit'],
			    ['name'=>'product_show'],
			    ['name'=>'product_delete'],

				['name'=>'employee_list'],
			    ['name'=>'employee_create'],
			    ['name'=>'employee_edit'],
			    ['name'=>'employee_show'],
			    ['name'=>'employee_delete'],
		    ],
		    
		    'tenant' => [
				['name'=>'tenant_dashboard'],
		    ],

		    'renter' => [
				['name'=>'renter_dashboard'],
		    ]		    
		];

		foreach ($permissionsByRole as $role => $permissionIds) {
			$permissions = Permission::insert($permissionIds);
		    $_role = Role::create(['name' => $role ]);

		   	$_role->givePermissionTo($permissionIds);
		}
    }
}
