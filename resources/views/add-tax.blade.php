<?php $page="add-tax";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.page-title')  
        @slot('li_1') Add Tax @endslot              
        @endcomponent
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form>
                    <div class="form-group">
                        <label>Tax Name <span class="text-danger">*</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Tax Percentage (%) <span class="text-danger">*</span></label>
                        <input class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label>Status <span class="text-danger">*</span></label>
                        <select class="select">
                            <option>Pending</option>
                            <option>Approved</option>
                        </select>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create Tax</button>
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