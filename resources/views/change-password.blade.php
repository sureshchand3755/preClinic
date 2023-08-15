<?php $page="change-password";?>
@extends('layout.mainlayout')
@section('content')
        
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4 class="page-title">Change Password</h4>
                <form>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label>Old password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>New password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label>Confirm password</label>
                                <input type="password" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 text-center m-t-20">
                            <button type="button" class="btn btn-primary submit-btn">Update Password</button>
                        </div>
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