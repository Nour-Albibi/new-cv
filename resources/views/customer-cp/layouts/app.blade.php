<!doctype html>
<html lang="{{$lang}}" dir="{{$direction}}">

<head>
    <meta charset="utf-8"/>
    <title> {{ __('Customer Dashboard') }} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="Themesdesign" name="author"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('customer-assets/images/favicon1.ico')}}">
    <!-- Bootstrap Css -->
    <!-- Icons Css -->
    <link href="{{asset('customer-assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" defer/>
    <!-- App Css-->
    @if(app()->getLocale()=="en")
        <link href="{{asset('customer-assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet"
              type="text/css" defer/>
        <link href="{{asset('customer-assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" defer/>
    @else
        <link href="{{asset('customer-assets/css/bootstrap-rtl.min.css')}}" id="bootstrap-style" rel="stylesheet"
              type="text/css" defer/>
    <link href="{{asset('customer-assets/css/app-rtl.min.css')}}" id="app-style" rel="stylesheet" type="text/css" defer/>
    @endif
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;800&display=swap"
          rel="stylesheet" >
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" id="app-style"
          rel="stylesheet" type="text/css" defer/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" id="app-style"
          rel="stylesheet" type="text/css" defer/>
    <link href="{{asset('customer-assets/css/custom.css')}}" rel="stylesheet" type="text/css" defer/>
    @yield('custom_css')
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&display=swap');
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;800&display=swap');
    </style>
@yield('HeaderSection')
</head>
<body>
<audio id="myAudio" style="visibility: hidden;width: auto;">
    <source src="{{asset('sounds/notification-2.mp3')}}" type="audio/mpeg">
    Your browser does not support the audio element.
</audio>
<input type="hidden" name="user_id" id="user_id" value="{{auth()->guard('customer')->user()->id}}"/>
<!-- Begin page -->
<div id="layout-wrapper">
@include('customer-cp.partials.header')
<!-- ========== Left Sidebar Start ========== -->
@include('customer-cp.partials.sidebar')
<!-- Left Sidebar End -->
    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <!-- start page title -->
            <div class="page-title-box">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-sm-6">
                            <div class="page-title">
                                <h4>@yield('title', 'CV2') </h4>
                                @if($errors->any())
                                    <h5 class="alert alert-danger text-danger">{{$errors->first()}}</h5>
                                @endif
                                <ol class="breadcrumb m-0">

                                    <li class="breadcrumb-item active"></li>
                                </ol>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="float-end d-none d-sm-block">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="container-fluid">
                <div class="page-content-wrapper">
                    @yield('content')
                </div>
            </div> <!-- container-fluid -->
        </div>

        <!-- End Page-content -->
        @include('customer-cp.partials.footer')
    </div>
    <!-- end main content-->
</div>
<!-- END layout-wrapper -->
<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>
<!-- JAVASCRIPT -->
<script src="{{asset('customer-assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('customer-assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('customer-assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('customer-assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('customer-assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('customer-assets/js/app.js')}}"></script>
@yield('custom_js')
</body>
</html>
