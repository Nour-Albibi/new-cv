@extends('layouts.app')
@section('seo_section')
    <meta name="description" content="">
    <meta name="keywords" content="">
@stop
@section('custom2Css')
    <link rel="stylesheet" id="elementor-post-646-css"
          href="https://projects.datatime4it.com/chtml/wp-content/uploads/elementor/css/post-646.css?ver=1696706091"
          media="all">
    <link rel="stylesheet" id="elementor-post-23-css"
          href="https://projects.datatime4it.com/chtml/wp-content/uploads/elementor/css/post-23.css?ver=1696667947"
          media="all">
    <link rel="stylesheet" id="elementor-post-55-css"
          href="https://projects.datatime4it.com/chtml/wp-content/uploads/elementor/css/post-55.css?ver=1695921314"
          media="all">
    <link rel="stylesheet" id="wp-block-library-css"
          href="https://projects.datatime4it.com/chtml/wp-includes/css/dist/block-library/style.min.css?ver=6.3.1"
          media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{asset('assets/css/packages.css')}}" rel="stylesheet"/>
@stop
@section('main_content')
    <div data-elementor-type="wp-page" data-elementor-id="646" class="elementor elementor-646"
         data-elementor-post-type="page">
        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                 class="elementor-section elementor-top-section elementor-element elementor-element-9495aef elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                 data-id="9495aef" data-element_type="section"
                 data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-default">
                <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-74bbe41d exad-glass-effect-no exad-sticky-section-no"
                    data-id="74bbe41d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div
                            class="elementor-element elementor-element-234dc812 elementor-headline--style-highlight exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-animated-headline"
                            data-id="234dc812" data-element_type="widget"
                            data-settings="{&quot;highlighted_text&quot;:&quot;Finalise&quot;,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;marker&quot;:&quot;circle&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}"
                            data-widget_type="animated-headline.default">
                            <div class="elementor-widget-container">
                                <link rel="stylesheet"
                                      href="https://projects.datatime4it.com/chtml/wp-content/plugins/elementor-pro/assets/css/widget-animated-headline.min.css">
                                <h2 class="elementor-headline">
                                    <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                                        <span class="elementor-headline-dynamic-text elementor-headline-text-active">{{__('Upgrade for instant access to all features')}}
                                        </span>
                                    </span>
                                </h2>
                            </div>
                        </div>
                        <div
                            class="elementor-element elementor-element-2faf71dd exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-spacer"
                            data-id="2faf71dd" data-element_type="widget" data-widget_type="spacer.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-spacer">
                                    <div class="elementor-spacer-inner"></div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                 class="elementor-section elementor-top-section elementor-element elementor-element-4d7fd3a8 elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                 data-id="4d7fd3a8" data-element_type="section"
                 data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-no">
                <div
                    class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4b2db333 exad-glass-effect-no exad-sticky-section-no"
                    data-id="4b2db333" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <form name="package_pricing" id="package_pricing" action="{{route('subscribeToPackage')}}"
                              method="post">
                            @csrf
                            <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                     class="elementor-section elementor-inner-section elementor-element elementor-element-550d50 elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                                     data-id="550d50" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-custom">
                                    <div
                                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-fddab2a exad-glass-effect-no exad-sticky-section-no"
                                        data-id="fddab2a" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div
                                                class="elementor-element elementor-element-66221cc1 exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                                data-id="66221cc1" data-element_type="widget"
                                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <div class="demo">
                                                        <div class="container">
                                                            <div class="row">
                                                                <input type="hidden" name="package_id" value=""
                                                                       id="package_id"/>
                                                                @foreach($available_customer_packages as $pkg)
                                                                    <div class="col-md-4 col-sm-6 pacakge_box">
                                                                        <div class="pricingTable">
                                                                            <div class="pricingTable-header">
                                                                                <h3 class="title">{{$pkg->{"name_".$lang} }}</h3>
                                                                            </div>
                                                                            <div class="pricing-content">
                                                                                <div class="price-value">
                                                                                    <span
                                                                                        class="currency">{{__('SAR')}}</span>
                                                                                    <span
                                                                                        class="amount">{{$pkg->total_price}}</span>
                                                                                    <span
                                                                                        class="amount-sm">{{$pkg->cv_price}}</span>
                                                                                </div>
                                                                                <ul>
                                                                                    <li>Unlimited printing and
                                                                                        downloading
                                                                                        for {{$pkg->duration*30}}
                                                                                        days
                                                                                    </li>
                                                                                    <li>Create {{$pkg->quantity}} CVs
                                                                                        and cover
                                                                                        letters
                                                                                    </li>
                                                                                    <li>auto-renews at every 4 weeks
                                                                                    </li>
                                                                                    <li class="disable">Cancel at any
                                                                                        time
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
{{--                                                                            @if(auth()->guard('customer')->check() && auth()->guard('customer')->user()->has_active_subscription())--}}
                                                                                @if(auth()->guard('customer')->user()->has_active_subscription() && auth()->guard('customer')->user()->getActiveSubscription()->package_id==$pkg->id)
                                                                                    <div class="pricingTable-signup">
                                                                                        {{__("Package is Active now")}}
                                                                                    </div>
{{--                                                                                @endif--}}
                                                                            @else
                                                                                <div class="pricingTable-signup ">
                                                                                    <a href="javascript:void(0)"
                                                                                       class="se_package_pl"
                                                                                       onclick="selectPacakge('{{$pkg->id}}');this.innerHTML = 'SELECTED';"
                                                                                       id="se_package_pl">{{__('SELECT')}}</a>
                                                                                </div>
                                                                            @endif
                                                                        </div>
                                                                    </div>
                                                                @endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                     class="elementor-section elementor-inner-section elementor-element elementor-element-6a0550a1 elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                                     data-id="6a0550a1" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-custom">
                                    <div
                                        class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3e94363a exad-glass-effect-no exad-sticky-section-no"
                                        data-id="3e94363a" data-element_type="column">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                     class="elementor-section elementor-inner-section elementor-element elementor-element-90a5209 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                                     data-id="90a5209" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-custom">
                                    <div
                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-7512db20 exad-glass-effect-no exad-sticky-section-no"
                                        data-id="7512db20" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div
                                                class="elementor-element elementor-element-7e23c0ef elementor-align-left elementor-mobile-align-center exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-button"
                                                data-id="7e23c0ef" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                                           href="{{url('cv-builder/create')}}">
                                                        <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">{{__('Back')}}</span>
		                                                </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-34f2d8bb exad-glass-effect-no exad-sticky-section-no"
                                        data-id="34f2d8bb" data-element_type="column">
                                        <div class="elementor-widget-wrap">
                                        </div>
                                    </div>
                                    <div
                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1d8a6014 exad-glass-effect-no exad-sticky-section-no"
                                        data-id="1d8a6014" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div
                                                class="elementor-element elementor-element-20f13aed elementor-align-right elementor-mobile-align-center exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-button"
                                                data-id="20f13aed" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <button type="submit"
                                                                class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span
                                                                    class="elementor-button-text">{{__('Next')}}</span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@stop
@section('custom_js')
    {{--    <script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"--}}
    {{--            integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>--}}

    <script>
        function selectPacakge(package_id) {
            var inputF = document.getElementById("package_id");
            inputF.value = package_id;
        }
    </script>
@stop
