<?php $page="index";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        <div class="good-morning-blk">
            <div class="row">
                <div class="col-md-6">
                    <div class="morning-user">
                        <h2>Good Morning, <span>Williams Sarah</span></h2>
                        <p>Have a nice day at work</p>
                    </div>
                </div>
                <div class="col-md-6 position-blk">
                    <div class="morning-img">
                        <img src="assets/img/morning-img-03.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-lg-12 col-xl-7">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-title patient-visit mb-0">
                            <h4>Static of your Health</h4>
                            <div class="income-value">
                                <p><span class="passive-view"><i class="feather-arrow-up-right me-1"></i>40%</span> vs last month</p>
                            </div>
                            <div class="average-health">
                                <h5>72bmp <span>Average</span></h5>
                            </div>
                            <div class="form-group mb-0">
                                <select class="form-control select">
                                    <option>2022</option>
                                    <option>2021</option>
                                    <option>2020</option>
                                    <option>2019</option>
                                </select>
                            </div>
                        </div>
                        <div id="health-chart"></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-lg-12 col-xl-5 d-flex">
                <div class="card">
                    <div class="card-body">
                        <div class="chart-title patient-visit">
                            <h4>Body Mass index</h4>
                        </div>
                        <div class="body-mass-blk">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="weight-blk">
                                        <div class="center slider">
                                            <div>
                                                <h4 >68</h4>
                                                <span>kg</span>
                                            </div>
                                            <div>
                                                <h4 >70</h4>
                                                <span>kg</span>
                                            </div>
                                            <div>
                                                <h4 >72</h4>
                                                <span>kg</span>
                                            </div>
                                            <div>
                                                <h4 >74</h4>
                                                <span>kg</span>
                                            </div>
                                            <div>
                                                <h4 >76</h4>
                                                <span>kg</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="weight-blk">
                                        <div class="center slider">
                                            <div>
                                                <h4 >160</h4>
                                                <span>cm</span>
                                            </div>
                                            <div>
                                                <h4 >162</h4>
                                                <span>cm</span>
                                            </div>
                                            <div>
                                                <h4 >164</h4>
                                                <span>cm</span>
                                            </div>
                                            <div>
                                                <h4 >166</h4>
                                                <span>cm</span>
                                            </div>
                                            <div>
                                                <h4 >168</h4>
                                                <span>cm</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="progress weight-bar">
                                <div class="progress-bar progress-bar-success" role="progressbar" ></div>
                            </div>
                            <ul class="weight-checkit">
                                <li>Underweight</li>
                                <li>Normal (45.5)</li>
                                <li>Overweight</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 col-xl-3 d-flex">
                <div class="card report-blk">
                    <div class="card-body">
                        <div class="report-head">
                            <h4><img src="assets/img/icons/report-icon-01.svg" class="me-2" alt="">Heart Rate</h4>
                        </div>
                        <div id="heart-rate"></div>
                        <div class="dash-content">
                            <h5>110 <span>bpm</span></h5>
                            <p><span class="passive-view"><i class="feather-arrow-up-right me-1"></i>40%</span> vs last month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 d-flex">
                <div class="card report-blk">
                    <div class="card-body">
                        <div class="report-head">
                            <h4><img src="assets/img/icons/report-icon-02.svg" class="me-2" alt="">Temperature</h4>
                        </div>
                        <div id="temperature-chart"></div>
                        <div class="dash-content">
                            <h5>38.6 <span>c</span></h5>
                            <p><span class="negative-view"><i class="feather-arrow-down-right me-1"></i>-20%</span> vs last month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 d-flex">
                <div class="card report-blk">
                    <div class="card-body">
                        <div class="report-head">
                            <h4><img src="assets/img/icons/report-icon-03.svg" class="me-2" alt="">Blood Pressure</h4>
                        </div>
                        <div id="pressure-chart"></div>
                        <div class="dash-content">
                            <h5>120 <span>mm/Hg</span></h5>
                            <p><span class="negative-view"><i class="feather-arrow-down-right me-1"></i>-40%</span> vs last month</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-xl-3 d-flex">
                <div class="card report-blk">
                    <div class="card-body">
                        <div class="report-head">
                            <h4><img src="assets/img/icons/report-icon-04.svg" class="me-2" alt="">Sleep</h4>
                        </div>
                        <div id="sleep-chart"></div>
                        <div class="dash-content">
                            <h5>7<span>h</span> 30 <span>m</span></h5>
                            <p><span class="negative-view"><i class="feather-arrow-down-right me-1"></i>-10%</span> vs last month</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-md-12 col-xl-7">
                <div class="row">
                    <div class="col-12 col-md-6 col-xl-5">
                        <div class="card top-departments">
                            <div class="card-header pb-0">
                                <h4 class="card-title mb-0">Notes</h4>
                            </div>
                            <div class="card-body pt-1">
                                <div class="note-checkit">
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist" checked>
                                        <span class="checkmark"></span> Take vitamin Tablet
                                    </label>
                                </div>
                                <div class="note-checkit">
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist" checked>
                                        <span class="checkmark"></span> Add Appoinment
                                    </label>
                                </div>
                                <div class="note-checkit">
                                    <label class="custom_check">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> Set a goal
                                    </label>
                                </div><div class="note-checkit">
                                    <label class="custom_check mb-0">
                                        <input type="checkbox" name="select_specialist">
                                        <span class="checkmark"></span> Add new weight
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 col-xl-7 d-flex">
                        <div class="card wallet-widget general-health">
                            <div class="circle-bar circle-bar2">
                                <div class="circle-graph2" data-percent="66">
                                    <b><img src="assets/img/icons/health-img.svg" alt=""></b>
                                </div>
                            </div>
                            <div class="main-limit">
                                <p>General Health</p>
                                <h4>75%</h4>
                                <div class="income-value mt-2">
                                    <p><span class="passive-view"><i class="feather-arrow-up-right me-1"></i>40%</span> vs last month</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12  col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title d-inline-block">Medical History</h4> <a href="appointments.html" class="patient-views float-end">Show all</a>
                            </div>
                            <div class="card-body p-0 table-dash">
                                <div class="table-responsive">
                                    <table class="table mb-0 border-0 datatable custom-table patient-table">
                                        <thead>
                                            <tr>
                                                <th>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </th>
                                                <th>Doctor name</th>
                                                <th>Diagnosis</th>
                                                <th>Date</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td class="table-image">
                                                    <img width="28" height="28" class="rounded-circle" src="assets/img/profiles/avatar-02.jpg" alt="">
                                                    <h2>Dr.Jenny Smith</h2>
                                                </td>
                                                <td>Dermotology</td>
                                                <td >12.05.2022 </td>
                                                <td><button class="custom-badge status-gray re-shedule">Reschedule</button></td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-appointment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td class="table-image">
                                                    <img width="28" height="28" class="rounded-circle" src="assets/img/profiles/avatar-04.jpg" alt="">
                                                    <h2>Andrea Lalema</h2>
                                                </td>
                                                <td>Dermotology</td>
                                                <td >10.05.2022 </td>
                                                <td><button class="custom-badge status-gray re-shedule">Reschedule</button></td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-appointment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="form-check check-tables">
                                                        <input class="form-check-input" type="checkbox" value="something">
                                                    </div>
                                                </td>
                                                <td class="table-image">
                                                    <img width="28" height="28" class="rounded-circle" src="assets/img/profiles/avatar-05.jpg" alt="">
                                                    <h2>Dr.William Stephin</h2>
                                                </td>
                                                <td>Dermotology</td>
                                                <td >12.05.2022 </td>
                                                <td><button class="custom-badge status-gray re-shedule ">Reschedule</button></td>
                                                <td class="text-end">
                                                    <div class="dropdown dropdown-action">
                                                        <a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <a class="dropdown-item" href="edit-appointment.html"><i class="fa-solid fa-pen-to-square m-r-5"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12 col-xl-5">
                <div class="card flex-fill mb-2">
                    <div class="card-body">
                        <div id="calendar-doctor" class="calendar-container"></div>
                    </div>
                </div>
                <div class="treat-box mb-2">
                    <div class="user-imgs-blk">
                        <img src="assets/img/profiles/avatar-05.jpg" alt="">
                        <div class="active-user-detail flex-grow-1">
                            <h4>General Health Check up</h4>
                            <p>Dr. Dianne Philips at 10:00-11:00 AM</p>
                        </div>
                    </div>
                    <a href="javascript:;" class="custom-badge status-green">Active</a>
                </div>
                <div class="treat-box">
                    <div class="user-imgs-blk">
                        <img src="assets/img/profiles/avatar-03.jpg" alt="">
                        <div class="active-user-detail flex-grow-1">
                            <h4>Temporary Headache </h4>
                            <p>Dr. Jenny Smith at 05:00-06:00 PM</p>
                        </div>
                    </div>
                    <a href="javascript:;" class="custom-badge status-orange">Pending</a>
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
