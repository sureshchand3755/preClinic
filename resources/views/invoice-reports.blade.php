<?php $page="invoice-reports";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-12">
                <h4 class="page-title">Invoice Report</h4>
            </div>
        </div>
        <div class="row filter-row">
            <div class="col-sm-6 col-md-3">
                <div class="form-group form-focus select-focus">
                    <label class="focus-label">Patient</label>
                    <select class="select floating">
                        <option>Select Client</option>
                        <option>Jennifer Robinson</option>
                        <option>Terry Baker</option>
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
                <a href="#" class="btn btn-success btn-block w-100">Search</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table mb-0 datatable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Invoice Number</th>
                                <th>Client</th>
                                <th>Created Date</th>
                                <th>Due Date</th>
                                <th>Amount</th>
                                <th>Status</th>
                                <th class="text-end">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><a href="invoice-view">#INV-0001</a></td>
                                <td>Global Technologies</td>
                                <td>1 Sep 2017</td>
                                <td>7 Sep 2017</td>
                                <td>$2099</td>
                                <td><span class="custom-badge status-green">Paid</span></td>
                                <td class="text-end">
                                    <div class="dropdown dropdown-action">
                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="{{url('edit-invoice')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                            <a class="dropdown-item" href="invoice-view"><i class="fa fa-eye m-r-5"></i> View</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-file-pdf-o m-r-5"></i> Download</a>
                                            <a class="dropdown-item" href="#"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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