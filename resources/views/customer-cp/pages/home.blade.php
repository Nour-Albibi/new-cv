@extends('customer-cp.layouts.app')
@section('title','home')

@section('content')



    <div class="container-fluid">

        <div class="page-content-wrapper">


            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5>My latest cvs</h5>
                            <div class="table-responsive">
                                <table class="table table-centered table-nowrap mb-0">
                                    <thead>
                                    <tr>

                                        <th scope="col"> CV Template</th>
                                        <th scope="col"> Date</th>
                                        <th scope=""> PDF</th>


                                    </tr>
                                    </thead>
                                    <tbody>

                                    @foreach ($cvs as $cv )

                                        <tr>

                                            <td>
                                                <x-customer-cp.cv_template_modern_card :cv="$cv"
                                                                                       :lang="$cv->cv_language"></x-customer-cp.cv_template_modern_card>
                                            </td>
                                            <td>{{date('d/m/Y', strtotime($cv->created_at))  }}</td>
                                            <td>
                                                <button type="button" class="btn btn-primary waves-effect waves-light"
                                                        onclick="window.location.href='{{ route('customer.downloadCV',$cv) }}';">
                                                    Download <i class="fas fa-arrow-down"></i></button>
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
                                        <p class="font-size-16">{{__('Active Subscription')}}</p>
                                        <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                    <span class="avatar-title rounded-circle bg-soft-success">

                                            <i class="fa-solid fa-money-bill " style="color: #fff;font-size: 20px;"></i>

                                        </span>
                                        </div>
                                        @if(auth()->guard('customer')->user()->has_active_subscription())
                                            <h5 class="font-size-22">{{auth()->guard('customer')->user()->getActiveSubscription()->package->total_price}}
                                                SAR</h5>

                                            <p class="text-muted">{{auth()->guard('customer')->user()->getActiveSubscription()->package->name_en}}</p>

                                            <div class="progress mt-3" style="height: 4px;">
                                                <div class="progress-bar progress-bar bg-soft-success"
                                                     role="progressbar"
                                                     style="width: 70%" aria-valuenow="70" aria-valuemin="0"
                                                     aria-valuemax="70">
                                                </div>

                                            </div>
                                        @else
                                            {{__('No Active Subscription')}}
                                        @endif
                                    </div>
                                </div>
                            </div>


                        </div>

                        <div class="col-xl-6 col-md-6">
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center">
                                        <p class="font-size-16">{{__('CVs in Active Subscription')}}</p>
                                        <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                    <span class="avatar-title rounded-circle bg-soft-success">

                                            <i class="fa-solid fa-clipboard" style="color: #fff;font-size: 20px;"></i>
                                        </span>
                                        </div>
                                        @if(auth()->guard('customer')->user()->has_active_subscription())
                                            @php $countCV=getTotalCreatedCVBySubscriptionId(auth()->guard('customer')->user()->getActiveSubscription()->id)
                                            @endphp
                                            <h5 class="font-size-22">{{$countCV}}</h5>
                                            @php
                                                $max_limit=auth()->guard('customer')->user()->getActiveSubscription()->max_cv_limit;
                                                $avarage=($countCV/$max_limit)*100;
                                                @endphp
                                            <p class="text-muted">{{intval($avarage)}}% Used</p>

                                            <div class="progress mt-3" style="height: 4px;">
                                                <div class="progress-bar progress-bar bg-success" role="progressbar"
                                                     style="width:{{intval($avarage)}}%" aria-valuenow="80" aria-valuemin="0"
                                                     aria-valuemax="80">
                                                </div>

                                            </div>
                                        @endif
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
