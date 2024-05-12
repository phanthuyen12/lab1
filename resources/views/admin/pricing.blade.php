@extends('admin/layout/layout')
@section('content')
<div class="main-content">

            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex align-items-center">
                        <button type="button" class="btn btn-sm mr-2 d-lg-none header-item" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>

                        <div class="header-breadcumb">
                            <h6 class="header-pretitle d-none d-md-block">Pages <i class="dripicons-arrow-thin-right"></i> Pricing</h6>
                            <h2 class="header-title">Pricing</h2>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        
                        <button type="button" class="btn btn-primary d-none d-lg-block ml-2">
                            <i class="mdi mdi-pencil-outline mr-1"></i> Create Reports
                        </button>

                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-bell-outline"></i>
                                <span class="badge badge-danger badge-pill">6</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right p-0"
                                aria-labelledby="page-header-notifications-dropdown">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-0"> Notifications </h6>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small"> View All</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 230px;">
                                    <a href="" class="text-reset">
                                        <div class="media py-2 px-3">
                                            <img src="assets/images/users/avatar-2.jpg"
                                                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Samuel Coverdale</h6>
                                                <p class="font-size-12 mb-1">You have new follower on Instagram</p>
                                                <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 2 min ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset">
                                        <div class="media py-2 px-3">
                                            <div class="avatar-xs mr-3">
                                                <span class="avatar-title bg-success rounded-circle">
                                                    <i class="mdi mdi-cloud-download-outline"></i>
                                                </span>
                                            </div>
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Download Available !</h6>
                                                <p class="font-size-12 mb-1">Latest version of admin is now available. Please download here.</p>
                                                <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 4 hours ago</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="" class="text-reset">
                                        <div class="media py-2 px-3">
                                            <img src="assets/images/users/avatar-3.jpg"
                                                class="mr-3 rounded-circle avatar-xs" alt="user-pic">
                                            <div class="media-body">
                                                <h6 class="mt-0 mb-1">Victoria Mendis</h6>
                                                <p class="font-size-12 mb-1">Just upgraded to premium account.</p>
                                                <p class="font-size-12 mb-0 text-muted"><i class="mdi mdi-clock-outline"></i> 1 day ago</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top">
                                    <a class="btn btn-sm btn-light btn-block text-center" href="javascript:void(0)">
                                        <i class="mdi mdi-arrow-down-circle mr-1"></i> Load More..
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block ml-2">
                            <button type="button" class="btn header-item" id="page-header-user-dropdown"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-1.jpg"
                                    alt="Header Avatar">
                                <span class="d-none d-sm-inline-block ml-1">Henry</span>
                                <i class="mdi mdi-chevron-down d-none d-sm-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right">

                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>Inbox</span>
                                    <span>
                                        <span class="badge badge-pill badge-success">3</span>
                                    </span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>Profile</span>
                                    <span>
                                        <span class="badge badge-pill badge-info">1</span>
                                    </span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    Settings
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>Lock Account</span>
                                </a>
                                <a class="dropdown-item d-flex align-items-center justify-content-between" href="javascript:void(0)">
                                    <span>Log Out</span>
                                </a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </header>

            <div class="page-content">
                <div class="container-fluid">

                    <div class="row justify-content-center">
                        <div class="col-xl-10">

                            <!-- Plans -->
                            <div class="row mt-sm-5 mt-3 mb-3">
                                <div class="col-md-4">
                                    <div class="card card-pricing">
                                        <div class="card-body text-center">
                                            <i class="card-pricing-icon mdi mdi-airplane text-primary"></i>
                                            <h5 class="font-weight-bold mt-4 text-uppercase">Starter Pack</h5>
                                            
                                            <ul class="card-pricing-features">
                                                <li>10 GB Storage</li>
                                                <li>500 GB Bandwidth</li>
                                                <li>No Domain</li>
                                                <li>1 User</li>
                                                <li>Email Support</li>
                                                <li>24x7 Support</li>
                                            </ul>

                                            <h2 class="mt-4">$99</h2>
                                            <p class="text-muted">Per Month</p>
                                            <button class="btn btn-primary mt-4 mb-2 btn-rounded">Get Started <i class="mdi mdi-arrow-right ml-1"></i></button>
                                        </div>
                                    </div> <!-- end Pricing_card -->
                                </div> <!-- end col -->

                                <div class="col-md-4">
                                    <div class="card card-pricing">
                                        <div class="card-body text-center">
                                            <i class="card-pricing-icon mdi mdi-trophy-award text-success bg-white"></i>
                                            <h5 class="font-weight-bold mt-4 text-uppercase text-success">Professional Pack</h5>
                                            <ul class="card-pricing-features">
                                                <li>50 GB Storage</li>
                                                <li>900 GB Bandwidth</li>
                                                <li>2 Domain</li>
                                                <li>10 User</li>
                                                <li>Email Support</li>
                                                <li>24x7 Support</li>
                                            </ul>

                                            <h2 class="mt-4">$149</h2>
                                            <p class=" text-muted">Per Month</p>
                                            <button class="btn btn-success mt-4 mb-2 btn-rounded">Get Started <i class="mdi mdi-arrow-right ml-1"></i></button>
                                        </div>
                                    </div> <!-- end Pricing_card -->
                                </div> <!-- end col -->

                                <div class="col-md-4">
                                    <div class="card card-pricing">
                                        <div class="card-body text-center">
                                            <i class="card-pricing-icon mdi mdi mdi-umbrella text-primary"></i>
                                            <h5 class="font-weight-bold mt-4 text-uppercase">Enterprise Pack</h5>
                                            <ul class="card-pricing-features">
                                                <li>100 GB Storege</li>
                                                <li>Unlimited Bandwidth</li>
                                                <li>10 Domain</li>
                                                <li>Unlimited User</li>
                                                <li>Email Support</li>
                                                <li>24x7 Support</li>
                                            </ul>

                                            <h2 class="mt-4">$199</h2>
                                            <p class="text-muted">Per Month</p>
                                            <button class="btn btn-primary mt-4 mb-2 btn-rounded">Get Started <i class="mdi mdi-arrow-right ml-1"></i></button>
                                        </div>
                                    </div> <!-- end Pricing_card -->
                                </div> <!-- end col -->

                            </div>
                            <!-- end row -->

                        </div> <!-- end col-->
                    </div>
                    <!-- end row -->

                </div> <!-- container-fluid -->
            </div>
            <!-- End Page-content -->

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                            2019 © Drezoc.
                        </div>
                        <div class="col-sm-6">
                            <div class="text-sm-right d-none d-sm-block">
                                Design & Develop by Myra
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

        </div>
@endsection