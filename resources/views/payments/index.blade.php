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
    <link rel="stylesheet" id="elementor-post-36-css"
          href="https://projects.datatime4it.com/chtml/wp-content/uploads/elementor/css/post-36.css?ver=1695906899"
          media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="{{asset('assets/css/payments.css')}}" rel="stylesheet"/>
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
                                <h2 class="elementor-headline">
                                <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                                    <span class="elementor-headline-dynamic-text elementor-headline-text-active">Enter Payment Information
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
        <form name="doCheckOut" id="doCheckOut" action="{{route('payment.checkout')}}" method="post">
            @csrf
            <input type="hidden" name="package_id" value="{{$package->id}}"/>
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
                                                <div class="row">
                                                    <div class="col-md-8">
                                                        <div class="card p-3">
                                                            <h6 class="text-uppercase">Payment details</h6>
                                                            <div class="inputbox mt-3">
                                                                <input type="text" name="name_on_card" class="form-control"
                                                                                              required="required">
                                                                <span>Name on card</span>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="inputbox mt-3 mr-2">
                                                                        <input type="text" name="card_number" class="form-control" required="required">
                                                                        <i class="fa fa-credit-card"></i>
                                                                        <span>Card Number</span>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="d-flex flex-row">
                                                                        <div class="inputbox mt-3 mr-2"><input
                                                                                type="text"
                                                                                name="expiry"
                                                                                class="form-control"
                                                                                required="required">
                                                                            <span>Expiry</span></div>
                                                                        <div class="inputbox mt-3 mr-2"><input
                                                                                type="text"
                                                                                name="cvv"
                                                                                class="form-control"
                                                                                required="required">
                                                                            <span>CVV</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="mt-4 mb-4">
                                                                <h6 class="text-uppercase">Billing Address</h6>
                                                                <div class="row mt-3">
                                                                    <div class="col-md-6">
                                                                        <div class="inputbox mt-3 mr-2"><input
                                                                                type="text"
                                                                                name="address"
                                                                                class="form-control"
                                                                                required="required">
                                                                            <span>Street Address</span></div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputbox mt-3 mr-2"><input
                                                                                type="text"
                                                                                name="city"
                                                                                class="form-control"
                                                                                required="required">
                                                                            <span>City</span></div>
                                                                    </div>
                                                                </div>
                                                                <div class="row mt-2">
                                                                    <div class="col-md-6">
                                                                        <div class="inputbox mt-3 mr-2"><input
                                                                                type="text"
                                                                                name="state"
                                                                                class="form-control"
                                                                                required="required">
                                                                            <span>State/Province</span></div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="inputbox mt-3 mr-2"><input
                                                                                type="text"
                                                                                name="zip_code"
                                                                                class="form-control"
                                                                                required="required">
                                                                            <span>Zip code</span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <div class="card card-blue p-3 text-white mb-3">
                                                            <span>{{__('Review Your Order')}}</span>
                                                            <div class="d-flex flex-row align-items-end mb-3">
                                                                <h1 class="mb-0 " style="color: #fff;">{{__('SAR')}} {{$package->total_price}}</h1>
                                                                <span>{{$package->cv_price}}</span>
                                                            </div>

                                                            <span>CV Items Quantity: {{$package->quantity}}</span>
                                                            <span>Unlimited downloading, printing and emailing</span>
                                                            <div class="hightlight">
                                                                <span>Cover Letter Builder</span>
                                                            </div>
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
                                                       href="{{route('getCustomerPackagesPricing')}}">
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
                                                    <button class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                                       type="submit">
                                                        <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">{{__('Pay')}} {{__('SAR')}} {{$total}}</span>
		                                            </span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        </form>
    </div>
@stop
@section('custom_js')

@stop
