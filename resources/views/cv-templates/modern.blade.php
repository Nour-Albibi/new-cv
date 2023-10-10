<!DOCTYPE html>
<html lang="en" class="direction-ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet" defer>
    <link href="{{asset('cv-templates/css/modern.css')}}" rel="stylesheet" defer/>
    <link rel="apple-touch-icon" sizes="180x180" href="">
    <link rel="icon" type="image/png" sizes="32x32" href="">
    <link rel="icon" type="image/png" sizes="16x16" href="">
    <link rel="manifest" href="">
    <!--Custom CSS-->
</head>
<body class="background">
<div class="Home Home---Mobile">
    <header class="Mobile--Header">
        <div class="company-info">
            <div class="info-icon"></div>
            <x-template.sidebar-menu :restaurant="$restaurant"/>
        </div>
        <div class="logo">
            <img src="{{asset('files/'.$restaurant->logo)}}" loading="lazy" width="102" height="43">
        </div>
        <div class="d-flex receipt-div @if(!$restaurant->CanShowCheckOrderBtn()) disable @endif">
            <div class="receipt-icon"></div>
            <p class="Text-400 T-400-xs">
                {{__('ASK FOR RECEIPT')}}
            </p>
        </div>
    </header>
    <main>
        @yield('main_content')
    </main>
    <!--    Float Menu Button Component -->
    <!--    Navigation Type 1-->
    @if($restaurant->restaurant_template_setting->navigation_id==1)
        <x-template.float-menu-button/>
        <!--Add Menu List -->
        <div class="main-menu">
            <div class="main-menu-container">
                <!--Back Button Componenet-->
                <x-template.back-button class="closeIcon back-btn-sm menu-close"/>
                <ul class="main-menu-list ">
                    @php $i=0 @endphp
                    @foreach($restaurant->main_categories as $category)
                        <li class="main-menu-list-item" @if($i%2!=0) class="dark" @endif category_id="{{$category->id}}">
                            <p class="main_menu-title">{{$category->name}}</p>
                            <div class="main-menu-img">
                                <img class=""
                                     src="{{asset('files/thumbnail/'.\App\Services\CategoryService::createImageThump($category))}}"
                                     loading="lazy"/>
                            </div>
                        </li>
                        @php $i++ @endphp
                    @endforeach
                </ul>
            </div>
        </div>
@endif
<!--Bottom Cart Info Bar Component-->
    <x-cart.bottom-info-bar :cart="$cart" />
    <!--Modal Component-->
    <x-template.receipt-modal></x-template.receipt-modal>
    <!-- Modal variants Component-->
    <x-template.variants-modal></x-template.variants-modal>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
        integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
<script
    src="https://code.jquery.com/jquery-3.6.0.min.js"
    integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
    crossorigin="anonymous"
></script>
<!--Custom JS-->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{asset('assets/js/functions.js')}}"></script>
@yield('customJS')
</body>
</html>
