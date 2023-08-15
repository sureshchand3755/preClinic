<?php $page="seo-settings";?>
@extends('layout.mainlayout')
@section('content')	
<div class="page-wrapper">
    <div class="content">
		@component('components.breadcrumb')                
			@slot('title') Settings @endslot
			@slot('li_1') Home @endslot
			@slot('li_2') Settings @endslot
			@slot('li_3') SEO Settings @endslot
		@endcomponent
		
		@component('components.settings-page') 
		@endcomponent
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header">
						<h5 class="card-title">SEO Settings</h5>
					</div>
					<div class="card-body pt-0">
						<form>
							<div class="settings-form">
								<div class="form-group form-placeholder">
									<label>Meta Title <span class="star-red">*</span></label>
									<input type="text" class="form-control">
								</div>
								<div class="form-group">
									<label>Meta Keywords <span class="star-red">*</span></label>
									<input type="text" data-role="tagsinput" class="input-tags form-control" placeholder="Meta Keywords" name="services" value="Lorem,Ipsum" id="services">
								</div>
								<div class="form-group">
									<label>Meta Description <span class="star-red">*</span></label>
									<textarea class="form-control"></textarea>
								</div>
								<div class="form-group mb-0">
									<div class="settings-btns">
										<button type="submit" class="btn btn-orange">Submit</button>
										<button type="submit" class="btn btn-grey">Cancel</button>
									</div>
								</div>
							</div>
						</form>
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
	  