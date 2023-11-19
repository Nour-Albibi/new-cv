@extends('auth.layout')
@section('content')
    <style>
        .d-none {
            display: none;
        }
    </style>
    <div class="card">
        <div class="card-body">
            <div class="px-2 py-3">
                <div class="text-center">
                    <a href="{{url('/')}}">
                        <img src="{{asset('customers-auth/assets/images/b-logo.png')}}" height="22" alt="logo">
                    </a>

                    <h5 class="text-primary2 mb-2 mt-4">Login in !</h5>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div>
                                    <div class="form-check mb-3">
                                        <input class="form-check-input" type="radio" name="auth_individual"
                                               id="customer_check" checked>
                                        <label class="form-check-label" for="formRadios1">
                                            As an individual
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <div class="form-check mb-3" onclick="">
                                        <input class="form-check-input" type="radio" name="auth_company"
                                               id="company_check">
                                        <label class="form-check-label" for="formRadios1">
                                            As a Company
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div id="customer_form">
                    <form class="form-horizontal mt-4 pt-2" action="{{route('customer.doLogin')}}" method="post">
                        @csrf
                        <input type="hidden" name="customer_type" value="1"/>
                        @if($errors->any())
                            <div class="mb-3">
                                <h6 style="color:red">{{$errors->first()}}</h6>
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="username">Email</label>
                            <input type="text" class="form-control" id="Email"
                                   placeholder="Enter Email" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="userpassword">Password</label>
                            <input type="password" class="form-control" id="userpassword"
                                   placeholder="Enter password" name="password">
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input"
                                       id="customControlInline">
                                <label class="form-label"
                                       for="customControlInline">Remember me</label>
                            </div>
                        </div>

                        <div>
                            <button class="btn ele-button w-100 waves-effect waves-light"
                                    type="submit">Log In
                            </button>
                        </div>

                        <div class="mt-4 text-center">
                            <a href="" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                        </div>

                        <!---->
                        <div class="seperator"><b>or</b></div>
                        <p style="text-align: center;">Login in with your social media account</p>
                        <!-- Social login buttons -->
                        <div class="social-icon">

                            <button type="button" style="background-color: #024a53;"><i class="fa fa-google"></i>
                            </button>
                            <button type="button" style="background-color: #024a53;"><i class="fa fa-facebook"></i>
                            </button>

                        </div>

                    </form>

                    <p style="text-align: center;margin-top: 1rem;" id="customer_sign_up">Don't have an account ? <a
                            href="{{route('customer.register')}}" class="fw-bold text-primary2"> Sign up</a></p>
                </div>
                <div class="d-none" id="company_form">
                    <form class="form-horizontal mt-4 pt-2" action="{{route('company.doLogin')}}" method="post">
                        @csrf
                        <input type="hidden" name="customer_type" value="2"/>
                        @if($errors->any())
                            <div class="mb-3">
                                <h6 style="color:red">{{$errors->first()}}</h6>
                            </div>
                        @endif
                        <div class="mb-3">
                            <label for="username">Email</label>
                            <input type="text" class="form-control" id="Email"
                                   placeholder="Enter Email" name="email">
                        </div>

                        <div class="mb-3">
                            <label for="userpassword">Password</label>
                            <input type="password" class="form-control" id="userpassword"
                                   placeholder="Enter password" name="password">
                        </div>

                        <div class="mb-3">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input"
                                       id="customControlInline">
                                <label class="form-label"
                                       for="customControlInline">Remember me</label>
                            </div>
                        </div>

                        <div>
                            <button class="btn ele-button w-100 waves-effect waves-light"
                                    type="submit">Log In
                            </button>
                        </div>

                        <div class="mt-4 text-center">
                            <a href="" class="text-muted"><i class="mdi mdi-lock me-1"></i> Forgot your password?</a>
                        </div>

                        <!---->
                        <div class="seperator"><b>or</b></div>
                        <p style="text-align: center;">Login in with your social media account</p>
                        <!-- Social login buttons -->
                        <div class="social-icon">

                            <button type="button" style="background-color: #024a53;"><i class="fa fa-google"></i>
                            </button>
                            <button type="button" style="background-color: #024a53;"><i class="fa fa-facebook"></i>
                            </button>

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
@section('customJS')
    <script>
        $(document).ready(function () {
            $('input[name=auth_individual]').on('click', function () {
                $("#company_check").prop('checked', false);
                $('#customer_form').removeClass('d-none');
                $('#company_form').addClass('d-none');
            });
            $('input[name=auth_company]').on('click', function () {
                $("#customer_check").prop('checked', false);
                $('#company_form').removeClass('d-none');
                $('#customer_form').addClass('d-none');
            });
        });
    </script>
@stop
