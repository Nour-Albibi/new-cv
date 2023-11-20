<!doctype html>
<html lang="{{$lang}}" dir="{{$direction}}">

<head>
    <meta charset="utf-8" />
    <title> {{__('Company Dashboard')}} </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('company-assets/images/favicon1.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('company-assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" defer/>
    <!-- Icons Css -->
    <link href="{{asset('company-assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" defer/>
    <!-- App Css-->
    <link href="{{asset('company-assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" defer />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" id="app-style" rel="stylesheet" type="text/css" defer/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" id="app-style" rel="stylesheet" type="text/css" defer/>

    <link href="{{asset('company-assets/css/custom.css')}}" rel="stylesheet" type="text/css" defer />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;800&display=swap');
    </style>
    @yield('HeaderSection')
{{--@livewireStyles--}}
</head>


<body>

<!-- Begin page -->
<div id="layout-wrapper">

@include('company-cp.partials.header')

    <!-- ========== Left Sidebar Start ========== -->
@include('company-cp.partials.sidebar')
    <!-- Left Sidebar End -->

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">


        <!-- End Page-content -->


          <div class="page-content">

              <!-- start page title -->
              <div class="page-title-box">
                  <div class="container-fluid">
                      <div class="row align-items-center">
                          <div class="col-sm-6">
                              <div class="page-title">
                                  <h4>@yield('title', 'Dashboard') </h4>
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
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>document.write(new Date().getFullYear())</script> © Nfbaitc.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Crafted with <i class="mdi mdi-heart text-danger"></i> by Nfbaitc.
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

</div>
<!-- END layout-wrapper -->



<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- JAVASCRIPT -->
<script src="{{asset('company-assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('company-assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('company-assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('company-assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('company-assets/libs/node-waves/waves.min.js')}}"></script>

<script src="{{asset('company-assets/js/app.js')}}"></script>
@yield('custom_js')
{{--@livewireScripts--}}
</body>
</html>
