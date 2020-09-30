<?php // Code within app\Helpers\Helper.php

namespace App\Helpers;
use App\Model\Warehouse;
use App\Model\Inventory;
use App\Model\TenantWarehouse;
use App\Model\WarehouseAd;
use App\Model\PLan;
use App\Model\Service;
use App\Model\Employee;
use App\User;
class Helper
{
    public static function shout(string $string)
    {
        return strtoupper($string);
    }

    public static function warehouseIdToName($id)
    {
        $warehouseName = Warehouse::find($id);
        return $warehouseName->name;
    }
    public static function warehouseadIdToTitle($id)
    {
        $warehousead = WarehouseAd::find($id);
        return $warehousead->title;
    }
    public static function tenantWarehouseIdToStartTime($id)
    {
        $tenant_warehouse_id_to_start_time = TenantWarehouse::find($id);
        return $tenant_warehouse_id_to_start_time->start_date;
    }
    public static function tenantWarehouseIdToDuration($id)
    {
        $tenant_warehouse_id_to_duration = TenantWarehouse::find($id);
        return $tenant_warehouse_id_to_duration->duration;
    }
    public static function userIdToName($id)
    {
        $user_name=User::where('id',$id)->value('name');
        return $user_name;   
    }

    public static function checkRemainingInventory($id)//product id
    {
        $in = Inventory::where('id',$id)->sum('in');
        $out = Inventory::where('id',$id)->sum('out');
        $remaining = $in - $out;

        return $remaining;
    }
    public static function PlanIdToName($id)
    {
        $plan_name = Plan::find($id);
        return $plan_name->name;
    }
    public static function ServiceIdToName($id)
    {
        $service_name=Service::where('id',$id)->value('name');
        return $service_name;    
    }
    public static function employeeIdToName($id)
    {
        $employee_name=Employee::where('id',$id)->value('name');
        return $employee_name;  
    }
}
