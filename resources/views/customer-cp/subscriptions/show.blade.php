@extends('customer-cp.layouts.app')

@section('title')
    {{ __('Subscriptions') }}
@endsection

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body  pt-0">
                    <ul class="nav nav-tabs nav-tabs-custom mb-4">
                        <li class="nav-item">
                            <a class="nav-link fw-bold p-3 active" href="#">{{ __('Subscription') }}</a>
                        </li>

                    </ul>
                    <div class="table-responsive">

                        <table class="table table-centered datatable dt-responsive nowrap "
                               style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead class="thead-light">
                            <tr>
                                <th>{{ __('Invoice No#') }}</th>
                                <th>{{ __('PLAN') }}</th>
                                <th>{{ __('price') }}</th>
                                <th>{{ __('start Date') }}</th>
                                <th>{{ __('Expire Date') }}</th>
                                <th>{{ __('Payment gateway') }}</th>
                                <th>{{ __('Status') }}</th>
                                <th>{{ __('Renew') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>
                                    #{{ $subscription->invoice->invoice_no }}
                                </td>
                                <td>
                                    {{ $subscription->package->{"name_".$lang} ?? '' }}
                                </td>
                                <td>{{ $subscription->package->total_price }} {{__('SAR')}}</td>
                                <td>
                                    {{ $subscription->start_date }}
                                </td>
                                <td>  <div class="badge badge-soft-info font-size-12">{{ $subscription->end_date }}</div></td>
                                <td>{{ $subscription->invoice->payment_gateway }}</td>
                                <td>
                                    @if($subscription->status == 1)
                                        <div class="badge badge-soft-success font-size-12">{{__('Active')}}</div>
                                    @elseif($subscription->status == 2)
                                        <div class="badge badge-soft-danger font-size-12">{{__('Expired')}}</div>
                                    @elseif($subscription->status == 3)
                                        <div class="badge badge-soft-danger font-size-12">{{__('Canceled')}}</div>
                                    @endif
                                </td>
                                <td>
                                    @if(\App\Services\CustomerService::canSubscribeToNewPackage())
                                        <a href="{{url('customer/subscriptions/create_new?package_id='.$subscription->package_id)}}"><i class="fa fa-refresh"></i></a>
                                    @endif
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
