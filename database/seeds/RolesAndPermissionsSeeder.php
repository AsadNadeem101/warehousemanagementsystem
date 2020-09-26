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
		    	['name'=>'super_admin_dashboard'],
				['name'=>'super_admin_report'],

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

			    ['name'=>'tenantrentverification'],  
			    ['name'=>'servicechargesverification'], 
			    ['name'=>'warehouseregistration'], 
			    ['name'=>'warehouseadapproval'], 
			  
			 	['name'=>'product'],
			    ['name'=>'superadmindashboard'],
			    
		    ],
		    
		    'warehouse_admin' => [
				['name'=>'warehouse_admin_dashboard'],
				['name'=>'warehouse_admin_report'],

				

				['name'=>'employee_list'],
			    ['name'=>'employee_create'],
			    ['name'=>'employee_edit'],
			    ['name'=>'employee_show'],
			    ['name'=>'employee_delete'],

			    ['name'=>'mark_attendance'],  
			    ['name'=>'warehouseadmindashboard'],
		    ],
		    
		    'tenant' => [
				['name'=>'tenant_dashboard'],
				['name'=>'tenant_report'],
				['name'=>'my_bid'],
				['name'=>'tenantrent_list'],
				['name'=>'tenantdashboard'],
		    ],

		    'renter' => [
				['name'=>'renter_dashboard'],
				['name'=>'renter_report'],

				['name'=>'warehouse_list'],
			    ['name'=>'warehouse_create'],
			    ['name'=>'warehouse_edit'],
			    ['name'=>'warehouse_show'],
			    ['name'=>'warehouse_delete'],


				['name'=>'employee_list'],
			    ['name'=>'employee_create'],
			    ['name'=>'employee_edit'],
			    ['name'=>'employee_show'],
			    ['name'=>'employee_delete'],

			    ['name'=>'warehouse_ad_bid'],
			    ['name'=>'servicesubscriptioncharges'],
			    ['name'=>'renterdashboard'], 
			    ['name'=>'plansubscriptionuser'], 
		    ]		    
		];

		foreach ($permissionsByRole as $role => $permissionIds) {
			$permissions = Permission::insert($permissionIds);
		    $_role = Role::create(['name' => $role ]);

		   	$_role->givePermissionTo($permissionIds);
		}
    }
}
