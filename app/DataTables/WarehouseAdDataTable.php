<?php

namespace App\DataTables;

use App\Model\WarehouseAd;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class WarehouseAdDataTable extends DataTable
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
            ->editColumn('status', function($warehouseAd){
                if($warehouseAd->status == 'active')
                {
                    return "<span style='background-color:green; color:white; padding:5px '>Active</span>";
                }
                else if($warehouseAd->status == 'inactive')
                {
                    return "<span style='background-color:red; color:white; padding:5px '>Inactive</span>";
                }
                else if($warehouseAd->status == 'pending')
                {
                    return "<span style='background-color:orange; color:white; padding:5px '>Pending</span>";
                }
            })
            ->escapeColumns([])
            ->addColumn('action', 'warehousead.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\WarehouseAd $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(WarehouseAd $model)
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
                    ->setTableId('warehousead-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->dom('Bfrtip')
                    ->orderBy(1)
                    ->buttons(
                        Button::make('create'),
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
            Column::make('title'),
            Column::make('description'),
            Column::make('marla'),
            Column::make('room'),
            Column::make('status'),
            Column::make('created_at'),
            Column::make('updated_at'),
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
        return 'WarehouseAd_' . date('YmdHis');
    }
}
