<?php

namespace App\DataTables;

use App\Models\Transaction;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class TransactionDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
        ->editColumn('user', function ($query) {
            $user = '<span class="text-muted fw-semibold text-muted d-block fs-5 align-middle">' . $query->user_id . '</span>';
                return $user;
        })
        // ->editColumn('status', function ($query) {
        //     $changeStatusBtn = '<div class="form-check form-switch">
        //                     <input class="form-check-input change-status" type="checkbox" name="status" value="' . $query->is_active . '"' . ($query->is_active ? ' checked' : '') . ' data-id="' . $query->id . '">';
        //     return $changeStatusBtn;
        // })
        // ->addColumn('action', function (MerchandiseCategory $category) {
        //     return view('pages.master-merchandise.merchandise-category.columns._actions', compact('category'));
        // })
        // ->rawColumns(['status'])
        ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Transaction $model): QueryBuilder
    {
        // $query = $model->with([''])
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('transaction-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    //->dom('Bfrtip')
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->buttons([
                        Button::make('excel'),
                        Button::make('csv'),
                        Button::make('pdf'),
                        Button::make('print'),
                        Button::make('reset'),
                        Button::make('reload')
                    ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            // Column::make('no'),
            Column::make('id'),
            Column::make('user'),
            // Column::make('room'),
            // Column::make('status'),
            // Column::make('created_at'),
            // Column::make('updated_at'),
            // Column::computed('action')
            //       ->exportable(false)
            //       ->printable(false)
            //       ->width(60)
            //       ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Transaction_' . date('YmdHis');
    }
}