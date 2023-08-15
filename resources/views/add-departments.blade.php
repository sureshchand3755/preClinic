<?php $page="add-departments";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.page-title')  
        @slot('li_1') Add Department @endslot              
        @endcomponent
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form>
					<div class="form-group">
						<label>Department Name</label>
						<input class="form-control" type="text">
					</div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea cols="30" rows="4" class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label class="display-block">Department Status</label>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="status" id="product_active" value="option1" checked>
							<label class="form-check-label" for="product_active">
							Active
							</label>
						</div>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="status" id="product_inactive" value="option2">
							<label class="form-check-label" for="product_inactive">
							Inactive
							</label>
						</div>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary submit-btn">Create Department</button>
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