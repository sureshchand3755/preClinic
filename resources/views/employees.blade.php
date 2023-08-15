<?php $page="employees";?>
@extends('layout.mainlayout')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title">Employee</h4>
                </div>
                <div class="col-sm-8 col-9 text-end m-b-20">
                    <a href="{{url('add-employee')}}" class="btn btn-primary float-end btn-rounded"><i class="fa fa-plus"></i> Add Employee</a>
                </div>
            </div>
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <label class="focus-label">Employee ID</label>
                        <input type="text" class="form-control floating">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <label class="focus-label">Employee Name</label>
                        <input type="text" class="form-control floating">
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus select-focus">
                        <label class="focus-label">Role</label>
                        <select class="select floating">
                            <option>Select Role</option>
                            <option>Nurse</option>
                            <option>Pharmacist</option>
                            <option>Laboratorist</option>
                            <option>Accountant</option>
                            <option>Receptionist</option>
                        </select>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="btn btn-success btn-block w-100"> Search </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table">
                            <thead>
                                <tr>
                                    <th style="min-width:200px;">Name</th>
                                    <th>Employee ID</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th style="min-width: 110px;">Join Date</th>
                                    <th>Role</th>
                                    <th class="text-end">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle" alt=""> <h2>Albina Simonis</h2>
                                    </td>
                                    <td>NS-0001</td>
                                    <td>albinasimonis@example.com</td>
                                    <td>828-634-2744</td>
                                    <td>7 May 2015</td>
                                    <td>
                                        <span class="custom-badge status-green">Nurse</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{url('edit-employee')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle" alt=""> <h2>Cristina Groves</h2>
                                    </td>
                                    <td>DR-0001</td>
                                    <td>cristinagroves@example.com</td>
                                    <td>928-344-5176</td>
                                    <td>1 Jan 2013</td>
                                    <td>
                                        <span class="custom-badge status-blue">Doctor</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{url('edit-employee')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle" alt=""> <h2>Mary Mericle</h2>
                                    </td>
                                    <td>SF-0003</td>
                                    <td>marymericle@example.com</td>
                                    <td>603-831-4983</td>
                                    <td>27 Dec 2017</td>
                                    <td>
                                        <span class="custom-badge status-grey">Accountant</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{url('edit-employee')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle" alt=""> <h2>Haylie Feeney</h2>
                                    </td>
                                    <td>SF-0002</td>
                                    <td>hayliefeeney@example.com</td>
                                    <td>616-774-4962</td>
                                    <td>21 Apr 2017</td>
                                    <td>
                                        <span class="custom-badge status-grey">Laboratorist</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{url('edit-employee')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle" alt=""> <h2>Zoe Butler</h2>
                                    </td>
                                    <td>SF-0001</td>
                                    <td>zoebutler@example.com</td>
                                    <td>444-555-9999</td>
                                    <td>19 May 2012</td>
                                    <td>
                                        <span class="custom-badge status-grey">Pharmacist</span>
                                    </td>
                                    <td class="text-end">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{url('edit-employee')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_employee"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
    <div id="delete_employee" class="modal fade delete-modal" role="dialog">
        @component('components.modal-popup')   
        @slot('li_1') Are you sure want to delete this Employee? @endslot              
        @endcomponent
    </div>
@component('components.sidebar')                
@endcomponent
@endsection