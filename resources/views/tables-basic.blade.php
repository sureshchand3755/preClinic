<?php $page="tables-basic";?>
@extends('layout.mainlayout')
@section('content')
<div class="page-wrapper">
    <div class="content">
        @component('components.page-title')  
        @slot('li_1') Basic Tables @endslot              
        @endcomponent
        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <div class="card-block">
                        <h4 class="card-title">Basic Table</h4>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>Mary</td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card-box">
                    <div class="card-block">
                        <h5 class="text-bold card-title">Striped Rows</h5>
                        <div class="table-responsive">
                            <table class="table table-striped mb-0">
                                <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>Mary</td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <div class="card-block">
                        <h5 class="text-bold card-title">Bordered Table</h5>
                        <div class="table-responsive">
                            <table class="table table-bordered mb-0">
                                <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>Mary</td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card-box">
                    <div class="card-block">
                        <h4 class="card-title">Hover Rows</h4>
                        <div class="table-responsive">
                            <table class="table table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>John</td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>Mary</td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                    </tr>
                                    <tr>
                                        <td>July</td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <div class="card-block">
                        <h4 class="card-title">Contextual Classes</h4>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Default</td>
                                        <td>Defaultson</td>
                                        <td>def@somemail.com</td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>Primary</td>
                                        <td>Doe</td>
                                        <td>john@example.com</td>
                                    </tr>
                                    <tr class="table-secondary">
                                        <td>Secondary</td>
                                        <td>Moe</td>
                                        <td>mary@example.com</td>
                                    </tr>
                                    <tr class="table-success">
                                        <td>Success</td>
                                        <td>Dooley</td>
                                        <td>july@example.com</td>
                                    </tr>
                                    <tr class="table-danger">
                                        <td>Danger</td>
                                        <td>Refs</td>
                                        <td>bo@example.com</td>
                                    </tr>
                                    <tr class="table-warning">
                                        <td>Warning</td>
                                        <td>Activeson</td>
                                        <td>act@example.com</td>
                                    </tr>
                                    <tr class="table-info">
                                        <td>Info</td>
                                        <td>Activeson</td>
                                        <td>act@example.com</td>
                                    </tr>
                                    <tr class="table-light">
                                        <td>Light</td>
                                        <td>Activeson</td>
                                        <td>act@example.com</td>
                                    </tr>
                                    <tr class="table-dark">
                                        <td>Dark</td>
                                        <td>Activeson</td>
                                        <td>act@example.com</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card-box">
                    <div class="card-block">
                        <h4 class="card-title">Responsive Tables</h4>
                        <div class="table-responsive">
                            <table class="table mb-0">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Firstname</th>
                                        <th>Lastname</th>
                                        <th>Age</th>
                                        <th>City</th>
                                        <th>Country</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Anna</td>
                                        <td>Pitt</td>
                                        <td>35</td>
                                        <td>New York</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Anna</td>
                                        <td>Pitt</td>
                                        <td>35</td>
                                        <td>New York</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Anna</td>
                                        <td>Pitt</td>
                                        <td>35</td>
                                        <td>New York</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Anna</td>
                                        <td>Pitt</td>
                                        <td>35</td>
                                        <td>New York</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Anna</td>
                                        <td>Pitt</td>
                                        <td>35</td>
                                        <td>New York</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Anna</td>
                                        <td>Pitt</td>
                                        <td>35</td>
                                        <td>New York</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Anna</td>
                                        <td>Pitt</td>
                                        <td>35</td>
                                        <td>New York</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Anna</td>
                                        <td>Pitt</td>
                                        <td>35</td>
                                        <td>New York</td>
                                        <td>USA</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Anna</td>
                                        <td>Pitt</td>
                                        <td>35</td>
                                        <td>New York</td>
                                        <td>USA</td>
                                    </tr>
                                </tbody>
                            </table>
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