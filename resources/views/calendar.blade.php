<?php $page="calendar";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.page-title')  
        @slot('li_1') Calendar @endslot              
        @endcomponent
        <div class="row">
            <div class="col-lg-12">
                <div class="card-box mb-0">
                    <div class="row">
                        <div class="col-md-12">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
                <div class="modal fade none-border" id="event-modal">
                    <div class="modal-dialog">
                        <div class="modal-content modal-md">
                            <div class="modal-header">
                                <h4 class="modal-title">Add Event</h4>
								<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <div class="modal-body"></div>
                            <div class="modal-footer text-center">
                                <button type="button" class="btn btn-primary submit-btn save-event">Create event</button>
                                <button type="button" class="btn btn-danger btn-lg delete-event" data-bs-dismiss="modal">Delete</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
        @component('components.notification')                
        @endcomponent
        @component('components.modal-popup')                
         @endcomponent
    </div>
@component('components.sidebar')                
@endcomponent
@endsection