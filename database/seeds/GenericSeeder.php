<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Model\Warehouse;

class GenericSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creating super admin
        $super_admin = User::create([
            'name'     => 'Super Admin',
            'email'    => 'super_admin@wms.com',
            'type'     => 'super_admin',
            'password' => Hash::make('12345678'),
        ]);
        //Assigning role
        $super_admin->assignRole('super_admin');

        //Creating tenant
        $tenant = User::create([
            'name'     => 'Tenant 1',
            'email'    => 'tenant1@wms.com',
            'contact'  => '0302445566',
            'type'     =>  'tenant',
            'cnic'    => '3523423455566',
            'password' => Hash::make('12345678'),
        ]);
        //Assigning role
        $tenant->assignRole('tenant');

        //Creating renter
        $renter = User::create([
            'name'     => 'Renter 1',
            'email'    => 'renter1@wms.com',
            'cnic'    => '3523423455576',
            'type'     => 'renter',
            'contact'     => '0322445544',
            'password' => Hash::make('12345678'),
        ]);
        //Assigning role
        $renter->assignRole('renter');

        //Creating warehouse
        $warehouse = Warehouse::create([
            'name'        => 'Warehouse 1',
            'description' => 'Test Warehouse',
            'country'     => 'Pakistan',
            'city'        => 'Lahore',
            'address'     => 'Sultan Mahmood Road, Lahore',
            'marla'       => '20',
            'room'        => '5',
            'renter_id'   =>  $renter->id,
        ]);

        //Creating warehouse admin
        $warehouse_admin = User::create([
            'name'         => 'Warehouse Admin',
            'email'        => 'warehouse_admin@wms.com',
            'type'         => 'warehouse_admin',
            'contact'      => '03334545676',
            'cnic'         => '3623423455566',
            'warehouse_id' => $warehouse->id, 
            'password'     => Hash::make('12345678'),
        ]);
        //Assigning role
        $warehouse_admin->assignRole('warehouse_admin');

    }
}
