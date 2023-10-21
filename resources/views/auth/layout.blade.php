<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Register page | Nfbaitc</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesdesign" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('customers-auth/assets/images/favicon1.ico')}}">
    <!-- Bootstrap Css -->
    <link href="{{asset('customers-auth/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('customers-auth/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{asset('customers-auth/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;500;600;800&display=swap" rel="stylesheet">
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
            background-color: #4b4b4b;
            color: #fff;
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
</head>
<body class="authentication-bg bg-primary2">
<div class="home-center">
    <div class="home-desc-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    @yield('content')
                </div>
            </div>
        </div>
        <div class="mt-1 text-center text-white" style="text-align: center;">
            <p>© <script>document.write(new Date().getFullYear())</script> Nfbaitc. </p>
        </div>
    </div>
    <!-- End Log In page -->
</div>
<!-- JAVASCRIPT -->
<script src="{{asset('customers-auth/assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('customers-auth/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('customers-auth/assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('customers-auth/assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('customers-auth/assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('customers-auth/assets/js/app.js')}}"></script>
@yield('customJS')
</body>
</html>
