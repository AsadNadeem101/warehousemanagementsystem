<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = User::create([
            'name' => 'Super Admin',
            'email' => 'super_admin@wms.com',
            'password' => Hash::make('12345678'),
        ]);

        $super_admin->assignRole('super_admin');

        $warehouse_admin = User::create([
            'name' => 'Warehouse Admin',
            'email' => 'warehouse_admin@wms.com',
            'password' => Hash::make('12345678'),
        ]);

        $warehouse_admin->assignRole('warehouse_admin');

        $tenant = User::create([
            'name' => 'Tenant 1',
            'email' => 'tenant1@wms.com',
            'password' => Hash::make('12345678'),
        ]);

        $tenant->assignRole('tenant');

        $renter = User::create([
            'name' => 'Renter 1',
            'email' => 'renter1@wms.com',
            'password' => Hash::make('12345678'),
        ]);

        $renter->assignRole('renter');


    }
}
