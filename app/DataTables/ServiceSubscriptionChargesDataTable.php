<?php

namespace App\DataTables;

use App\Model\ServiceSubscriptionCharges;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use App\Helpers\Helper;
use Auth;
use App\User;

class ServiceSubscriptionChargesDataTable extends DataTable
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
            ->editColumn('renter_id', function($id){
                return Helper::userIdToName($id->renter_id);
            })
            ->editColumn('service_id', function($id){
                return Helper::ServiceIdToName($id->service_id);
            })
             ->escapeColumns([])
            ->addColumn('action', 'servicesubscriptioncharges.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\ServiceSubscriptionCharge $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ServiceSubscriptionCharges $model)
    {
         
        if(Auth::user()->type == 'renter')
        {
            $model = ServiceSubscriptionCharges::where('renter_id',Auth::user()->id);
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
                    ->setTableId('servicesubscriptioncharges-table')
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
            Column::make('renter_id'),
            Column::make('service_id'),
            Column::make('month'),
            Column::make('payment_status'),
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
        return 'ServiceSubscriptionCharges_' . date('YmdHis');
    }
}
