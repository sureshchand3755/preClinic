<?php $page="view-invoice";?>
@extends('layout.mainlayout')
@section('content')	
<div class="page-wrapper">
    <div class="content">
		<div class="row justify-content-center">
			<div class="col-xl-10">
				<div class="card invoice-info-card">
					<div class="card-body">
						<div class="invoice-item invoice-item-one">
							<div class="row">
								<div class="col-md-6">
									<div class="invoice-logo">
										<img src="{{ URL::asset('/assets/img/logo1.png')}}" alt="logo"><span></span>
									</div>
									<div class="invoice-head">
										<h2>Invoice</h2>
										<p>Invoice Number : In983248782</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="invoice-info">
										<strong class="customer-text-one">Invoice From</strong>
										<h6 class="invoice-name">Company Name</h6>
										<p class="invoice-details viewdetail">
											9087484288 <br>
											Address line 1, Address line 2<br>
											Zip code ,City - Country
										</p>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Invoice Item -->
						<div class="invoice-item invoice-item-two">
							<div class="row">
								<div class="col-md-6">
									<div class="invoice-info">
										<strong class="customer-text-one">Billed to</strong>
										<h6 class="invoice-name">Customer Name</h6>
										<p class="invoice-details invoice-details-two viewinvoicestyle">
											9087484288 <br>
											Address line 1, <br>
											Address line 2 <br>
											Zip code ,City - Country
										</p>
									</div>
								</div>
								<div class="col-md-6">
									<div class="invoice-info invoice-info2">
										<strong class="customer-text-one">Payment Details</strong>
										<p class="invoice-details viewdetail">
											Debit Card <br>
											XXXXXXXXXXXX-2541 <br>
											HDFC Bank
										</p>
										<div class="invoice-item-box">
											<p>Recurring : 15 Months</p>
											<p class="mb-0">PO Number : 54515454</p>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- /Invoice Item -->
						
						<!-- Invoice Item -->
						<div class="invoice-issues-box">
							<div class="row">
								<div class="col-lg-4 col-md-4">
									<div class="invoice-issues-date">
										<p>Issue Date : 27 Jul 2022</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-4">
									<div class="invoice-issues-date">
										<p>Due Date : 27 Aug 2022</p>
									</div>
								</div>
								<div class="col-lg-4 col-md-4">
									<div class="invoice-issues-date">
										<p>Due Amount : ₹ 1,54,22 </p>
									</div>
								</div>
							</div>
						</div>
						<!-- /Invoice Item -->

						<!-- Invoice Item -->
						<div class="invoice-item invoice-table-wrap">
							<div class="row">
								<div class="col-md-12">
									<div class="table-responsive">
										<table class="invoice-table table table-center mb-0">
											<thead>
												<tr>
													<th>Description</th>
													<th>Category</th>
													<th>Rate/Item</th>
													<th>Quantity</th>
													<th>Discount (%)</th>
													<th class="text-end">Amount</th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>New Patient</td>
													<td>Dentists</td>
													<td>$1,110</td>
													<th>2</th>
													<th>2%</th>
													<td class="text-end">$400</td>
												</tr>
												<tr>
													<td>Laboratory Test</td>
													<td>Neurology</td>
													<td>$1,500</td>
													<th>3</th>
													<th>6%</th>
													<td class="text-end">$3,000</td>
												</tr>
												<tr>
													<td>Treatment</td>
													<td>Orthopedics</td>
													<td>$11,500</td>
													<th>1</th>
													<th>10%</th>
													<td class="text-end">$11,000</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<!-- /Invoice Item -->

						<div class="row align-items-center justify-content-center">
							<div class="col-lg-6 col-md-6">
								<div class="invoice-terms">
									<h6>Notes:</h6>
									<p class="mb-0">Enter customer notes or any other details</p>
								</div>
								<div class="invoice-terms">
									<h6>Terms and Conditions:</h6>
									<p class="mb-0">Enter customer notes or any other details</p>
								</div>
							</div>
							<div class="col-lg-6 col-md-6">
								<div class="invoice-total-card">
									<div class="invoice-total-box">
										<div class="invoice-total-inner">
											<p>Taxable <span>$6,660.00</span></p>
											<p>Additional Charges <span>$6,660.00</span></p>
											<p>Discount <span>$3,300.00</span></p>
											<p class="mb-0">Sub total <span>$3,300.00</span></p>
										</div>
										<div class="invoice-total-footer">
											<h4>Total Amount <span>$143,300.00</span></h4>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="invoice-sign text-end">
							<img class="img-fluid d-inline-block" src="{{ URL::asset('/assets/img/signature.png')}}" alt="sign">
							<span class="d-block">Harristemp</span>
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
	  