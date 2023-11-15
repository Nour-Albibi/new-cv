@extends('customer-cp.layouts.app')

@section('title')
    {{__(' Subscribe to New Package')}}
@endsection
@section('content')
    <link href="{{asset('assets/css/packages.css')}}" rel="stylesheet"/>
    <style>
        .pricingTable .pricing-content ul li {
            font-size: 15px;
            font-weight: 500;
            text-transform: capitalize;
            line-height: 35px;
            padding: 0 0 0 30px;
            margin: 0 0 5px;
            position: relative;
        }

        .pricingTable .price-value .amount {
            font-size: 37px;
            font-weight: 500;
            line-height: 45px;
            display: inline-block;
        }

        .pricingTable .title {
            color: #fff;
            font-size: 24px;
            font-weight: 300;
            letter-spacing: 1px;
            text-transform: uppercase;
            margin: 0;
        }

        .pacakge_box {
            cursor: pointer;
        }

        .pacakge_box.active .pricingTable {
            border: 4px solid #00b2c7;
        }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body  pt-0">
                    <ul class="nav nav-tabs nav-tabs-custom mb-4">
                        <li class="nav-item">
                            <a class="nav-link fw-bold p-3 active"
                               href="#">{{__('Subscription INFORMATION Management')}}</a>
                        </li>

                    </ul>
                    <form name="doCheckOut" id="doCheckOut" action="{{route('customer.subscriptions.store_new')}}"
                          method="post">
                        @csrf
                        <input type="hidden" name="package_id" value="{{request()->package_id}}"/>
                        <input type="hidden" name="customer_type" value="1"/>
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-lg-11 mx-auto">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0  mt-4">
                                            <div class="form">
                                                <div class="row p-2">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            @if(!empty(request()->package_id))
                                                                <label
                                                                    for="fullName">{{__('Chosen Package: ')}}
                                                                @php
                                                                    $package=\App\Models\Package::find(request()->package_id);
                                                                    @endphp
                                                               {{$package->{"name_".$lang } }} </label>
                                                                @else
                                                            <label
                                                                for="fullName">{{__('Please Choose Package')}}</label>
                                                            <div class="row" style="margin-bottom:16px;">
                                                                @foreach($customerPackages as $pkg)
                                                                    <div class="col-md-4 col-sm-6 pacakge_box"
                                                                         package_id="{{$pkg->id}}">
                                                                        <div class="pricingTable">
                                                                            <div class="pricingTable-header">
                                                                                <h3 class="title">{{$pkg->{"name_".$lang} }}</h3>
                                                                            </div>
                                                                            <div class="pricing-content">
                                                                                <div class="price-value">
                                                                                    <span
                                                                                        class="currency">{{__('SAR')}}</span>
                                                                                    <span
                                                                                        class="amount">{{$pkg->total_price}}</span>
                                                                                    <span
                                                                                        class="amount-sm">{{$pkg->cv_price}}</span>
                                                                                </div>
                                                                                <ul>
                                                                                    <li>Unlimited printing and
                                                                                        downloading
                                                                                        for {{$pkg->duration*30}}
                                                                                        days
                                                                                    </li>
                                                                                    <li>Create {{$pkg->quantity}} CVs
                                                                                        and cover
                                                                                        letters
                                                                                    </li>
                                                                                    <li>auto-renews at every 4 weeks
                                                                                    </li>
                                                                                    <li class="disable">Cancel at any
                                                                                        time
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                                @endif
                                                        </div>
                                                    </div>
                                                    <hr>
                                                    <div class="row mt-4 mb-4 ">
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label class="text-uppercase">Payment details</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="profession">Name on card:</label>
                                                            <input type="text" name="name_on_card"
                                                                   class="form-control mb-3"
                                                                   required="required" placeholder="Name on card">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">Card Number:</label>
                                                            <i class="fa fa-credit-card"></i>
                                                            <input type="text" name="card_number" class="form-control"
                                                                   required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="address">Expiry:</label>
                                                            <input type="text" name="expiry" class="form-control"
                                                                   required="required">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="location">CVV:</label>
                                                            <input type="text" name="cvv" class="form-control"
                                                                   required="required">
                                                        </div>
                                                    </div>

                                                    <div class="mt-4 mb-4">
                                                        <h6 class="text-uppercase">Billing Address</h6>
                                                        <div class="row mt-3">
                                                            <div class="col-md-6">
                                                                <div class="inputbox mt-3 mr-2"><input
                                                                        type="text"
                                                                        name="address"
                                                                        class="form-control"
                                                                        required="required">
                                                                    <span>Street Address</span></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="inputbox mt-3 mr-2"><input
                                                                        type="text"
                                                                        name="city"
                                                                        class="form-control"
                                                                        required="required">
                                                                    <span>City</span></div>
                                                            </div>
                                                        </div>
                                                        <div class="row mt-2">
                                                            <div class="col-md-6">
                                                                <div class="inputbox mt-3 mr-2"><input
                                                                        type="text"
                                                                        name="state"
                                                                        class="form-control"
                                                                        required="required">
                                                                    <span>State/Province</span></div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="inputbox mt-3 mr-2"><input
                                                                        type="text"
                                                                        name="zip_code"
                                                                        class="form-control"
                                                                        required="required">
                                                                    <span>Zip code</span></div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 mt-1">
                                                        <div class="form-group text-end">
                                                            <button type="submit" class="btn btn-success">{{__('Submit')}}</button>
                                                            <button type="reset" class="btn btn-secondary">{{__('Clear')}}</button>
                                                        </div>
                                                    </div>

                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('custom_js')
    <script>
        $('.pacakge_box').on('click', function () {
            $('.pacakge_box').removeClass('active');
            $(this).addClass('active');
            pacakge_id = $(this).attr('package_id');
            $('input[name=package_id]').val(pacakge_id);
        });
    </script>
@stop
