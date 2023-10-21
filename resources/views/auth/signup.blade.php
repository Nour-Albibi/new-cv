@extends('auth.layout')
@section('content')
<div class="card">
    <div class="card-body">
        <div class="px-2 py-3">
            <div class="text-center">
                <a href="{{url('/')}}">
                    <img src="{{asset('customers-auth/assets/images/b-logo.png')}}" height="22" alt="logo" loading="lazy">
                </a>
                <h5 class="text-primary2 mb-2 mt-4">Free Register!</h5>
                <p class="text-muted">Get your free Nfbaitc account now.</p>
                @if($errors->any())
                    <h4>{{$errors->first()}}</h4>
                @endif
            </div>
            <form class="form-horizontal mt-4 pt-2" action="{{route('customer.signup')}}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="first_name">First Name</label>
                    <input type="text" class="form-control" id="first_name" placeholder="First Name" name="first_name">
                </div>
                <div class="mb-3">
                    <label for="last_name">Last Name</label>
                    <input type="text" class="form-control" id="last_name" placeholder="Last Name" name="last_name">
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
                </div>
                <div class="mb-3">
                    <label for="userpassword">Password</label>
                    <input type="password" class="form-control" id="userpassword" placeholder="Enter password" name="password">
                </div>
                <div class="mb-3">
                    <label for="userpassword">Confirm Password</label>
                    <input type="password" class="form-control" id="password_confirmation" placeholder="Confirm password" name="password_confirmation">
                </div>

                <div class="mt-4">
                    <button class="btn btn-primary2 w-100 waves-effect waves-light" type="submit">Register</button>
                </div>
                <div class="mt-4 text-center">
                    <p class="mb-0">By registering you agree to the Nfbaitc <a href="#" class="text-primary2">Terms of Use</a></p>
                    <!---->
                    <div class="seperator"><b>or</b></div>
                    <p style="text-align: center;">Sign Up with your social media account</p>
                    <!-- Social login buttons -->
                    <div class="social-icon">
                        <button type="button" style="background-color: #024a53;"><i class="fa fa-google" ></i></button>
                        <button type="button" style="background-color: #024a53;"><i class="fa fa-facebook"></i></button>
                    </div>
                </div>
            </form>
            <p style="text-align: center;margin-top: 1rem;">{{__('you have an account ?')}} <a href="{{route('customer.login')}}" class="fw-bold text-primary2"> {{__('Sign in')}}</a> </p>
        </div>
    </div>
</div>
@endsection
