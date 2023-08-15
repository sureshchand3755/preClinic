<?php $page="activities";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.page-title')  
        @slot('li_1') Activities @endslot              
        @endcomponent
        <div class="row">
            <div class="col-md-12">
                <div class="activity">
                    <div class="activity-box">
                        <ul class="activity-list">
                            <li>
                                <div class="activity-user">
                                    <a href="{{url('profile')}}" title="Lesley Grauer" data-bs-toggle="tooltip" class="avatar">
                                        <img alt="Lesley Grauer" src="{{ URL::asset('/assets/img/user.jpg')}}" class="img-fluid rounded-circle">
                                    </a>
                                </div>
                                <div class="activity-content">
                                    <div class="timeline-content">
                                        <a href="{{url('profile')}}" class="name">Lesley Grauer</a> added new task <a href="#">Hospital Administration</a>
                                        <span class="time">4 mins ago</span>
                                    </div>
                                </div>
								<a class="activity-delete" href="" title="Delete">&times</a>
                            </li>
                            <li>
                                <div class="activity-user">
                                    <a href="{{url('profile')}}" class="avatar" title="Jeffery Lalor" data-bs-toggle="tooltip">L</a>
                                </div>
                                <div class="activity-content">
                                    <div class="timeline-content">
                                        <a href="{{url('profile')}}" class="name">Jeffery Lalor</a> added <a href="profile" class="name">Loren Gatlin</a> and <a href="profile" class="name">Tarah Shropshire</a> to project <a href="#">Patient appointment booking</a>
                                        <span class="time">6 mins ago</span>
                                    </div>
                                </div>
								<a class="activity-delete" href="" title="Delete">&times</a>
                            </li>
                            <li>
                                <div class="activity-user">
                                    <a href="{{url('profile')}}" title="Catherine Manseau" data-bs-toggle="tooltip" class="avatar">
                                        <img alt="Catherine Manseau" src="{{ URL::asset('/assets/img/user.jpg')}}" class="img-fluid rounded-circle">
                                    </a>
                                </div>
                                <div class="activity-content">
                                    <div class="timeline-content">
                                        <a href="{{url('profile')}}" class="name">Catherine Manseau</a> completed task <a href="#">Appointment booking with payment gateway</a>
                                        <span class="time">12 mins ago</span>
                                    </div>
                                </div>
								<a class="activity-delete" href="" title="Delete">&times</a>
                            </li>
                            <li>
                                <div class="activity-user">
                                    <a href="#" title="Bernardo Galaviz" data-bs-toggle="tooltip" class="avatar">
                                        <img alt="Bernardo Galaviz" src="{{ URL::asset('/assets/img/user.jpg')}}" class="img-fluid rounded-circle">
                                    </a>
                                </div>
                                <div class="activity-content">
                                    <div class="timeline-content">
                                        <a href="{{url('profile')}}" class="name">Bernardo Galaviz</a> changed the task name <a href="#">Doctor available module</a>
                                        <span class="time">1 day ago</span>
                                    </div>
                                </div>
								<a class="activity-delete" href="" title="Delete">&times</a>
                            </li>
                            <li>
                                <div class="activity-user">
                                    <a href="{{url('profile')}}" title="Mike Litorus" data-bs-toggle="tooltip" class="avatar">
                                        <img alt="Mike Litorus" src="{{ URL::asset('/assets/img/user.jpg')}}" class="img-fluid rounded-circle">
                                    </a>
                                </div>
                                <div class="activity-content">
                                    <div class="timeline-content">
                                        <a href="{{url('profile')}}" class="name">Mike Litorus</a> added new task <a href="#">Patient and Doctor video conferencing</a>
                                        <span class="time">2 days ago</span>
                                    </div>
                                </div>
								<a class="activity-delete" href="" title="Delete">&times</a>
                            </li>
                            <li>
                                <div class="activity-user">
                                    <a href="{{url('profile')}}" title="Jeffery Lalor" data-bs-toggle="tooltip" class="avatar">
                                        <img alt="Jeffery Lalor" src="{{ URL::asset('/assets/img/user.jpg')}}" class="img-fluid rounded-circle">
                                    </a>
                                </div>
                                <div class="activity-content">
                                    <div class="timeline-content">
                                        <a href="{{url('profile')}}" class="name">Jeffery Lalor</a> added <a href="profile" class="name">Jeffrey Warden</a> and <a href="profile" class="name">Bernardo Galaviz</a> to the task of <a href="#">Private chat module</a>
                                        <span class="time">7 days ago</span>
                                    </div>
                                </div>
								<a class="activity-delete" href="" title="Delete">&times</a>
                            </li>
                        </ul>
                    </div>
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