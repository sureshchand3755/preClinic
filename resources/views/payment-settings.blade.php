<?php $page="payment-settings";?>
@extends('layout.mainlayout')
@section('content')		
<div class="page-wrapper">
    <div class="content">
			
		@component('components.breadcrumb')                
			@slot('title') Settings @endslot
			@slot('li_1') Home @endslot
			@slot('li_2') Settings @endslot
			@slot('li_3') Payment Settings @endslot
		@endcomponent
		@component('components.settings-page') 
		@endcomponent
		<div class="row">
			<div class="col-md-6">
				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center">
						<h5 class="card-title">Paypal</h5>
						<div class="status-toggle d-flex justify-content-between align-items-center">
							<input type="checkbox" id="status_1" class="check">
							<label for="status_1" class="checktoggle">checkbox</label>
						</div>
					</div>
					<div class="card-body pt-0">
						<form>
							<div class="settings-form">
								<div class="form-group">
									<p class="pay-cont">Paypal Option</p>
									<label class="custom_radio me-4">
										<input type="radio" name="budget" value="Yes" checked="">
										<span class="checkmark"></span> Sandbox
									</label>
									<label class="custom_radio">
										<input type="radio" name="budget" value="Yes">
										<span class="checkmark"></span> Live
									</label>
								</div>
								<div class="form-group form-placeholder">
									<label>Braintree Tokenization key <span class="star-red">*</span></label>
									<input type="text" class="form-control" placeholder="sandbox_pgjcppvs_pd6gznv7zbrx9hb8">
								</div>
								<div class="form-group form-placeholder">
									<label>Braintree Merchant ID <span class="star-red">*</span></label>
									<input type="text" class="form-control" placeholder="pd6gznv7zbrx9hb8">
								</div>
								<div class="form-group form-placeholder">
									<label>Braintree Public key <span class="star-red">*</span></label>
									<input type="text" class="form-control" placeholder="h8bydrz7gcjkp7d4">
								</div>
								<div class="form-group form-placeholder">
									<label>Braintree Private key <span class="star-red">*</span></label>
									<input type="text" class="form-control" placeholder="sandbox_pgjcppvs_pd6gznv7zbrx9hb8">
								</div>
								<div class="form-group form-placeholder">
									<label>Paypal APP ID <span class="star-red">*</span></label>
									<input type="text" class="form-control" placeholder="pd6gznv7zbrx9hb8">
								</div>
								<div class="form-group form-placeholder">
									<label>Paypal Secret Key <span class="star-red">*</span></label>
									<input type="text" class="form-control" placeholder="h8bydrz7gcjkp7d4">
								</div>
								<div class="form-group mb-0">
									<div class="settings-btns">
										<button type="submit" class="btn btn-orange">Save</button>
										<button type="submit" class="btn btn-grey">Cancel</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">
					<div class="card-header d-flex justify-content-between align-items-center">
						<h5 class="card-title">Stripe</h5>
						<div class="status-toggle d-flex justify-content-between align-items-center">
							<input type="checkbox" id="status_2" class="check" checked="">
							<label for="status_2" class="checktoggle">checkbox</label>
						</div>
					</div>
					<div class="card-body pt-0">
						<form>
							<div class="settings-form">
								<div class="form-group">
									<p class="pay-cont">Stripe Option</p>
									<label class="custom_radio me-4">
										<input type="radio" name="budget" value="Yes" checked="">
										<span class="checkmark"></span> Sandbox
									</label>
									<label class="custom_radio">
										<input type="radio" name="budget" value="Yes">
										<span class="checkmark"></span> Live
									</label>
								</div>
								<div class="form-group form-placeholder">
									<label>Gateway Name <span class="star-red">*</span></label>
									<input type="text" class="form-control" placeholder="Stripe">
								</div>
								<div class="form-group form-placeholder">
									<label>API Key <span class="star-red">*</span></label>
									<input type="text" class="form-control" placeholder="pk_test_AealxxOygZz84AruCGadWvUV00mJQZdLvr">
								</div>
								<div class="form-group form-placeholder">
									<label>Rest Key <span class="star-red">*</span></label>
									<input type="text" class="form-control" placeholder="sk_test_8HwqAWwBd4C4E77bgAO1jUgk00hDlERgn3">
								</div>
								<div class="form-group mb-0">
									<div class="settings-btns">
										<button type="submit" class="btn btn-orange">Save</button>
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
	  