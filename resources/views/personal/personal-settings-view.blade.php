@extends('layouts.personal')

    @section('meta')
        <title>My Settings | Workday Time Clock</title>
        <meta name="description" content="Workday my settings">
    @endsection

    @section('styles')
        <script>var admin = false;</script>
    @endsection

    @section('content')
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h2 class="page-title">{{ __("General Settings") }}</h2>
            </div>    
        </div>

        <div class="row">
            <div class="col-md-12">

            <div class="box box-success">
                <div class="box-body">
                    <div class="ui secondary blue pointing tabular menu">
                        <a class="item active" data-tab="about">{{ __("About") }}</a>
                        <a class="item" data-tab="attribution">{{ __("Attributions") }}</a>
                    </div>
                    <div class="ui tab active" data-tab="about">
                        <div class="col-md-12">
                            <div class="tab-content">
                                <p class="license col-md-6" style="margin-bottom:0">
                                    <h3 style="margin-top:0" class="ui header">Workday a time clock application for employees</h3>
                                    <p>Easily track and manage employee work hours on jobs, improve your payroll process and collaborate with your timekeeping employees like never before.</p>
                                    <h4 class="ui header">Features</h4>
                                    <ul>
                                        <li>Employee Management (HRIS)</li>
                                        <li>Time and Attendance Management</li>
                                        <li>Employee Time Tracking</li>
                                        <li>Shift Management</li>
                                        <li>Leave Management</li>
                                        <li>Reporting and Analytics</li>
                                        <li>Multi-company</li>
                                        <li>Manager and Employee self-service</li>
                                    </ul>
                                    <div class="footer-text">
                                        <div class="sub header">Version 1.1</div>
                                        <div class="sub header">Copyright (c) 2020 Codefactor. All rights reserved.</div>
                                    </div>
                                </p>
                                <div class="ui section divider"></div>
                                <h4 class="ui header">Send Feedback
                                    <div class="sub header">Write your feedback and send it to our developer's email address official.codefactor@gmail.com</div>
                                </h4>
                            </div>
                        </div>
                    </div>

                   
        </div>
    </div>

    @endsection
    
    @section('scripts')
    <script type="text/javascript">
        $('.menu .item').tab();
    </script>
    @endsection 
