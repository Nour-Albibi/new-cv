@extends('customer-cp.layouts.app')

@section('title')
    Subscriptions
@endsection

@section('content')




















<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body  pt-0">
                <ul class="nav nav-tabs nav-tabs-custom mb-4">
                    <li class="nav-item">
                        <a class="nav-link fw-bold p-3 active" href="#">Subscription</a>
                    </li>

                </ul>
                <div class="table-responsive">

                    <table class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="thead-light">
                            <tr>
                                <th>payment ID</th>
                                <th>PLAN</th>
                                <th>price</th>
                                <th>start Date</th>
                                <th>Expire Date</th>
                                <th>Payment gateway</th>
                                <th>Status	</th>
                                <th>Renew</th>
                            </tr>
                        </thead>
                        <tbody>



                            <tr>
                                <td>

                                    {{ $subscription->invoice->id }}
                                </td>
                                <td><a href="{{ route('customer.subscriptions.show',$subscription) }}" class="text-dark fw-bold">{{ $subscription->package->{"name_".$lang} ?? '' }}</a> </td>
                                <td>{{ $subscription->package->total_price }}$</td>
                                <td>
                                    {{ $subscription->start_date }}
                                </td>
                                <td>{{ $subscription->end_date }}</td>
                                <td>{{ $subscription->invoice->payment_gateway }}</td>


                                <td>
                                    <div class=@if ($subscription->invoice->status == '1')
                                            "badge badge-soft-success font-size-12">Paid</div>
                                    @else   "badge badge-soft-danger font-size-12">Expire</div>
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
