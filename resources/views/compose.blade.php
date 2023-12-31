<?php $page="compose";?>
@extends('layout.mainlayout')
@section('content')
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="{{url('inbox')}}"><i class="fa fa-home back-icon"></i> <span>Back to Inbox</span></a>
                </li>
                <li>
                    <a href="{{url('inbox')}}">Inbox <span class="mail-count">(21)</span></a>
                </li>
                <li>
                    <a href="#">Starred</a>
                </li>
                <li>
                    <a href="#">Sent Mail</a>
                </li>
                <li>
                    <a href="#">Draft <span class="mail-count">(8)</span></a>
                </li>
                <li>
                    <a href="#">Trash</a>
                </li>
                <li class="menu-title">Label <a href="#" class="add-user-icon"><i class="fa fa-plus"></i></a></li>
                <li>
                    <a href="#"><i class="fa fa-circle text-success mail-label"></i> Work</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-circle text-danger mail-label"></i> Office</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-circle text-warning mail-label"></i> Personal</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="page-wrapper">
    <div class="content">
        @component('components.page-title')  
        @slot('li_1') Compose @endslot              
        @endcomponent
        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <form>
                        <div class="form-group">
                            <input type="email" placeholder="To" class="form-control">
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" placeholder="Cc" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" placeholder="Bcc" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Subject" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea rows="4" cols="5" class="form-control summernote" placeholder="Enter your message here"></textarea>
                        </div>
                        <div class="form-group mb-0">
                            <div class="text-center compose-btn">
                                <button class="btn btn-primary"><span>Send</span> <i class="fa fa-send m-l-5"></i></button>
                                <button class="btn btn-success m-l-5" type="button"><span>Draft</span> <i class="fa fa-floppy-o m-l-5"></i></button>
                                <button class="btn btn-success m-l-5" type="button"><span>Delete</span> <i class="fa fa-trash-o m-l-5"></i></button>
                            </div>
                        </div>
                    </form>
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
