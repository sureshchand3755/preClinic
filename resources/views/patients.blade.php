<?php $page="patients";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
	<div class="content">
		@component('components.page-title')  
        @slot('li_1') Patients @endslot              
        @endcomponent
		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive">
					<table class="table table-border table-striped custom-table datatable mb-0">
						<thead>
							<tr>
								<th>Name</th>
								<th>Age</th>
								<th>Address</th>
								<th>Phone</th>
								<th>Email</th>
								<th class="text-end">Action</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Jennifer Robinson</td>
								<td>35</td>
								<td>1545 Dorsey Ln NE, Leland, NC, 28451</td>
								<td>(207) 808 8863</td>
								<td>jenniferrobinson@example.com</td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-patient')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Terry Baker</td>
								<td>63</td>
								<td>555 Front St #APT 2H, Hempstead, NY, 11550</td>
								<td>(376) 150 6975</td>
								<td>terrybaker@example.com</td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-patient')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Kyle Bowman</td>
								<td>7</td>
								<td>5060 Fairways Cir #APT 207, Vero Beach, FL, 32967</td>
								<td>(981) 756 6128</td>
								<td>kylebowman@example.com</td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-patient')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Marie Howard</td>
								<td>22</td>
								<td>3501 New Haven Ave #152, Columbia, MO, 65201</td>
								<td>(634) 09 3833</td>
								<td>mariehoward@example.com</td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-patient')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Joshua Guzman</td>
								<td>34</td>
								<td>4712 Spring Creek Dr, Bonita Springs, FL, 34134</td>
								<td>(407) 554 4146</td>
								<td>joshuaguzman@example.com</td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-patient')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Julia Sims</td>
								<td>27</td>
								<td>517 Walker Dr, Houma, LA, 70364, United States</td>
								<td>(680) 432 2662</td>
								<td>juliasims@example.com</td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-patient')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Linda Carpenter</td>
								<td>24</td>
								<td>2226 Victory Garden Ln, Tallahassee, FL, 32301</td>
								<td>(218) 661 8316</td>
								<td>lindacarpenter@example.com</td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-patient')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Melissa Burton</td>
								<td>35</td>
								<td>3321 N 26th St, Milwaukee, WI, 53206</td>
								<td>(192) 494 8073</td>
								<td>melissaburton@example.com</td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-patient')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Patrick Knight</td>
								<td>21</td>
								<td>Po Box 3336, Commerce, TX, 75429</td>
								<td>(785) 580 4514</td>
								<td>patrickknight@example.com</td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-patient')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Denise Stevens</td>
								<td>7</td>
								<td>1603 Old York Rd, Abington, PA, 19001</td>
								<td>(836) 257 1379</td>
								<td>denisestevens@example.com</td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-patient')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Judy Clark</td>
								<td>22</td>
								<td>4093 Woodside Circle, Pensacola, FL, 32514</td>
								<td>(359) 969 3594</td>
								<td>judy.clark@example.com</td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-patient')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Dennis Salazar</td>
								<td>34</td>
								<td>891 Juniper Drive, Saginaw, MI, 48603</td>
								<td>(933) 137 6201</td>
								<td>dennissalazar@example.com</td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-patient')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Charles Ortega</td>
								<td>32</td>
								<td>3169 Birch Street, El Paso, TX, 79915</td>
								<td>(380) 141 1885</td>
								<td>charlesortega@example.com</td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-patient')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
										</div>
									</div>
								</td>
							</tr>
							<tr>
								<td><img width="28" height="28" src="{{ URL::asset('/assets/img/user.jpg')}}" class="rounded-circle m-r-5" alt=""> Sandra Mendez</td>
								<td>24</td>
								<td>2535 Linden Avenue, Orlando, FL, 32789</td>
								<td>(797) 506 1265</td>
								<td>sandramendez@example.com</td>
								<td class="text-end">
									<div class="dropdown dropdown-action">
										<a href="#" class="action-icon dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
										<div class="dropdown-menu dropdown-menu-right">
											<a class="dropdown-item" href="{{url('edit-patient')}}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
											<a class="dropdown-item" href="#" data-bs-toggle="modal" data-bs-target="#delete_patient"><i class="fa fa-trash-o m-r-5"></i> Delete</a>
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
</div>
<div id="delete_patient" class="modal fade delete-modal" role="dialog">
	@component('components.modal-popup')   
    @slot('li_1') Are you sure want to delete this Patient? @endslot              
    @endcomponent
</div>
@component('components.sidebar')                
@endcomponent
@endsection