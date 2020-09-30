<?php

namespace App\DataTables;

use App\Model\EmployerPayroll;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use App\Helpers\Helper;

class EmployeePayrollDataTable extends DataTable
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
            ->editColumn('employee_id', function($id){
                return Helper::employeeIdToName($id->employee_id);
            })
            ->escapeColumns([])
            ->addColumn('action', 'employeepayroll.action');
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\EmployeePayroll $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(EmployerPayroll $model)
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
                    ->setTableId('employeepayroll-table')
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
            Column::make('employee_id'),
            Column::make('month'),
            Column::make('actual_salary'),
            Column::make('payable'),
            Column::make('deduction'),
            Column::make('status'),
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
        return 'EmployeePayroll_' . date('YmdHis');
    }
}
