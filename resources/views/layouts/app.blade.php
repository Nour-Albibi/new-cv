<!DOCTYPE html>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>{{setting('site_title_'.$lang)}} @yield('title')</title>
    @yield('seo_section')
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="robots" content="max-image-preview:large">
    @yield('custom_css')
    <link rel="stylesheet" id="exad-slick-css"
          href="{{asset('assets/plugins/exclusive-addons-for-elementor/assets/vendor/css/slick.min.css?ver=6.3.1')}}"
          media="all">
    <link rel="stylesheet" id="exad-slick-theme-css"
          href="{{asset('assets/plugins/exclusive-addons-for-elementor/assets/vendor/css/slick-theme.min.css?ver=6.3.1')}}"
          media="all">
    <link rel="stylesheet" id="exad-image-hover-css"
          href="{{asset('assets/plugins/exclusive-addons-for-elementor/assets/vendor/css/imagehover.css?ver=6.3.1')}}"
          media="all">
    <link rel="stylesheet" id="exad-main-style-css"
          href="{{asset('assets/plugins/exclusive-addons-for-elementor/assets/css/exad-styles.min.css?ver=6.3.1')}}"
          media="all">
    <link rel="stylesheet" id="hello-elementor-css"
          href="{{asset('assets/themes/hello-elementor/style.min.css?ver=2.8.1')}}"
          media="all">
    <link rel="stylesheet" id="hello-elementor-theme-style-css"
          href="{{asset('assets/themes/hello-elementor/theme.min.css?ver=2.8.1')}}"
          media="all">
    <link rel="stylesheet" id="elementor-frontend-css"
          href="{{asset('assets/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.16.4')}}"
          media="all">
    <link rel="stylesheet" id="elementor-icons-css"
          href="{{asset('assets/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.23.0')}}"
          media="all">
    <link rel="stylesheet" id="swiper-css"
          href="{{asset('assets/plugins/elementor/assets/lib/swiper/v8/css/swiper.min.css?ver=8.4.5')}}"
          media="all">
    <link rel="stylesheet" id="elementor-pro-css"
          href="{{asset('assets/plugins/elementor-pro/assets/css/frontend-lite.min.css?ver=3.16.2')}}"
          media="all">
      <link rel="stylesheet" id="eael-general-css"
          href="{{asset('assets/plugins/essential-addons-for-elementor-lite/assets/front-end/css/view/general.min.css?ver=5.8.9')}}"
          media="all">
    <link rel="stylesheet" id="google-fonts-1-css"
          href="https://fonts.googleapis.com/css?family=Poppins%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;display=swap&#038;ver=6.3.1"
          media="all">
    <link rel="stylesheet" id="elementor-icons-shared-0-css"
          href="{{asset('assets/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.15.3')}}"
          media="all">
    <link rel="stylesheet" id="elementor-icons-fa-solid-css"
          href="{{asset('assets/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.15.3')}}"
          media="all">
    <link rel="stylesheet" id="elementor-icons-shared-2-css"
          href="{{asset('assets/plugins/exclusive-addons-for-elementor/assets/fonts/remix-icon/remixicon.min.css?ver=2.6.8')}}"
          media="all">
    <link rel="stylesheet" id="elementor-icons-remix-icons-css"
          href="{{asset('assets/plugins/exclusive-addons-for-elementor/assets/fonts/remix-icon/remixicon.min.css?ver=2.6.8')}}"
          media="all">
    <link rel="stylesheet" id="elementor-icons-fa-brands-css"
          href="{{asset('assets/plugins/elementor/assets/lib/font-awesome/css/brands.min.css?ver=5.15.3')}}"
          media="all">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <script src="{{asset('assets/js/jquery/jquery.min.js?ver=3.7.0')}}"
            id="jquery-core-js"></script>
    <script src="{{asset('assets/js/jquery/jquery-migrate.min.js?ver=3.4.1')}}"
            id="jquery-migrate-js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" media="all" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css"
          media="all" defer>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css"
          media="all" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" >
    <link rel="alternate" type="text/xml+oembed"
          href="https://projects.datatime4it.com/chtml/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fprojects.datatime4it.com%2Fchtml%2F#038;format=xml">
    <meta name="generator"
          content="Elementor 3.16.4; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <link rel="stylesheet" href="{{asset('assets/plugins/elementor/assets/css/widget-icon-list.min.css')}}" defer>
    <link rel="stylesheet"
          href="{{asset('assets/plugins/elementor-pro/assets/css/widget-nav-menu.min.css')}}" defer>
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" defer>
    @yield('custom2Css')
</head>
<body class="{{$bodyClass ?? ''}} page-template page-template-elementor_header_footer page page-id-59 exclusive-addons-elementor elementor-default elementor-template-full-width elementor-kit-36 elementor-page elementor-page-59">
<a class="skip-link screen-reader-text" href="#content">{{__('Skip to content')}}</a>
@include('layouts.header')
@yield('main_content')
@include('layouts.footer')
<link rel="stylesheet" id="e-animations-css"
      href="{{asset('assets/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.16.4')}}"
      media="all">
<script
    src="{{asset('assets/plugins/exclusive-addons-for-elementor/assets/vendor/js/jquery.sticky-sidebar.js?ver=2.6.8')}}"
    id="exad-sticky-jquery-js"></script>
<script
    src="{{asset('assets/plugins/contact-form-7/includes/swv/js/index.js?ver=5.8.1')}}"
    id="swv-js"></script>
<script id="contact-form-7-js-extra">var wpcf7 = {
        "api": {
            "root": "https:\/\/projects.datatime4it.com\/chtml\/wp-json\/",
            "namespace": "contact-form-7\/v1"
        }
    };</script>
<script src="{{asset('assets/plugins/contact-form-7/includes/js/index.js?ver=5.8.1')}}"
        id="contact-form-7-js"></script>
<script
    src="{{asset('assets/plugins/exclusive-addons-for-elementor/assets/js/exad-scripts.min.js?ver=2.6.8')}}"
    id="exad-main-script-js"></script>
<script
    src="{{asset('assets/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=1.0.0')}}"
    id="hello-theme-frontend-js"></script>
<script
    src="{{asset('assets/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min.js?ver=5.8.9')}}"
    id="eael-general-js"></script>
<script
    src="{{asset('assets/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1')}}"
    id="smartmenus-js"></script>
<script src="{{asset('assets/js/imagesloaded.min.js?ver=4.1.4')}}"
        id="imagesloaded-js"></script>
<script
    src="{{asset('assets/plugins/exclusive-addons-for-elementor/assets/vendor/js/slick.min.js?ver=2.6.8')}}"
    id="exad-slick-js"></script>
<script
    src="{{asset('assets/plugins/elementor/assets/lib/jquery-numerator/jquery-numerator.min.js?ver=0.2.1')}}"
    id="jquery-numerator-js"></script>
<script
    src="{{asset('assets/plugins/elementor-pro/assets/js/webpack-pro.runtime.min.js?ver=3.16.2')}}"
    id="elementor-pro-webpack-runtime-js"></script>
<script
    src="{{asset('assets/plugins/elementor/assets/js/webpack.runtime.min.js?ver=3.16.4')}}"
    id="elementor-webpack-runtime-js"></script>
<script
    src="{{asset('assets/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.16.4')}}"
    id="elementor-frontend-modules-js"></script>
<script src="{{asset('assets/js/dist/vendor/wp-polyfill-inert.min.js?ver=3.1.2')}}"
        id="wp-polyfill-inert-js"></script>
<script src="{{asset('assets/js/dist/vendor/regenerator-runtime.min.js?ver=0.13.11')}}"
        id="regenerator-runtime-js"></script>
<script src="{{asset('assets/js/dist/vendor/wp-polyfill.min.js?ver=3.15.0')}}"
        id="wp-polyfill-js"></script>
<script src="{{asset('assets/js/dist/hooks.min.js?ver=c6aec9a8d4e5a5d543a1')}}"
        id="wp-hooks-js"></script>
<script src="{{asset('assets/js/dist/i18n.min.js?ver=7701b0c3857f914212ef')}}"
        id="wp-i18n-js"></script>
<script id="wp-i18n-js-after">
    wp.i18n.setLocaleData({'text directionltr': ['ltr']});
</script>
<script
    src="{{asset('assets/plugins/elementor-pro/assets/js/frontend.min.js?ver=3.16.2')}}"
    id="elementor-pro-frontend-js"></script>
<script
    src="{{asset('assets/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2')}}"
    id="elementor-waypoints-js"></script>
<script src="{{asset('assets/js/jquery/ui/core.min.js?ver=1.13.2')}}"
        id="jquery-ui-core-js"></script>
<script id="elementor-frontend-js-before">var elementorFrontendConfig = {
        "environmentMode": {"edit": false, "wpPreview": false, "isScriptDebug": false},
        "i18n": {
            "shareOnFacebook": "Share on Facebook",
            "shareOnTwitter": "Share on Twitter",
            "pinIt": "Pin it",
            "download": "Download",
            "downloadImage": "Download image",
            "fullscreen": "Fullscreen",
            "zoom": "Zoom",
            "share": "Share",
            "playVideo": "Play Video",
            "previous": "Previous",
            "next": "Next",
            "close": "Close",
            "a11yCarouselWrapperAriaLabel": "Carousel | Horizontal scrolling: Arrow Left & Right",
            "a11yCarouselPrevSlideMessage": "Previous slide",
            "a11yCarouselNextSlideMessage": "Next slide",
            "a11yCarouselFirstSlideMessage": "This is the first slide",
            "a11yCarouselLastSlideMessage": "This is the last slide",
            "a11yCarouselPaginationBulletMessage": "Go to slide"
        },
        "is_rtl": false,
        "breakpoints": {"xs": 0, "sm": 480, "md": 768, "lg": 1025, "xl": 1440, "xxl": 1600},
        "responsive": {
            "breakpoints": {
                "mobile": {
                    "label": "Mobile Portrait",
                    "value": 767,
                    "default_value": 767,
                    "direction": "max",
                    "is_enabled": true
                },
                "mobile_extra": {
                    "label": "Mobile Landscape",
                    "value": 880,
                    "default_value": 880,
                    "direction": "max",
                    "is_enabled": false
                },
                "tablet": {
                    "label": "Tablet Portrait",
                    "value": 1024,
                    "default_value": 1024,
                    "direction": "max",
                    "is_enabled": true
                },
                "tablet_extra": {
                    "label": "Tablet Landscape",
                    "value": 1200,
                    "default_value": 1200,
                    "direction": "max",
                    "is_enabled": false
                },
                "laptop": {
                    "label": "Laptop",
                    "value": 1366,
                    "default_value": 1366,
                    "direction": "max",
                    "is_enabled": false
                },
                "widescreen": {
                    "label": "Widescreen",
                    "value": 2400,
                    "default_value": 2400,
                    "direction": "min",
                    "is_enabled": false
                }
            }
        },
        "version": "3.16.4",
        "is_static": false,
        "experimentalFeatures": {
            "e_dom_optimization": true,
            "e_optimized_assets_loading": true,
            "e_optimized_css_loading": true,
            "additional_custom_breakpoints": true,
            "container": true,
            "e_swiper_latest": true,
            "theme_builder_v2": true,
            "hello-theme-header-footer": true,
            "landing-pages": true,
            "e_global_styleguide": true,
            "page-transitions": true,
            "notes": true,
            "form-submissions": true,
            "e_scroll_snap": true
        },
        "urls": {"assets": "https:\/\/projects.datatime4it.com\/chtml\/wp-content\/plugins\/elementor\/assets\/"},
        "swiperClass": "swiper",
        "settings": {"page": [], "editorPreferences": []},
        "kit": {
            "active_breakpoints": ["viewport_mobile", "viewport_tablet"],
            "global_image_lightbox": "yes",
            "lightbox_enable_counter": "yes",
            "lightbox_enable_fullscreen": "yes",
            "lightbox_enable_zoom": "yes",
            "lightbox_enable_share": "yes",
            "lightbox_title_src": "title",
            "lightbox_description_src": "description",
            "hello_header_logo_type": "title",
            "hello_header_menu_layout": "horizontal",
            "hello_footer_logo_type": "logo"
        },
        "post": {"id": 59, "title": "Nfbatic", "excerpt": "", "featuredImage": false}
    };</script>
<script src="{{asset('assets/plugins/elementor/assets/js/frontend.min.js?ver=3.16.4')}}"
        id="elementor-frontend-js"></script>
<script
    src="{{asset('assets/plugins/elementor-pro/assets/js/elements-handlers.min.js?ver=3.16.2')}}"
    id="pro-elements-handlers-js"></script>
<script src="{{asset('assets/js/underscore.min.js?ver=1.13.4')}}"
        id="underscore-js"></script>
<script src="{{asset('assets/js/wp-util.min.js?ver=6.3.1')}}" id="wp-util-js"></script>
<script
    src="{{asset('assets/plugins/wpforms/assets/js/integrations/elementor/frontend.min.js?ver=1.6.7')}}"
    id="wpforms-elementor-js"></script>
@yield('custom_js')
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

</script>
</body>
</html>
