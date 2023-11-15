@extends('layouts.app')
@section('seo_section')
    <meta name="description" content="">
    <meta name="keywords" content="">
@stop
@section('custom_css')
    <link rel="stylesheet" id="elementor-post-36-css"
          href="{{asset('assets/uploads/elementor/css/post-36.css?ver=1695906899')}}"
          media="all" defer>
    <link rel="stylesheet" id="elementor-post-23-css"
          href="{{asset('assets/uploads/elementor/css/post-23.css?ver=1696667947')}}"
          media="all" defer>
    <link rel="stylesheet" id="elementor-post-59-css"
          href="{{asset('assets/uploads/elementor/css/post-59.css?ver=1696668000')}}"
          media="all" defer>
    <link rel="stylesheet" id="elementor-post-55-css"
          href="{{asset('assets/uploads/elementor/css/post-55.css?ver=1695921314')}}"
          media="all" defer/>
    <link rel="stylesheet"
          href="{{asset('assets/css/widget-icon-box.min.css')}}" defer/>
    <link rel="stylesheet" href="{{asset('assets/css/widget-animated-headline.min.css')}}" defer/>
    <link rel="stylesheet" href="{{asset('assets/css/widget-carousel.min.css')}}" defer/>
    <link rel="stylesheet"
          href="{{asset('assets/css/home.css')}}" defer/>
@endsection
@section('main_content')
    <div data-elementor-type="wp-page" data-elementor-id="59" class="elementor elementor-59"
         data-elementor-post-type="page">
        @include('home_sections.hero')
        @include('home_sections.clients')
        @include('home_sections.steps')
        @include('home_sections.home_about')
        @include('home_sections.templates')
        @include('home_sections.boxes')
        @include('home_sections.news_letters')
    </div>
@endsection
@section('custom_js')
    <script
        src="https://projects.datatime4it.com/chtml/wp-content/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.16.2"
        id="elementor-pro-webpack-runtime-js"></script>
    <script id="elementor-pro-frontend-js-before">var ElementorProFrontendConfig = {
            "ajaxurl": "https:\/\/projects.datatime4it.com\/chtml\/wp-admin\/admin-ajax.php",
            "nonce": "939c9d8457",
            "urls": {
                "assets": "https:\/\/projects.datatime4it.com\/chtml\/wp-content\/plugins\/elementor-pro\/assets\/",
                "rest": "https:\/\/projects.datatime4it.com\/chtml\/wp-json\/"
            },
            "shareButtonsNetworks": {
                "facebook": {"title": "Facebook", "has_counter": true},
                "twitter": {"title": "Twitter"},
                "linkedin": {"title": "LinkedIn", "has_counter": true},
                "pinterest": {"title": "Pinterest", "has_counter": true},
                "reddit": {"title": "Reddit", "has_counter": true},
                "vk": {"title": "VK", "has_counter": true},
                "odnoklassniki": {"title": "OK", "has_counter": true},
                "tumblr": {"title": "Tumblr"},
                "digg": {"title": "Digg"},
                "skype": {"title": "Skype"},
                "stumbleupon": {"title": "StumbleUpon", "has_counter": true},
                "mix": {"title": "Mix"},
                "telegram": {"title": "Telegram"},
                "pocket": {"title": "Pocket", "has_counter": true},
                "xing": {"title": "XING", "has_counter": true},
                "whatsapp": {"title": "WhatsApp"},
                "email": {"title": "Email"},
                "print": {"title": "Print"}
            },
            "facebook_sdk": {"lang": "en_US", "app_id": ""},
            "lottie": {"defaultAnimationUrl": "https:\/\/projects.datatime4it.com\/chtml\/wp-content\/plugins\/elementor-pro\/modules\/lottie\/assets\/animations\/default.json"}
        };</script>
    <script
        src="https://projects.datatime4it.com/chtml/wp-content/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.16.2"
        id="elementor-pro-frontend-js"></script>
@stop
