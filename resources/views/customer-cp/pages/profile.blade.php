@extends('customer-cp.layouts.app')
@section('title','home')

@section('content')



<div class="container-fluid">

    <div class="page-content-wrapper">
    <div class="row">
        <div class="col-lg-10 center">
            <div class="card">
                <div class="card-body">
                    <div class="px-2 py-3">
                        <div class="text-center">
                            <a href="{{url('/')}}">
                                <img src="{{asset('customers-auth/assets/images/b-logo.png')}}" height="22" alt="logo" loading="lazy">
                            </a>
                            <h5 class="text-primary2 mb-2 mt-4">{{ __('My profile') }}</h5>

                            @if($errors->any())
                            <div class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                            </div>
                            @endif
                        </div>
                        <form class="form-horizontal mt-4 pt-2" action="{{route('customer.update_profile')}}" method='post' enctype="multipart/form-data">
                            @csrf
                            @method('put')
                            <div class="mb-3">

                                <label for="first_name">{{ __('First Name') }}</label>
                                <input type="text" class="form-control" value="{{ old('first_name', Auth::guard('customer')->user()->first_name) }}" id="first_name" placeholder="First Name" name="first_name">
                            </div>
                            <div class="mb-3">
                                <label for="last_name">{{ __('Last Name') }}</label>
                                <input type="text" value="{{ old('last_name', Auth::guard('customer')->user()->last_name) }}" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
                            </div>
                            <div class="mb-3">
                                <label for="email">{{ __('Email') }}</label>
                                <input type="email" value="{{ old('email', Auth::guard('customer')->user()->email) }}" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="mb-3">
                                <label for="username">{{ __('Username') }}</label>
                                <input type="text" value="{{old('username', Auth::guard('customer')->user()->username) }}" class="form-control" id="username" placeholder="Enter username" name="username">
                            </div>
                            <div class="mb-3">
                                <label for="userpassword">{{ __('Password') }}</label>
                                <input type="password"  class="form-control" id="userpassword" placeholder="new password?" name="password">
                            </div>
                            <div class="mb-3">
                                <label for="userpassword">{{ __('Confirm Password') }}</label>
                                <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm password" name="password_confirmation">
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="website1">{{__('My Photo')}}</label>
                                    </div>
                                    <div class="input-group">
                                        <input type="file" class="form-control" name="avatar" id="customFile">
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4" style="display:flex;justify-content: center">
                                <button class="btn btn-primary2 w-50  waves-effect waves-light" type="submit">{{ __('Save') }}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    </div>


</div> <!-- container-fluid -->
</div>


















@endsection
