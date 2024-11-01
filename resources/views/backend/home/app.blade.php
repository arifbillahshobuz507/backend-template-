
@extends('backend.master')
@section('content')
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h4>Project  Management</h4>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html">
                                <svg class="stroke-icon">
                                    <use
                                        href="{{ asset('/backend/assets') }}/svg/icon-sprite.svg#stroke-home">
                                    </use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Dashboard</li>
                        <li class="breadcrumb-item active">Project Manage</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
      <!-- Container-fluid starts-->
      <div class="container-fluid">
        <div class="row">
            <div class="col-xxl-9 box-col-12">
                <div class="row">
                    <div class="col-xxl-8 col-md-7">
                        <div class="card">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Project Performance</h5>
                                    <div class="card-header-right-icon">
                                        <div class="dropdown">
                                            <button class="btn dropdown-toggle" id="viewButton"
                                                type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">Today</button>
                                            <div class="dropdown-menu dropdown-menu-end"
                                                aria-labelledby="viewButton"><a class="dropdown-item"
                                                    href="#">Today</a><a class="dropdown-item"
                                                    href="#">Tomorrow</a><a class="dropdown-item"
                                                    href="#">Yesterday</a></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="school-performance-wrap">
                                    <div id="chart-school-performance"> </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-sm-6 order-0">
                        <div class="card height-equal">
                            <div class="card-header card-no-border">
                                <div class="header-top">
                                    <h5>Event Calendar</h5>
                                    <div class="dropdown icon-dropdown">
                                        <button class="btn dropdown-toggle" id="calender_dropdown"
                                            type="button" data-bs-toggle="dropdown"
                                            aria-expanded="false"><i class="icon-more-alt"></i></button>
                                        <div class="dropdown-menu dropdown-menu-end"
                                            aria-labelledby="calender_dropdown"><a class="dropdown-item"
                                                href="#">Today</a><a class="dropdown-item"
                                                href="#">Tomorrow</a><a class="dropdown-item"
                                                href="#">Yesterday </a></div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body pt-0">
                                <div class="default-datepicker">
                                    <div class="datepicker-here" data-language="en"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid Ends-->
@endsection
