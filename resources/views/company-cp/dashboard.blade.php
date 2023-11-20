@extends('company-cp.layouts.app')
@section('title','home')

@section('content')
    <div class="row">
        @if(count($last_find_cvs))
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h5>Last Find CVs</h5>
                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap mb-0">
                                <thead class="thead-light">
                                <tr>
                                    <th>{{__('CV Template')}}</th>
                                    <th>{{__('Employee Name')}}</th>
                                    <th>{{__('How often')}}</th>
                                    <th>{{__('Viewed Date')}}</th>
                                    <th>{{__('Action')}}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($last_find_cvs as $viewed_cv)
                                    @php $cv=$viewed_cv->cv;  @endphp
                                    <tr>
                                        <td>
                                            <div class="exad-card left text_on_image yes">
                                                <div class="exad-card-thumb">
                                                    @include('customer-cp.cvs.cv_cards.cv_template_'.$cv->template->file_name.'_card')
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $viewed_cv->cv->customer->first_name.' '.$viewed_cv->cv->customer->last_name }}</td>
                                        <td>
                                            <div
                                                class="badge badge-soft-success font-size-12">
                                                {{$viewed_cv->how_often}}
                                            </div>
                                        </td>
                                        <td>{{date('d/m/Y', strtotime($viewed_cv->created_at))  }}</td>
                                        <td>
                                            <a href="javascript:void(0);" class="me-3 text-primary"
                                               data-bs-container="#tooltip-container1" data-bs-toggle="tooltip"
                                               data-bs-placement="top" title="Download"
                                               onclick="window.location.href='{{ route('company.downloadCV',$cv) }}';"><i
                                                    class="mdi mdi-book-arrow-down font-size-18 text-primary"></i></a>
                                            <a class="ml-5" href="{{route('company.preview_cv',['cv'=>$cv])}}"
                                               target="_blank"><i
                                                    class="fas fa-eye text-info"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endif
        <div class="@if(count($last_find_cvs)) col-xl-4 @else col-xl-8 @endif">
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
                                    <h5 class="font-size-22">{{ $subscription->package->total_price}} SAR</h5>
                                    <p class="text-muted">{{ $subscription->package->{"name_".$lang} }}</p>
                                    <div class="progress mt-3" style="height: 4px;">
                                        <div class="progress-bar progress-bar bg-soft-success" role="progressbar"
                                             style="width: 100%" aria-valuenow="70" aria-valuemin="0"
                                             aria-valuemax="100">
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
                                <p class="font-size-16">Downloaded CVs</p>
                                <div class="mini-stat-icon mx-auto mb-4 mt-3">
                                    <span class="avatar-title rounded-circle bg-soft-success">
                                    <i class="fa-solid fa-clipboard" style="color: #fff;font-size: 20px;"></i>
                                    </span>
                                </div>

                                @if ($subscription)
                                    @php $countCV=$subscription->current_cv_count;
                                    $max_limit=$subscription->max_cv_limit;
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
    </div>
@endsection
