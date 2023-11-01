@extends('customer-cp.layouts.app')
@section('title','home')

@section('content')



<div class="container-fluid">

    <div class="page-content-wrapper">




    <div class="row">
        <div class="col-lg-8">
            <div class="card">
                <div class="card-body">
                  <h5>MY CVs</h5>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead>
                                        <tr>

                                                <th scope="col">    CV Template</th>
                                                <th scope="col">    Date</th>
                                                <th scope="">       PDF</th>



                                        </tr>
                                </thead>
                                <tbody>

                                    @foreach ($cvs as $cv )

                                    <tr>

                                                            <td>
                                                                @php
                                                                    // dd ($cv->template());
                                                                @endphp
                                                                <img src="{{ asset("files/".$cv->template->image) }}" alt="" class="" style="width: 150px;">
                                                            </td>
                                                            <td>{{date('d/m/Y', strtotime($cv->created_at))  }}</td>
                                                            <td>
                                                                <button type="button" class="btn btn-primary waves-effect waves-light" onclick="window.location.href='{{ route('customer.downloadCV',$cv) }}';">Download <i class="fas fa-arrow-down"></i></button>
                                                            </td>

                                                            <td>
                                                                <i class="fas fa-pen"></i>
                                                                <i class="fas fa-trash-alt text-danger"></i>
                                                            </td>


                                                        </tr>
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
                                <h5 class="font-size-22">5$</h5>

                                <p class="text-muted">Monthly</p>

                                <div class="progress mt-3" style="height: 4px;">
                                    <div class="progress-bar progress-bar bg-soft-success" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="70">
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

                                            <i class="fa-solid fa-clipboard" style="color: #fff;font-size: 20px;"></i>
                                        </span>
                                </div>
                                <h5 class="font-size-22">4</h5>

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
