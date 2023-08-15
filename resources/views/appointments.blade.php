<?php $page="appointments";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.page-title')  
        @slot('li_1') Appointments @endslot              
        @endcomponent
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-striped custom-table">
						<thead>
							<tr>
								<th>Appointment ID</th>
								<th>Patient Name</th>
								<th>Age</th>
								<th>Doctor Name</th>
								<th>Department</th>
								<th>Appointment Date</th>
								<th>Appointment Time</th>
								<th>Status</th>
								<th class="text-end">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>APT0001</td>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Denise Stevens</td>
								<td>35</td>
								<td>Henry Daniels</td>
								<td>Cardiology</td>
								<td>30 Dec 2018</td>
								<td>10:00am - 11:00am</td>
								<td><span class="custom-badge status-red">Inactive</span></td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-appointment')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_appointment"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td>APT0002</td>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Denise Stevens</td>
								<td>35</td>
								<td>Henry Daniels</td>
								<td>Cardiology</td>
								<td>30 Dec 2018</td>
								<td>10:00am - 11:00am</td>
								<td><span class="custom-badge status-green">Active</span></td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-appointment')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
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
    @component('components.notification')                
    @endcomponent
	@component('components.modal-popup')                
    @endcomponent
</div>
@component('components.sidebar')                
@endcomponent
@endsection