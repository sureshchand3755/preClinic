<?php $page="forgot-password";?>
@extends('layout.mainlayout_page')
@section('content')
<div class="main-wrapper account-wrapper">
    <div class="account-page">
        <div class="account-center">
            <div class="account-box">
                <form class="form-signin" action="#">
                    <div class="account-logo">
                        <a href="{{url('index')}}"><img src="{{ URL::asset('/assets/img/logo-dark.png')}}" alt=""></a>
                    </div>
                    <div class="form-group">
                        <label>Enter Your Email</label>
                        <input type="text" class="form-control" autofocus>
                    </div>
                    <div class="form-group text-center">
                        <button class="btn btn-primary account-btn" type="submit">Reset Password</button>
                    </div>
                    <div class="text-center register-link">
                        <a href="{{url('login')}}">Back to Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@component('components.sidebar')                
@endcomponent
@endsection