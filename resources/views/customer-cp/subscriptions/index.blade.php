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
                        <a class="nav-link fw-bold p-3 active" href="#">Subscription Managment</a>
                    </li>

                </ul>
                <div class="table-responsive">


                    <table class="table table-centered datatable dt-responsive nowrap " style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead class="thead-light">
                            <tr>
                                <th style="width: 20px;">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="ordercheck">
                                        <label class="form-check-label" for="ordercheck">&nbsp;</label>
                                    </div>
                                </th>
                                <th>PLAN</th>
                                <th>price</th>
                                <th>Subscrip Date</th>
                                <th>Expire Date</th>
                                <th>Status	</th>


                                <th style="width: 120px;">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($subscriptions as $subscription )

                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="ordercheck1">
                                        <label class="form-check-label" for="ordercheck1">&nbsp;</label>
                                    </div>
                                </td>
                                <td><a href="{{ route('customer.subscriptions.show',$subscription) }}" class="text-dark fw-bold">{{ $subscription->package->{"name_".$lang} ?? '' }}</a> </td>
                                <td>{{ $subscription->package->total_price }}$</td>
                                <td>
                                    {{ $subscription->start_date }}
                                </td>
                                <td>{{ $subscription->end_date }}</td>


                                <td>
                                    <div class=@if ($subscription->status == '1')
                                            "badge badge-soft-success font-size-12">Paid</div>
                                    @else   "badge badge-soft-danger font-size-12">Expire</div>
                                    @endif
                                </td>
                                <td id="tooltip-container1">
                                    <a href="javascript:void(0);" class="me-3 text-primary" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Update"><i class="mdi mdi-pencil font-size-18"></i></a>
                                    <a href="javascript:void(0);" class="text-danger" data-bs-container="#tooltip-container1" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete"><i class="mdi mdi-trash-can font-size-18"></i></a>
                                </td>
                            </tr>


                            @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection
