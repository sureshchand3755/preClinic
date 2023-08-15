<?php $page="edit-expense";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.page-title')  
        @slot('li_1') Edit Expense @endslot              
        @endcomponent
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Item Name</label>
                                <input class="form-control" value="Anaesthetic machine" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Purchase From</label>
                                <input class="form-control" value="Biomedical Equipment Inc" type="text">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Purchase Date</label>
                                <div class="cal-icon">
                                    <input class="form-control datetimepicker" type="text" value="22 Jun 2018">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Purchased By </label>
                                <select class="select">
                                    <option selected>Daniel Porter</option>
                                    <option>Roger Dixon</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Amount</label>
                                <input class="form-control" value="$62480" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Paid By</label>
                                <select class="select">
                                    <option>Cash</option>
                                    <option selected>Cheque</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Status</label>
                                <select class="select">
                                    <option>Pending</option>
                                    <option selected>Approved</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Attachments</label>
                                <input class="form-control" type="file">
                            </div>
                        </div>
                    </div>
                    <div class="attach-files">
                        <ul>
                            <li>
                                <img src="{{ URL::asset('/assets/img/user.jpg')}}" alt="">
                                <a href="#" class="fa fa-close file-remove"></a>
                            </li>
                            <li>
                                <img src="{{ URL::asset('/assets/img/user.jpg')}}" alt="">
                                <a href="#" class="fa fa-close file-remove"></a>
                            </li>
                        </ul>
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