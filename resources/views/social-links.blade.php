<?php $page="social-links";?>
@extends('layout.mainlayout')
@section('content')		
<div class="page-wrapper">
    <div class="content">
		@component('components.breadcrumb')                
			@slot('title') Settings @endslot
			@slot('li_1') Home @endslot
			@slot('li_2') Settings @endslot
			@slot('li_3') Social Links @endslot
		@endcomponent
	
		<div class="row">
			<div class="col-lg-12">

				@component('components.settings-page')  
				@endcomponent

				<div class="row">
					<div class="col-lg-6 col-md-8">
						<div class="card">
							<div class="card-header">
								<h5 class="card-title">Social Link Settings</h5>
							</div>
							<div class="card-body pt-0">
								<form>
									<div class="settings-form">
										<div class="links-info">
											<div class="row form-row links-cont">
												<div class="form-group form-placeholder d-flex">
													<button class="btn social-icon">
														<i class="feather-facebook"></i>
													</button>
													<input type="text" class="form-control" placeholder="https://www.facebook.com">
													<div>
														<a href="#" class="btn trash">
															<i class="feather-trash-2"></i>
														</a>
													</div>
												</div> 
											</div>
										</div>
										<div class="links-info">
											<div class="row form-row links-cont">
												<div class="form-group form-placeholder d-flex">
													<button class="btn social-icon">
														<i class="feather-twitter"></i>
													</button>
													<input type="text" class="form-control" placeholder="https://www.twitter.com">
													<div>
														<a href="#" class="btn trash">
															<i class="feather-trash-2"></i>
														</a>
													</div>
												</div> 
												
											</div>
										</div>
										<div class="links-info">
											<div class="row form-row links-cont">
												<div class="form-group form-placeholder d-flex">
													<button class="btn social-icon">
														<i class="feather-youtube"></i>
													</button>
													<input type="text" class="form-control" placeholder="https://www.youtube.com">
													<div>
														<a href="#" class="btn trash">
															<i class="feather-trash-2"></i>
														</a>
													</div>
												</div> 
											</div>
										</div>
										<div class="links-info">
											<div class="row form-row links-cont">
												<div class="form-group form-placeholder d-flex">
													<button class="btn social-icon">
														<i class="feather-linkedin"></i>
													</button>
													<input type="text" class="form-control" placeholder="https://www.linkedin.com">
													<div>
														<a href="#" class="btn trash">
															<i class="feather-trash-2"></i>
														</a>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="form-group">
										<a href="javascript:void(0);" class="btn add-links">
											<i class="fas fa-plus me-1"></i> Add More
										</a>
									</div>
									<div class="form-group mb-0">
										<div class="settings-btns">
											<button type="submit" class="btn btn-orange">Submit</button>
											<button type="submit" class="btn btn-grey">Cancel</button>
										</div>
									</div>
								</form>
							</div>
						</div>
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
	  