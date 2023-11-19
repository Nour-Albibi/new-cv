@extends('company-cp.layouts.app')

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

                                <td>{{ $package->{"name_".$lang} ?? '' }}</td>
                                <td>{{ $package-> {"description_".$lang} ?? '' }}</td>
                                <td>{{ $package->quantity }}</td>
                                <td>{{ $package->total_price }}$</td>
                                <td>{{ $package->duration }}&nbspMonth</td>

                                <td>
                                    <a href="{{ route('company.subscriptions.add',$package) }}">Buy</a>
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
