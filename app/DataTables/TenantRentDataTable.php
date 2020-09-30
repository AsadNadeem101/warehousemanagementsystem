<?php

namespace App\DataTables;

use App\Model\TenantRent; 
use App\Model\TenantWarehouse;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use App\Helpers\Helper;
use Auth;
use App\User;

class TenantRentDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', 'tenantrent.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\TenantRent $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(TenantRent $model)
    {   
      
        if(Auth::user()->type == 'tenant')
        {
            $tenant_warehouse_id = TenantWarehouse::where('tenant_id',Auth::user()->id)->pluck('id');
            $model = TenantRent::where('tenant_warehouse_id',$tenant_warehouse_id);
            return $model->newQuery();            
        }
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('tenantrent-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('export'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    );
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::make('id'),
            Column::make('tenant_warehouse_id'),
            Column::make('month'), 
            Column::make('rent'), 
            Column::make('payment_status'), 
            Column::make('paid_at'), 
            Column::make('created_at'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(60)
                  ->addClass('text-center'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'TenantRent_' . date('YmdHis');
    }
}
