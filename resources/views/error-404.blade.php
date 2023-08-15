<?php $page="error-404";?>
@extends('layout.mainlayout_page')
@section('content')
<div class="main-wrapper error-wrapper">
        <div class="error-box">
            <h1>404</h1>
            <h3><i class="fa fa-warning"></i> Oops! Page not found!</h3>
            <p>The page you requested was not found.</p>
            <a href="index" class="btn btn-primary go-home">Go to Home</a>
        </div>
    </div>
@component('components.sidebar')                
@endcomponent
@endsection