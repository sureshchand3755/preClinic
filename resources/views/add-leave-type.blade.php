<?php $page="add-leave-type";?>
@extends('layout.mainlayout')
@section('content')
        <div class="page-wrapper">
            <div class="content">
                @component('components.page-title')  
                @slot('li_1') Add Leave Type @endslot              
                @endcomponent
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form>
                            <div class="form-group">
                                <label>Leave Type <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="form-group">
                                <label>Number of days <span class="text-danger">*</span></label>
                                <input class="form-control" type="text">
                            </div>
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn">Add Leave Type</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@component('components.sidebar')                
@endcomponent
@endsection