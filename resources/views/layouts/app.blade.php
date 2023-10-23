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
    <script>
        window._wpemojiSettings = {
            "baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/",
            "ext": ".png",
            "svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/",
            "svgExt": ".svg",
            "source": {"concatemoji": "https:\/\/projects.datatime4it.com\/chtml\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.3.1"}
        };
        /*! This file is auto-generated */
        !function (i, n) {
            var o, s, e;

            function c(e) {
                try {
                    var t = {supportTests: e, timestamp: (new Date).valueOf()};
                    sessionStorage.setItem(o, JSON.stringify(t))
                } catch (e) {
                }
            }

            function p(e, t, n) {
                e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(t, 0, 0);
                var t = new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data),
                    r = (e.clearRect(0, 0, e.canvas.width, e.canvas.height), e.fillText(n, 0, 0), new Uint32Array(e.getImageData(0, 0, e.canvas.width, e.canvas.height).data));
                return t.every(function (e, t) {
                    return e === r[t]
                })
            }

            function u(e, t, n) {
                switch (t) {
                    case"flag":
                        return n(e, "🏳️‍⚧️", "🏳️​⚧️") ? !1 : !n(e, "🇺🇳", "🇺​🇳") && !n(e, "🏴󠁧󠁢󠁥󠁮󠁧󠁿", "🏴​󠁧​󠁢​󠁥​󠁮​󠁧​󠁿");
                    case"emoji":
                        return !n(e, "🫱🏻‍🫲🏿", "🫱🏻​🫲🏿")
                }
                return !1
            }

            function f(e, t, n) {
                var r = "undefined" != typeof WorkerGlobalScope && self instanceof WorkerGlobalScope ? new OffscreenCanvas(300, 150) : i.createElement("canvas"),
                    a = r.getContext("2d", {willReadFrequently: !0}),
                    o = (a.textBaseline = "top", a.font = "600 32px Arial", {});
                return e.forEach(function (e) {
                    o[e] = t(a, e, n)
                }), o
            }

            function t(e) {
                var t = i.createElement("script");
                t.src = e, t.defer = !0, i.head.appendChild(t)
            }

            "undefined" != typeof Promise && (o = "wpEmojiSettingsSupports", s = ["flag", "emoji"], n.supports = {
                everything: !0,
                everythingExceptFlag: !0
            }, e = new Promise(function (e) {
                i.addEventListener("DOMContentLoaded", e, {once: !0})
            }), new Promise(function (t) {
                var n = function () {
                    try {
                        var e = JSON.parse(sessionStorage.getItem(o));
                        if ("object" == typeof e && "number" == typeof e.timestamp && (new Date).valueOf() < e.timestamp + 604800 && "object" == typeof e.supportTests) return e.supportTests
                    } catch (e) {
                    }
                    return null
                }();
                if (!n) {
                    if ("undefined" != typeof Worker && "undefined" != typeof OffscreenCanvas && "undefined" != typeof URL && URL.createObjectURL && "undefined" != typeof Blob) try {
                        var e = "postMessage(" + f.toString() + "(" + [JSON.stringify(s), u.toString(), p.toString()].join(",") + "));",
                            r = new Blob([e], {type: "text/javascript"}),
                            a = new Worker(URL.createObjectURL(r), {name: "wpTestEmojiSupports"});
                        return void (a.onmessage = function (e) {
                            c(n = e.data), a.terminate(), t(n)
                        })
                    } catch (e) {
                    }
                    c(n = f(s, u, p))
                }
                t(n)
            }).then(function (e) {
                for (var t in e) n.supports[t] = e[t], n.supports.everything = n.supports.everything && n.supports[t], "flag" !== t && (n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && n.supports[t]);
                n.supports.everythingExceptFlag = n.supports.everythingExceptFlag && !n.supports.flag, n.DOMReady = !1, n.readyCallback = function () {
                    n.DOMReady = !0
                }
            }).then(function () {
                return e
            }).then(function () {
                var e;
                n.supports.everything || (n.readyCallback(), (e = n.source || {}).concatemoji ? t(e.concatemoji) : e.wpemoji && e.twemoji && (t(e.twemoji), t(e.wpemoji)))
            }))
        }((window, document), window._wpemojiSettings);
    </script>
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
    <link rel="https://api.w.org/" href="https://projects.datatime4it.com/chtml/wp-json/">
    <link rel="alternate" type="application/json" href="https://projects.datatime4it.com/chtml/wp-json/wp/v2/pages/59">
    <link rel="EditURI" type="application/rsd+xml" title="RSD"
          href="https://projects.datatime4it.com/chtml/xmlrpc.php?rsd">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/brands.min.css"
          media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css"
          media="all">
    <meta name="generator" content="WordPress 6.3.1">
    <link rel="canonical" href="https://projects.datatime4it.com/chtml/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortlink" href="https://projects.datatime4it.com/chtml/">
    <link rel="alternate" type="application/json+oembed"
          href="https://projects.datatime4it.com/chtml/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fprojects.datatime4it.com%2Fchtml%2F">
    <link rel="alternate" type="text/xml+oembed"
          href="https://projects.datatime4it.com/chtml/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fprojects.datatime4it.com%2Fchtml%2F#038;format=xml">
    <meta name="generator"
          content="Elementor 3.16.4; features: e_dom_optimization, e_optimized_assets_loading, e_optimized_css_loading, additional_custom_breakpoints; settings: css_print_method-external, google_font-enabled, font_display-swap">
    <link rel="stylesheet" href="{{asset('assets/plugins/elementor/assets/css/widget-icon-list.min.css')}}" defer>
    <link rel="stylesheet"
          href="{{asset('assets/plugins/elementor-pro/assets/css/widget-nav-menu.min.css')}}" defer>
    <link rel="stylesheet" href="{{asset('assets/css/custom.css')}}" defer>
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
<script id="exad-main-script-js-extra">var exad_ajax_object = {
        "ajax_url": "https:\/\/projects.datatime4it.com\/chtml\/wp-admin\/admin-ajax.php",
        "nonce": "090ca3765e"
    };</script>
<script
    src="{{asset('assets/plugins/exclusive-addons-for-elementor/assets/js/exad-scripts.min.js?ver=2.6.8')}}"
    id="exad-main-script-js"></script>
<script
    src="{{asset('assets/themes/hello-elementor/assets/js/hello-frontend.min.js?ver=1.0.0')}}"
    id="hello-theme-frontend-js"></script>
<script id="eael-general-js-extra">var localize = {
        "ajaxurl": "https:\/\/projects.datatime4it.com\/chtml\/wp-admin\/admin-ajax.php",
        "nonce": "860542ee48",
        "i18n": {"added": "Added ", "compare": "Compare", "loading": "Loading..."},
        "eael_translate_text": {
            "required_text": "is a required field",
            "invalid_text": "Invalid",
            "billing_text": "Billing"
        },
        "page_permalink": "https:\/\/projects.datatime4it.com\/chtml\/",
        "cart_redirectition": "",
        "cart_page_url": "",
        "el_breakpoints": {
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
        },
        "ParticleThemesData": {
            "default": "{\"particles\":{\"number\":{\"value\":160,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":false,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":true,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":6,\"direction\":\"none\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"repulse\"},\"onclick\":{\"enable\":true,\"mode\":\"push\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
            "nasa": "{\"particles\":{\"number\":{\"value\":250,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":1,\"random\":true,\"anim\":{\"enable\":true,\"speed\":1,\"opacity_min\":0,\"sync\":false}},\"size\":{\"value\":3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":4,\"size_min\":0.3,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":1,\"direction\":\"none\",\"random\":true,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":600}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"bubble\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":250,\"size\":0,\"duration\":2,\"opacity\":0,\"speed\":3},\"repulse\":{\"distance\":400,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
            "bubble": "{\"particles\":{\"number\":{\"value\":15,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#1b1e34\"},\"shape\":{\"type\":\"polygon\",\"stroke\":{\"width\":0,\"color\":\"#000\"},\"polygon\":{\"nb_sides\":6},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.3,\"random\":true,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":50,\"random\":false,\"anim\":{\"enable\":true,\"speed\":10,\"size_min\":40,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":200,\"color\":\"#ffffff\",\"opacity\":1,\"width\":2},\"move\":{\"enable\":true,\"speed\":8,\"direction\":\"none\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":false,\"mode\":\"grab\"},\"onclick\":{\"enable\":false,\"mode\":\"push\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
            "snow": "{\"particles\":{\"number\":{\"value\":450,\"density\":{\"enable\":true,\"value_area\":800}},\"color\":{\"value\":\"#fff\"},\"shape\":{\"type\":\"circle\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"img\/github.svg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":true,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":5,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":500,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":2},\"move\":{\"enable\":true,\"speed\":6,\"direction\":\"bottom\",\"random\":false,\"straight\":false,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":true,\"mode\":\"bubble\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":400,\"line_linked\":{\"opacity\":0.5}},\"bubble\":{\"distance\":400,\"size\":4,\"duration\":0.3,\"opacity\":1,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}",
            "nyan_cat": "{\"particles\":{\"number\":{\"value\":150,\"density\":{\"enable\":false,\"value_area\":800}},\"color\":{\"value\":\"#ffffff\"},\"shape\":{\"type\":\"star\",\"stroke\":{\"width\":0,\"color\":\"#000000\"},\"polygon\":{\"nb_sides\":5},\"image\":{\"src\":\"http:\/\/wiki.lexisnexis.com\/academic\/images\/f\/fb\/Itunes_podcast_icon_300.jpg\",\"width\":100,\"height\":100}},\"opacity\":{\"value\":0.5,\"random\":false,\"anim\":{\"enable\":false,\"speed\":1,\"opacity_min\":0.1,\"sync\":false}},\"size\":{\"value\":4,\"random\":true,\"anim\":{\"enable\":false,\"speed\":40,\"size_min\":0.1,\"sync\":false}},\"line_linked\":{\"enable\":false,\"distance\":150,\"color\":\"#ffffff\",\"opacity\":0.4,\"width\":1},\"move\":{\"enable\":true,\"speed\":14,\"direction\":\"left\",\"random\":false,\"straight\":true,\"out_mode\":\"out\",\"bounce\":false,\"attract\":{\"enable\":false,\"rotateX\":600,\"rotateY\":1200}}},\"interactivity\":{\"detect_on\":\"canvas\",\"events\":{\"onhover\":{\"enable\":false,\"mode\":\"grab\"},\"onclick\":{\"enable\":true,\"mode\":\"repulse\"},\"resize\":true},\"modes\":{\"grab\":{\"distance\":200,\"line_linked\":{\"opacity\":1}},\"bubble\":{\"distance\":400,\"size\":40,\"duration\":2,\"opacity\":8,\"speed\":3},\"repulse\":{\"distance\":200,\"duration\":0.4},\"push\":{\"particles_nb\":4},\"remove\":{\"particles_nb\":2}}},\"retina_detect\":true}"
        },
        "eael_login_nonce": "a535a7db1b",
        "eael_register_nonce": "67bd7c0b4a"
    };</script>
<script
    src="{{asset('assets/plugins/essential-addons-for-elementor-lite/assets/front-end/js/view/general.min.js?ver=5.8.9')}}"
    id="eael-general-js"></script>
<script
    src="{{asset('assets/plugins/elementor-pro/assets/lib/smartmenus/jquery.smartmenus.min.js?ver=1.0.1')}}"
    id="smartmenus-js"></script>
<script src="{{asset('assets/js/imagesloaded.min.js?ver=4.1.4')}}"
        id="imagesloaded-js"></script>
<script
    src="https://projects.datatime4it.com/chtml/wp-content/plugins/exclusive-addons-for-elementor/assets/vendor/js/slick.min.js?ver=2.6.8"
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
<script id="wp-util-js-extra">var _wpUtilSettings = {"ajax": {"url": "\/c\/wp-admin\/admin-ajax.php"}};</script>
<script src="{{asset('assets/js/wp-util.min.js?ver=6.3.1')}}" id="wp-util-js"></script>
<script id="wpforms-elementor-js-extra">var wpformsElementorVars = {
        "captcha_provider": "recaptcha",
        "recaptcha_type": "v2"
    };</script>
<script
    src="{{asset('assets/plugins/wpforms/assets/js/integrations/elementor/frontend.min.js?ver=1.6.7')}}"
    id="wpforms-elementor-js"></script>
<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
@yield('custom_js')
</body>
</html>
