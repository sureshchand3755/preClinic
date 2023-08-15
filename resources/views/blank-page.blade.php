<?php $page="blank-page";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.page-title')  
        @slot('li_1') Blank Page @endslot              
        @endcomponent
        @component('components.notification')                
        @endcomponent
    </div>
      @component('components.sidebar')                
      @endcomponent
@endsection