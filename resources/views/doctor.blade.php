<?php $page="doctor";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.page-title')  
        @slot('li_1') Doctors @endslot              
        @endcomponent
        <div class="row doctor-grid">
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a href="{{url('profile')}}" class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/doctor-thumb-03.jpg')}}"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('edit-doctor')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{url('profile')}}">Cristina Groves</a></h4>
                    <div class="doc-prof">Gynecologist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a href="{{url('profile')}}" class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/doctor-thumb-07.jpg')}}"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('edit-doctor')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{url('profile')}}">Marie Wells</a></h4>
                    <div class="doc-prof">Psychiatrist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a href="{{url('profile')}}" class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/doctor-thumb-04.jpg')}}"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('edit-doctor')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{url('profile')}}">Henry Daniels</a></h4>
                    <div class="doc-prof">Cardiologist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a href="{{url('profile')}}" class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/doctor-thumb-11.jpg')}}"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('edit-doctor')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{url('profile')}}">Mark Hunter</a></h4>
                    <div class="doc-prof">Urologist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a href="{{url('profile')}}" class="avatar" href="#"><img alt="" src="{{ URL::asset('/assets/img/doctor-thumb-12.jpg')}}"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('edit-doctor')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{url('profile')}}">Michael Sullivan</a></h4>
                    <div class="doc-prof">Ophthalmologist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a href="{{url('profile')}}" class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/doctor-thumb-02.jpg')}}"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('edit-doctor')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{url('profile')}}">Linda Barrett</a></h4>
                    <div class="doc-prof">Dentist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a href="{{url('profile')}}" class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/doctor-thumb-09.jpg')}}"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('edit-doctor')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{url('profile')}}">Ronald Jacobs</a></h4>
                    <div class="doc-prof">Oncologist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a hef="profile" class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/doctor-thumb-01.jpg')}}"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('edit-doctor')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{url('profile')}}">Albert Sandoval</a></h4>
                    <div class="doc-prof">Neurologist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a href="{{url('profile')}}" class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/doctor-thumb-05.jpg')}}"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('edit-doctor')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{url('profile')}}">Diana Bailey</a></h4>
                    <div class="doc-prof">General Surgery</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a href="{{url('profile')}}" class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/doctor-thumb-10.jpg')}}"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('edit-doctor')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{url('profile')}}">Shirley Willis</a></h4>
                    <div class="doc-prof">Radiologist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a href="{{url('profile')}}" class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/doctor-thumb-08.jpg')}}"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('edit-doctor')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{url('profile')}}">Pamela Curtis</a></h4>
                    <div class="doc-prof">Pediatrics</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-4  col-lg-3">
                <div class="profile-widget">
                    <div class="doctor-img">
                        <a href="{{url('profile')}}" class="avatar" href="{{url('profile')}}"><img alt="" src="{{ URL::asset('/assets/img/doctor-thumb-06.jpg')}}"></a>
                    </div>
                    <div class="dropdown profile-action">
                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="{{url('edit-doctor')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_doctor"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                        </div>
                    </div>
                    <h4 class="doctor-name text-ellipsis"><a href="{{url('profile')}}">Justin Parker</a></h4>
                    <div class="doc-prof">Physical Therapist</div>
                    <div class="user-country">
                        <i class="fa fa-map-marker"></i> United States, San Francisco
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="see-all">
                    <a class="see-all-btn" href="javascript:void(0);">Load More</a>
                </div>
            </div>
        </div>
    </div>
    @component('components.notification')                
    @endcomponent
    <div id="delete_doctor" class="modal fade delete-modal" role="dialog">
        @component('components.modal-popup')   
        @slot('li_1') Are you sure want to delete this Doctor? @endslot              
        @endcomponent
    </div>
</div>
@component('components.sidebar')                
@endcomponent
@endsection
