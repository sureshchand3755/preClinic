<?php $page="tax-settings";?>
@extends('layout.mainlayout')
@section('content')		
<div class="page-wrapper">
    <div class="content">
        @component('components.breadcrumb') 
        @slot('title') Invoice settings @endslot 
        @slot('li_1') Dashboard @endslot
        @slot('li_2') Tax Settings @endslot
        @endcomponent

        <div class="row">
            <div class="col-xl-3 col-md-4">
                <div class="widget settings-menu">
                    <ul>
                        <li class="nav-item">
                            <a href="{{url('invoices-settings')}}" class="nav-link">
                                <i class="feather feather-git-commit"></i> <span>General Settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('tax-settings')}}" class="nav-link active">
                                <i class="fas fa-bookmark"></i> <span>Tax Settings</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('bank-settings')}}" class="nav-link">
                                <i class="fas fa-university"></i> <span>Bank Settings</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            
            <div class="col-xl-9 col-md-8">
                <div class="card invoices-settings-card">
                    <div class="card-header">
                        <h5 class="card-title">Tax Settings</h5>
                    </div>
                    <div class="card-body">
                    
                        <!-- Form -->
                        <form action="#" class="invoices-settings-form">
                            <div class="row align-items-center form-group">
                                <label for="name" class="col-sm-3 col-form-label input-label">Enable Tax</label>
                                <div class="col-sm-9">
                                    <label class="custom_check">
                                        <input type="checkbox" name="invoice">
                                        <span class="checkmark"></span> Check to enable tax on invoice
                                    </label>
                                </div>
                            </div>
                            <div class="row align-items-center form-group">
                                <label for="email" class="col-sm-3 col-form-label input-label">Tax Percentage</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="row align-items-center form-group">
                                <label for="phone" class="col-sm-3 col-form-label input-label">GSTIN Number</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control">
                                </div>
                            </div>
                            <div class="invoice-setting-btn text-end">
                                <button type="submit" class="btn cancel-btn me-2">Cancel</button>
                                <button type="submit" class="btn btn-primary-save-bg">Save Changes</button>
                            </div>
                        </form>
                        <!-- /Form -->
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    @component('components.notification')                
    @endcomponent
</div>
@endsection
	  