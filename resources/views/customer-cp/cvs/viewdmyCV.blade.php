@extends('customer-cp.layouts.app')

@section('title')
    Viewed My CVs
@endsection

@section('content')
    <div class="container-fluid">

        <div class="page-content-wrapper">

            <div class="row">
                <div class="col-xl-8">
                    <div class="card">
                        <div class="card-body">
                            <h5>Viewed MY CV</h5>
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead>
                                    <tr>

                                        <th scope="col"> CV Template</th>
                                        <th scope="col"> Company name</th>
                                        <th scope=""> How often</th>
                                        <th scope=""> date</th>

                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($cvs as $cv )

                                    @foreach ( $cv->views()->get() as $view )

                                    <tr>
                                        <td>

                                                <img src="{{ asset("files/".$view->cv->template->image) }}" alt="" class=""
                                                style="width: 150px;">
                                            </td>
                                            <td>{{ $view->company->first_name.' '.$view->company->last_name }}</td>
                                            <td>
                                                {{ $view->cv->views }}
                                            </td>
                                            <td>{{date('d/m/Y', strtotime($view->cv->created_at))  }}</td>

                                        </tr>
                                        @endforeach
                                    @endforeach


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

                                                    <i class="fa-solid fa-money-bill " style="color: #fff;font-size: 20px;"></i>

                                                </span>
                                        </div>
                                        <h5 class="font-size-22">{{ $subscription->package->total_price }}$</h5>

                                        <p class="text-muted">Monthly</p>

                                        <div class="progress mt-3" style="height: 4px;">
                                            <div class="progress-bar progress-bar bg-soft-success" role="progressbar" style="width: %" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
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
                                        <p class="font-size-16">Count of CVs</p>
                                        <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                            <span class="avatar-title rounded-circle bg-soft-success">

                                                    <i class="fa-solid fa-clipboard" style="color: #fff;font-size: 20px;"></i>
                                                </span>
                                        </div>
                                        <h5 class="font-size-22">{{ $allcvs }}</h5>

                                        <p class="text-muted">89% Residual</p>

                                        <div class="progress mt-3" style="height: 4px;">
                                            <div class="progress-bar progress-bar bg-success" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80">
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>


                </div>
            </div>

        </div>


    </div> <!-- container-fluid -->
    </div>

@endsection
