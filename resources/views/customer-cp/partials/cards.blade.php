<div class="col-xl-4">
    <div class="row">
        <div class="col-xl-6 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="text-center">
                        <p class="font-size-16">{{ __('Subscription') }}</p>
                        <div class="mini-stat-icon mx-auto mb-4 mt-3">
                            <span class="avatar-title rounded-circle bg-soft-success">

                                    <i class="fa-solid fa-money-bill " style="color: #fff;font-size: 20px;"></i>

                                </span>
                        </div>
                        @if ($subscription)
                        <h5 class="font-size-22">{{ $subscription->package->total_price}} SAR</h5>
                            <p class="text-muted">{{ $subscription->package->{"name_".$lang} }}</p>
                             <div class="progress mt-3" style="height: 4px;">
                                <div class="progress-bar progress-bar bg-soft-success" role="progressbar" style="width: 100%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
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
                        <p class="font-size-16">{{ __('Count of CVs') }}</p>
                        <div class="mini-stat-icon mx-auto mb-4 mt-3">
                            <span class="avatar-title rounded-circle bg-soft-success">
                                    <i class="fa-solid fa-clipboard" style="color: #fff;font-size: 20px;"></i>
                            </span>
                        </div>
                        @if ($subscription)
                                @php $countCV=getTotalCreatedCVBySubscriptionId(auth()->guard('customer')->user()->getActiveSubscription()->id);
                                    $max_limit=auth()->guard('customer')->user()->getActiveSubscription()->max_cv_limit;
                                    $avarage=($countCV/$max_limit)*100;
                                @endphp
                            <h5 class="font-size-22">{{ $countCV }}</h5>

                            <p class="text-muted">
                                 {{ $subscription->current_cv_count.'/'.$subscription->max_cv_limit }}
                            </p>
                            <div class="progress mt-3" style="height: 4px;">
                                <div class="progress-bar progress-bar bg-success" role="progressbar" style="width:{{intval($avarage)}}%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="80">
                                </div>

                            </div>
                            @else
                                {{__('No Active Subscription')}}
                            @endif
                    </div>
                </div>
            </div>


        </div>
    </div>


</div>
