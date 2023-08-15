<?php $page="lock-screen";?>
@extends('layout.mainlayout_page')
@section('content')
<div class="main-wrapper error-wrapper">
    <div class="error-box">
        <form action="index">
            <div class="lock-user">
                <img class="rounded-circle" src="{{ URL::asset('/assets/img/user.jpg')}}" alt="">
                <h6>John Doe</h6>
            </div>
            <div class="form-group">
                <input class="form-control" placeholder="Enter Password" type="password">
            </div>
            <div class="text-center">
                <a href="{{url('login')}}">Sign in as a different user?</a>
            </div>
        </form>
    </div>
</div>
@component('components.sidebar')                
@endcomponent>
@endsection