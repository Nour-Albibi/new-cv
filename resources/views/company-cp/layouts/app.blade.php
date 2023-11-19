<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title> Company Dashboard </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('company-assets/images/favicon1.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{asset('company-assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('company-assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('company-assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" id="app-style" rel="stylesheet" type="text/css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" id="app-style" rel="stylesheet" type="text/css" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Domine:wght@400;500;600;700&display=swap');
    </style>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;800&display=swap');
    </style>
    <style>
        *{
            font-family: 'Domine', serif;
        }
    </style>
    <style>
        .bg-primary2 {
            --bs-bg-opacity: 1;
            background-color: #024a53;
        }
        .btn-primary2{
            background-color: #024a53;
            color: #fff;
        }
        .btn-primary2:hover{
            background-color: #024a53;
            color: #fff;
        }
        .bg-soft-success {
            background-color: #3f757c!important;
        }
        .ele-button {

            color: #FFFFFF;
            background-color: transparent;
            background-image: linear-gradient(170deg, #024a53 0%, #024a53 100%);
            border-radius: 5px 5px 5px 5px;
            padding: 16px 35px 16px 35px;}

        .ele-button:hover {

            color: #FFFFFF;
            background-color: transparent;
            background-image: linear-gradient(170deg, #1d545c 0%, #1d555c 100%);
            border-radius: 5px 5px 5px 5px;
            padding: 16px 35px 16px 35px;}
        .text-primary2{
            color: #515151;
        }
        .seperator {
            float: left;
            width: 100%;
            border-top: 1px solid #ccc;
            text-align: center;
            margin: 50px 0 0;
        }
        .seperator b {
            width: 40px;
            height: 40px;
            font-size: 16px;
            text-align: center;
            line-height: 40px;
            background: #fff;
            display: inline-block;
            border: 1px solid #e0e0e0;
            border-radius: 50%;
            position: relative;
            top: -22px;
            z-index: 1;
        }
        .social-icon button {
            font-size: 20px;
            color: white;
            height: 50px;
            width: 50px;
            background: #515151;
            border-radius: 60%;
            margin: 0px 10px;
            border: none;
            cursor: pointer;
            text-align: center;
        }
        .social-icon{
            text-align: center;
        }
        .form-check-input:checked {
            background-color: #515151;
            border-color: #515151;
        }
    </style>
@livewireStyles
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
@livewireScripts
</body>
</html>
