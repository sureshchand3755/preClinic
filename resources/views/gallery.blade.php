<?php $page="gallery";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.page-title')  
        @slot('li_1') Gallery @endslot              
        @endcomponent
        <div id="lightgallery" class="row">
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                <a href="img/blog/blog-01.jpg')}}">
                    <img class="img-thumbnail" src="{{ URL::asset('/assets/img/blog/blog-01.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                <a href="img/blog/blog-02.jpg')}}">
                    <img class="img-thumbnail" src="{{ URL::asset('/assets/img/blog/blog-02.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                <a href="img/blog/blog-03.jpg')}}">
                    <img class="img-thumbnail" src="{{ URL::asset('/assets/img/blog/blog-03.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                <a href="img/blog/blog-04.jpg')}}">
                    <img class="img-thumbnail" src="{{ URL::asset('/assets/img/blog/blog-04.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                <a href="img/blog/blog-01.jpg')}}">
                    <img class="img-thumbnail" src="{{ URL::asset('/assets/img/blog/blog-01.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                <a href="img/blog/blog-02.jpg')}}">
                    <img class="img-thumbnail" src="{{ URL::asset('/assets/img/blog/blog-02.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                <a href="img/blog/blog-03.jpg')}}">
                    <img class="img-thumbnail" src="{{ URL::asset('/assets/img/blog/blog-03.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                <a href="img/blog/blog-04.jpg')}}">
                    <img class="img-thumbnail" src="{{ URL::asset('/assets/img/blog/blog-04.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                <a href="img/blog/blog-01.jpg')}}">
                    <img class="img-thumbnail" src="{{ URL::asset('/assets/img/blog/blog-01.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                <a href="img/blog/blog-02.jpg')}}">
                    <img class="img-thumbnail" src="{{ URL::asset('/assets/img/blog/blog-02.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                <a href="img/blog/blog-03.jpg')}}">
                    <img class="img-thumbnail" src="{{ URL::asset('/assets/img/blog/blog-03.jpg')}}" alt="">
                </a>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 m-b-20">
                <a href="img/blog/blog-04.jpg')}}">
                    <img class="img-thumbnail" src="{{ URL::asset('/assets/img/blog/blog-04.jpg')}}" alt="">
                </a>
            </div>
        </div>
    </div>
    @component('components.notification')                
    @endcomponent
</div>
@component('components.sidebar')                
@endcomponent
@endsection