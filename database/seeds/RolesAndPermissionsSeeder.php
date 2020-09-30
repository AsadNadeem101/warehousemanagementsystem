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
				
			    ['name'=>'superadmindashboard'],
				['name'=>'super_admin_report'],

				['name'=>'warehouse_list'],
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

			    ['name'=>'tenantrentverification'],  
			    ['name'=>'servicechargesverification'], 
			    ['name'=>'warehouseregistration'], 
			    ['name'=>'warehouseadapproval'],  
			  	['name'=>'plansubscriptionverification'],
			 	['name'=>'product'],
			 	
			    
		    ],
		    
		    'warehouse_admin' => [
				 ['name'=>'warehouseadmindashboard'],
				

			
				['name'=>'employee_list'],
			    ['name'=>'employee_create'],
			    ['name'=>'employee_edit'],
			    ['name'=>'employee_show'],
			    ['name'=>'employee_delete'],

			    ['name'=>'mark_attendance'],  
			   
			   
			    ['name'=>'employeepayroll'],
		    ],
		    
		    'tenant' => [
				['name'=>'tenantdashboard'],
				
				['name'=>'my_bid'],
				['name'=>'tenantrent_list'],
		    ],

		    'renter' => [
				['name'=>'renterdashboard'],
				

				['name'=>'warehouse_list'],
			    ['name'=>'warehouse_create'],
			    ['name'=>'warehouse_edit'],
			    ['name'=>'warehouse_show'],
			    ['name'=>'warehouse_delete'],

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
