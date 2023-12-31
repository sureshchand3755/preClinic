<?php $page="edit-salary";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.page-title')  
        @slot('li_1') Edit Staff Salary @endslot              
        @endcomponent
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Select Staff</label>
                                <select class="select">
                                    <option>John Doe</option>
                                    <option>Richard Miles</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <label>Net Salary</label>
                            <input class="form-control" type="text" value="$4000">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <h4 class="text-primary">Earnings</h4>
                            <div class="form-group">
                                <label>Basic</label>
                                <input class="form-control" type="text" value="$6500">
                            </div>
                            <div class="form-group">
                                <label>DA(40%)</label>
                                <input class="form-control" type="text" value="$2000">
                            </div>
                            <div class="form-group">
                                <label>HRA(15%)</label>
                                <input class="form-control" type="text" value="$700">
                            </div>
                            <div class="form-group">
                                <label>Conveyance</label>
                                <input class="form-control" type="text" value="$70">
                            </div>
                            <div class="form-group">
                                <label>Allowance</label>
                                <input class="form-control" type="text" value="$30">
                            </div>
                            <div class="form-group">
                                <label>Medical Allowance</label>
                                <input class="form-control" type="text" value="$20">
                            </div>
                            <div class="form-group">
                                <label>Others</label>
                                <input class="form-control" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <h4 class="text-primary">Deductions</h4>
                            <div class="form-group">
                                <label>TDS</label>
                                <input class="form-control" type="text" value="$300">
                            </div>
                            <div class="form-group">
                                <label>ESI</label>
                                <input class="form-control" type="text" value="$20">
                            </div>
                            <div class="form-group">
                                <label>PF</label>
                                <input class="form-control" type="text" value="$20">
                            </div>
                            <div class="form-group">
                                <label>Leave</label>
                                <input class="form-control" type="text" value="$250">
                            </div>
                            <div class="form-group">
                                <label>Prof. Tax</label>
                                <input class="form-control" type="text" value="$110">
                            </div>
                            <div class="form-group">
                                <label>Labour Welfare</label>
                                <input class="form-control" type="text" value="$10">
                            </div>
                            <div class="form-group">
                                <label>Fund</label>
                                <input class="form-control" type="text" value="$40">
                            </div>
                            <div class="form-group">
                                <label>Others</label>
                                <input class="form-control" type="text" value="$15">
                            </div>
                        </div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @component('components.notification')                
    @endcomponent
</div>
@component('components.sidebar')                
@endcomponent
@endsection