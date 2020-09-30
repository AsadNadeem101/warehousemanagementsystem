<?php

namespace App\DataTables;

use App\Model\PlanSubscriptionUser;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use App\Helpers\Helper;
use Auth;
use App\User;
class PlanSubscriptionUserDataTable extends DataTable
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
            ->editColumn('plan_id', function($id){
                return Helper::PlanIdToName($id->plan_id);
            })
            ->editColumn('warehouse_ad_id', function($id){
                return Helper::warehouseadIdToTitle($id->warehouse_ad_id);
            })
            ->addColumn('action', 'plansubscriptionuser.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\PlanSubscriptionUser $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(PlanSubscriptionUser $model)
    {
        if(Auth::user()->type == 'renter')
        {
            $model = PlanSubscriptionUser::where('renter_id',Auth::user()->id);
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
                    ->setTableId('plansubscriptionuser-table')
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
            Column::make('plan_id'),
            Column::make('warehouse_ad_id'),
            Column::make('paid'),
            Column::make('payment_status'),
            Column::make('system_verification'),
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
        return 'PlanSubscriptionUser_' . date('YmdHis');
    }
}
