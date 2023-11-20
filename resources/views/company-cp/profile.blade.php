@extends('company-cp.layouts.app')
@section('title','Profile')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body  pt-0">
                <ul class="nav nav-tabs nav-tabs-custom mb-4">
                    <li class="nav-item">
                        <a class="nav-link fw-bold p-3 active" href="#">{{ __('COMPANY INFORMATION Managment') }}</a>
                    </li>

                </ul>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </div>
                    @endif

                <form  action="{{route('company.update_profile')}}" method='post' enctype="multipart/form-data">
                    <div class="mb-3">
                        @csrf
                        @method('put')
                        <h6 class="m-3">{{ __('COMPANY INFORMATION FORM') }}</h6>
                        <div class="row">
                            <div class="col-lg-11 mx-auto">
                                <div class="row">

                                    <div class="col-xl-12 col-lg-12 col-md-8 mt-md-0  mt-4">
                                        <div class="form">
                                            <div class="row p-2">



                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="profession">{{ __('Company Name:') }}</label>
                                                        <input type="text" class="form-control mb-3"
                                                               id="profession" placeholder="" name="company_name"
                                                               value="{{ old('company_name', Auth::guard('company')->user()->company_name) }} ">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="location">{{ __('Company Email address:') }}</label>
                                                        <input type="text" class="form-control mb-3"
                                                               id="location" name="email"
                                                               placeholder="example@example.com"
                                                               value="{{ old('email', Auth::guard('company')->user()->email) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address">{{ __('Company Address:') }}</label>
                                                        <input type="text" class="form-control mb-3"
                                                               id="address" placeholder="" name="address"
                                                               value="{{ old('address', Auth::guard('company')->user()->address) }}">
                                                    </div>
                                                </div>


                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">{{ __('Company Phone:') }}</label>
                                                        <input type="text" class="form-control mb-3"
                                                               id="phone"
                                                               placeholder="00966 ** *** ****" name="contact_phone"
                                                               value="{{ old('contact_phone', Auth::guard('company')->user()->contact_phone) }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="password">{{ __('Password') }}:</label>
                                                        <input type="password" class="form-control mb-3"
                                                               id="password"
                                                               placeholder="new password" name="password"
                                                               value="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="password">{{ __('Confirm password:') }}</label>
                                                        <input type="password" class="form-control mb-3"
                                                               id="password"
                                                               placeholder="Confirm password" name="password_confirmation"
                                                               value="">
                                                    </div>
                                                </div>



                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="website1">{{ __('Company logo') }} </label>


                                                        </div>
                                                        <div class="input-group">
                                                            <input type="file" class="form-control"
                                                                   id="customFile" name="avatar">
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="mb-2">
                                                            <img class="rounded-circle avatar-xl"
                                                                 alt="200x200"
                                                                 src="{{ old('first_name', '/files/images/'.Auth::guard('company')->user()->avatar) }}"
                                                                 data-holder-rendered="true">
                                                        </div>

                                                    </div>


                                                </div>


                                                <div class="col-md-12 mt-1">
                                                    <div class="form-group text-end">
                                                        <button class="btn btn-success" type="submit">{{ __('save') }}</button>

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
