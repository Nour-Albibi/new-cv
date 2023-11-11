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
                        @if ($subscription)
                        <h5 class="font-size-22">

                           {{ $subscription->package->total_price}}
                        $</h5>

                        <p class="text-muted">

                             {{ $subscription->package->duration }}
                             Months</p>

                             <div class="progress mt-3" style="height: 4px;">
                                <div class="progress-bar progress-bar bg-soft-success" role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                </div>

                            </div>
                                @else No active subscition
                                @endif

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
                        @if ($subscription)
                        <h5 class="font-size-22">{{ $allcvs }}</h5>

                        <p class="text-muted">
                             {{ $subscription->current_cv_count.'/'.$subscription->max_cv_limit }}


                        </p>

                        <div class="progress mt-3" style="height: 4px;">
                            <div class="progress-bar progress-bar bg-success" role="progressbar" style="width:@php

                                echo (($subscription->current_cv_count*100)/$subscription->max_cv_limit); @endphp%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80">
                            </div>
                            @else No active subscition
                            @endif
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


</div>
