<?php $page="expense-report";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Expense Report</h4>
            </div>
        </div>
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus select-focus">
                    <label class="focus-label">Purchased By</label>
                    <select class="select floating">
                        <option>Select buyer</option>
                        <option>Loren Gatlin</option>
                        <option>Tarah Shropshire</option>
                    </select>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <label class="focus-label">From</label>
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus">
                    <label class="focus-label">To</label>
                    <div class="cal-icon">
                        <input class="form-control floating datetimepicker" type="text">
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-3">
                <a href="#" class="btn btn-success btn-block w-100"> Search </a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>Item</th>
                                <th>Purchase From</th>
                                <th>Purchase Date</th>
                                <th>Purchased By</th>
                                <th>Amount</th>
                                <th>Paid By</th>
                                <th class="text-center">Status</th>
                                <th class="text-end">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Anaesthetic machine</strong>
                                </td>
                                <td>Biomedical Equipment Inc</td>
                                <td>22 Jun 2018</td>
                                <td>Tarah Shropshire</td>
                                <td>$62480</td>
                                <td>Cheque</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="custom-badge status-green dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            Approved
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Pending</a>
                                            <a class="dropdown-item" href="#">Approved</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{url('edit-expense')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Stretcher</strong>
                                </td>
                                <td>Hospital Equipment Inc</td>
                                <td>17 Aug 2018</td>
                                <td>Loren Gatlin</td>
                                <td>$8048</td>
                                <td>Cash</td>
                                <td class="text-center">
                                    <div class="dropdown action-label">
                                        <a class="custom-badge status-red dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                            Pending
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="#">Pending</a>
                                            <a class="dropdown-item" href="#">Approved</a>
                                        </div>
                                    </div>
                                </td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{url('edit-expense')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @component('components.notification')                
    @endcomponent
</div>
@component('components.sidebar')                
@endcomponent
@endsection