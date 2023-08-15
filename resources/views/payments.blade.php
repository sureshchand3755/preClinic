<?php $page="payments";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.page-title')  
        @slot('li_1') Payments @endslot              
        @endcomponent
        <div class="row">
            <div class="col-md-12">
                <div class="table-responsive">
                    <table class="table table-striped custom-table datatable mb-0">
                        <thead>
                            <tr>
                                <th>Invoice ID</th>
                                <th>Patient</th>
                                <th>Payment Type</th>
                                <th>Paid Date</th>
                                <th>Paid Amount</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="invoice-view">#INV-0001</a></td>
                                <td>
                                    <h2><a href="#">Charles Ortega</a></h2>
                                </td>
                                <td>Paypal</td>
                                <td>8 Aug 2017</td>
                                <td>$500</td>
                            </tr>
                            <tr>
                                <td><a href="invoice-view">#INV-0002</a></td>
                                <td>
                                    <h2><a href="#">Denise Stevens</a></h2>
                                </td>
                                <td>Paypal</td>
                                <td>8 Aug 2017</td>
                                <td>$500</td>
                            </tr>
                            <tr>
                                <td><a href="invoice-view">#INV-0003</a></td>
                                <td>
                                    <h2><a href="#">Dennis Salazar</a></h2>
                                </td>
                                <td>Paypal</td>
                                <td>8 Aug 2017</td>
                                <td>$500</td>
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
@component('components.sidebar')                
@endcomponent
@endsection