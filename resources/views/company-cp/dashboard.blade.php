@extends('company-cp.layouts.app')
@section('title','home')

@section('content')
    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                    <h5>Last Find CVs</h5>
                    <div class="table-responsive">
                        <table class="table table-centered table-nowrap mb-0">
                            <thead class="thead-light">
                            <tr>
                                <th>CV Template</th>
                                <th> Name</th>
                                <th>how often</th>
                                <th> Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>


                                <td><a href="javascript: void(0);" class="text-dark fw-bold">Template 1</a></td>

                                <td>Name 1</td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">7</div>
                                </td>
                                <td>
                                    04 Apr, 2020
                                </td>


                            </tr>

                            <tr>


                                <td><a href="javascript: void(0);" class="text-dark fw-bold">Template 1</a></td>

                                <td>Name 1</td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">7</div>
                                </td>
                                <td>
                                    04 Apr, 2020
                                </td>


                            </tr>
                            <tr>


                                <td><a href="javascript: void(0);" class="text-dark fw-bold">Template 1</a></td>

                                <td>Name 1</td>
                                <td>
                                    <div class="badge badge-soft-success font-size-12">7</div>
                                </td>
                                <td>
                                    04 Apr, 2020
                                </td>


                            </tr>


                            </tbody>
                        </table>
                    </div>


                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="row">
                <div class="col-xl-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="font-size-16">Subscription</p>
                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-success">

                                                                <i class="fa-solid fa-money-bill "
                                                                   style="color: #fff;font-size: 20px;"></i>

                                                            </span>
                                </div>
                                <h5 class="font-size-22">5$</h5>

                                <p class="text-muted">Monthly</p>

                                <div class="progress mt-3" style="height: 4px;">
                                    <div class="progress-bar progress-bar bg-soft-success" role="progressbar"
                                         style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-xl-6 col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="text-center">
                                <p class="font-size-16">Template</p>
                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                                        <span class="avatar-title rounded-circle bg-soft-success">

                                                                <i class="fa-solid fa-clipboard"
                                                                   style="color: #fff;font-size: 20px;"></i>
                                                            </span>
                                </div>
                                <h5 class="font-size-22">4</h5>

                                <p class="text-muted">89% Residual</p>

                                <div class="progress mt-3" style="height: 4px;">
                                    <div class="progress-bar progress-bar bg-success" role="progressbar"
                                         style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>
    </div>
@endsection
