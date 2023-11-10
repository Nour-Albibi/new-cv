@extends('customer-cp.layouts.app')

@section('title')
    New Subscription
@endsection

@section('content')




















<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body  pt-0">
                <ul class="nav nav-tabs nav-tabs-custom mb-4">
                    <li class="nav-item" >
                        <a class="nav-link fw-bold p-3 active" href="#">New subscription</a>
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
                                <th>Name</th>
                                <th>Description</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>duaration</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($packages as $package )

                            <tr>
                                <td>
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="ordercheck1">
                                        <label class="form-check-label" for="ordercheck1">&nbsp;</label>
                                    </div>
                                </td>
                                <td>{{ $package->{"name_".$lang} ?? '' }}</td>
                                <td>{{ $package-> {"description_".$lang} ?? '' }}</td>
                                <td>{{ $package->quantity }}$</td>
                                <td>{{ $package->total_price }}$</td>
                                <td>
                                    <a href="">Buy</a>
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
