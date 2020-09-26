<?php

namespace App\DataTables;

use App\Model\WarehouseAdBid;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Auth;
use App\User;
use App\Helpers\Helper;

class WarehouseAdBidDataTable extends DataTable
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
            ->editColumn('status', function ($query){
                if($query->status == 'pending')
                { 
                    return '<span style="color:orange"><b>Pending</b></span>'; 
                }
                else if ($query->status == 'approved')
                {  
                    return '<span style="color:green"><b>Approved</b></span>';
                }
                else if ($query->status == 'rejected')
                {  
                    return '<span style="color:red"><b>Rejected</b></span>';
                }
                else if ($query->status == 'withdrawn')
                {  
                    return '<span style="color:brown"><b>Withdrawn</b></span>';
                }
            })
           
            ->escapeColumns([])
            ->addColumn('action', 'warehouseadbid.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\WarehouseAdBid $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(WarehouseAdBid $model)
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
                    ->setTableId('warehouseadbid-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                       // Button::make('create'),
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
            Column::make('warehouse_ad_id'),
            Column::make('renter_id'),
            Column::make('tenant_id'),
            Column::make('bid_amount'),
            Column::make('status'),
            Column::make('created_at'),
            Column::computed('action')
                  ->exportable(false)
                  ->printable(false)
                  ->width(120)
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
        return 'WarehouseAdBid_' . date('YmdHis');
    }
}
