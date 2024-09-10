@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')

<div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
    </nav>
</div>

<section class="section dashboard">
    <div class="row">
        <div class="col-lg-12">
            <div class="row">
                <!-- Active Clients Card -->
                <div class="col-lg-3">
                    <div class="card info-card sales-card">
                        <div class="card-body">
                            <h5 class="card-title">Active Clients</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-check"></i> <!-- Updated icon -->
                                </div>
                                <div class="ps-3">
                                    <h6>145</h6>
                                    <span class="text-success small pt-1 fw-bold">12%</span> 
                                    <span class="text-muted small pt-2 ps-1">increase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Inactive Clients Card -->
                <div class="col-lg-3">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Inactive Clients</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-x"></i> <!-- Updated icon -->
                                </div>
                                <div class="ps-3">
                                    <h6>85</h6>
                                    <span class="text-danger small pt-1 fw-bold">5%</span> 
                                    <span class="text-muted small pt-2 ps-1">decrease</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Dropped Clients Card -->
                <div class="col-lg-3">
                    <div class="card info-card customers-card">
                        <div class="card-body">
                            <h5 class="card-title">Dropped Clients</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-person-dash"></i> <!-- Updated icon -->
                                </div>
                                <div class="ps-3">
                                    <h6>1244</h6>
                                    <span class="text-danger small pt-1 fw-bold">12%</span> 
                                    <span class="text-muted small pt-2 ps-1">decrease</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Total Clients Card -->
                <div class="col-lg-3">
                    <div class="card info-card revenue-card">
                        <div class="card-body">
                            <h5 class="card-title">Total Clients</h5>
                            <div class="d-flex align-items-center">
                                <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                    <i class="bi bi-people"></i> <!-- Updated icon -->
                                </div>
                                <div class="ps-3">
                                    <h6>1500</h6>
                                    <span class="text-success small pt-1 fw-bold">8%</span> 
                                    <span class="text-muted small pt-2 ps-1">increase</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div class="col-lg-12">
            <div class="card recent-sales overflow-auto">
                <div class="card-body">
                    <h5 class="card-title">Clients List</h5>
                    <table class="table table-striped table-bordered table-hover datatable table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">S.No</th>
                                <th scope="col">Client Name</th>
                                <th scope="col">Province Name</th>
                                <th scope="col">Diocese Name</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>Brandon Jacob</td>
                                <td>Test</td>
                                <td>Test</td>
                                <td><span class="badge bg-success">Active</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</section>
@endsection
