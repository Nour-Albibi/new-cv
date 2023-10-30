@extends('layouts.app')
@section('seo_section')
    <meta name="description" content="">
    <meta name="keywords" content="">
@stop
@section('custom_css')
    <link rel="stylesheet" id="elementor-post-293-css"
          href="{{asset('assets/uploads/elementor/css/post-293.css?ver=1696740455')}}" media="all" defer>
    <link rel="stylesheet" id="elementor-post-23-css"
          href="{{asset('assets/uploads/elementor/css/post-23.css?ver=1696667947')}}" media="all" defer>
    <link rel="stylesheet" id="elementor-post-55-css"
          href="{{asset('assets/uploads/elementor/css/post-55.css?ver=1695921314')}}" media="all" defer>
    <link rel="stylesheet" href="{{asset('assets/plugins/elementor-pro/assets/css/widget-animated-headline.min.css')}}"
          defer>
    <link rel="stylesheet" id="elementor-post-380-css"
          href="{{asset('assets/uploads/elementor/css/post-380.css?ver=1696622572')}}"
          media="all" defer>
    <link rel="stylesheet" id="elementor-post-23-css"
          href="{{asset('assets/uploads/elementor/css/post-23.css?ver=1696667947')}}"
          media="all" defer>
    <link rel="stylesheet" id="elementor-post-55-css"
          href="{{asset('assets/uploads/elementor/css/post-55.css?ver=1695921314')}}"
          media="all" defer>
    <link rel="stylesheet" href="{{asset('assets/css/cv.css')}}" defer/>
    <link rel="stylesheet" id="wpforms-smart-phone-field-css"
          href="{{asset('assets/plugins/wpforms/pro/assets/css/vendor/intl-tel-input.min.css?ver=17.0.5')}}"
          media="all">
    <link rel="stylesheet" id="wpforms-full-css"
          href="{{asset('assets/plugins/wpforms/assets/css/wpforms-full.min.css?ver=1.6.7')}}"
          media="all">
    <link rel="stylesheet" id="wpforms-dropzone-css"
          href="{{asset('assets/plugins/wpforms/pro/assets/css/dropzone.min.css?ver=5.7.2')}}"
          media="all">
    <link rel="stylesheet" href="{{asset('assets/uploads/elementor/css/post-36.css?ver=1695906899')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/DragAndDropUploadFile.css')}}"/>
    <script>(function(e,t,n){var r=e.querySelectorAll("html")[0];r.className=r.className.replace(/(^|\s)no-js(\s|$)/,"$1js$2")})(document,window,0);</script>
@endsection
@section('main_content')
    <input type="hidden" name="customer" value="{{auth()->guard('customer')->user()->id ?? ''}}"/>
    <div data-elementor-type="wp-page" data-elementor-id="380" class="elementor elementor-380"
         data-elementor-post-type="page">
        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                 class="elementor-section elementor-top-section elementor-element elementor-element-331b8a80 elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                 data-id="331b8a80" data-element_type="section"
                 data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="cv-container">
                <div class="flex-wrap">
                    <div class="trans-container widg-container">
                        <h2 class="elementor-headline text-center">
                        <span class="elementor-headline-dynamic-wrapper elementor-headline-text-wrapper">
                            <span
                                class="elementor-headline-dynamic-text elementor-headline-text-active" id="step_head_title">CV heading</span>
                        </span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="mb-15 width100"></div>
        </section>
        <div class="cv-container">
            <div class="cv-wizard-card width100 fadeIn animated">
                <div class="row cv-steps-row">
                    <div num="0" step_title="{{__('CV heading')}}"
                        class=" cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="@if(session('current_step_num')>=0) active @endif cv-step-num" num="0"><span>1</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('CV heading')}}</h6></div>
                    </div>
                    <div num="1"  step_title="{{__('Work history')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="@if(session('current_step_num')>=1) active @endif cv-step-num" num="1"><span>2</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Work history')}}</h6></div>
                    </div>
                    <div num="2" step_title="{{__('Projects')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="@if(session('current_step_num')>=2) active @endif cv-step-num" num="2"><span>3</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Projects')}}</h6></div>
                    </div>
                    <div num="3"  step_title="{{__('Education')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="@if(session('current_step_num')>=3) active @endif cv-step-num" num="3"><span>4</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Education')}}</h6></div>
                    </div>
                    <div num="4" step_title="{{__('Training Courses')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="@if(session('current_step_num')>=4) active @endif cv-step-num" num="4"><span>5</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Training Courses')}}</h6></div>
                    </div>
                    <div num="5" step_title="{{__('Skills')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="@if(session('current_step_num')>=5) active @endif cv-step-num" num="5"><span>6</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Skills')}}</h6></div>
                    </div>
                    <div num="6" step_title="{{__('Professional summary')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="@if(session('current_step_num')>=6) active @endif cv-step-num"  num="6"><span>7</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Professional summary')}}</h6></div>
                    </div>
                    <div num="7" step_title="{{__('Languages')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="@if(session('current_step_num')>=7) active @endif cv-step-num" num="7"><span>8</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Languages')}}</h6></div>
                    </div>
                    <div num="8" step_title="{{__('Finalise')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="cv-step-num @if(session('current_step_num')>=8) active @endif" num="8"><span>9</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Finalise')}}</h6></div>
                    </div>
                </div>
            </div>
        </div>
        <section class="cv-section-tabs elementor-section elementor-top-section elementor-element elementor-element-25d6856b elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no">
            <div class="elementor-background-overlay"></div>
            <div class="cv-container">
                @include('cv.steps_sections.cv-heading')
                {{--Step 2 Work History--}}
                @include('cv.steps_sections.work-history')
                {{--Step 3 Projects--}}
                @include('cv.steps_sections.projects')
                {{--Education--}}
                @include('cv.steps_sections.education')
                {{--Training Course--}}
                @include('cv.steps_sections.courses')
                {{--Skills--}}
                @include('cv.steps_sections.skills')
                {{--Professional summary--}}
                @include('cv.steps_sections.summary')
                {{--Languages--}}
                @include('cv.steps_sections.languages')
                {{--Finalise--}}
                @include('cv.steps_sections.finalise')
            </div>
            <div class="cv-container">
                {{--Wizard Footer--}}
                <div class="row width100 cv-footer-wizard mt-15">
                    <div id="prevBtn" class="back-btn cv-btn elementor-button elementor-button-link elementor-size-sm elementor-animation-float" onclick="nextPrev(-1)">{{__('Back')}}</div>
                    <div id="nextBtn" class="next-btn cv-btn elementor-button elementor-button-link elementor-size-sm elementor-animation-float" onclick="nextPrev(1)">{{__('Next')}}</div>
                </div>
            </div>
        </section>
    </div>
@include('cv.modal')
@endsection
@section('custom_js')
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=62e3f93cf0ce683fcdd5ff7d" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script id="wp-util-js-extra">var _wpUtilSettings = {"ajax": {"url":"http://localhost/cv/public/cv-builder/uploadFile"}};</script>
    <script id="wpforms-elementor-js-extra">var wpformsElementorVars = {
            "captcha_provider": "recaptcha",
            "recaptcha_type": "v2"
        };</script>
    <script src="{{asset('assets/plugins/wpforms/assets/js/integrations/elementor/frontend.min.js?ver=1.6.7')}}"
            id="wpforms-elementor-js"></script>
    <script src="{{asset('assets/plugins/wpforms/pro/assets/js/vendor/jquery.intl-tel-input.min.js?ver=17.0.5')}}"
            id="wpforms-smart-phone-field-js"></script>
    <script id="wpforms-dropzone-js-extra">var wpforms_file_upload = {
            "url": "{{route('cv.upload')}}",
            "errors": {
                "default_error": "Something went wrong, please try again.",
                "file_not_uploaded": "This file was not uploaded.",
                "file_limit": "File limit has been reached ({fileLimit}).",
                "file_extension": "File type is not allowed.",
                "file_size": "File exceeds the max size allowed.",
                "post_max_size": "File exceeds the upload limit allowed (200 MB)."
            },
            "loading_message": "File upload is in progress. Please submit the form once uploading is completed."
        };</script>
    <script src="{{asset('assets/plugins/wpforms/pro/assets/js/vendor/dropzone.min.js?ver=5.7.2')}}"
            id="wpforms-dropzone-js"></script>
    <script src="{{asset('assets/plugins/wpforms/assets/js/wpforms.js?ver=1.6.7')}}"
            id="wpforms-js"></script>
    <script src="{{asset('assets/plugins/wpforms/pro/assets/js/wpforms-file-upload.min.js?ver=1.6.7')}}"
            id="wpforms-file-upload-js"></script>
    <script src="{{asset('wp-content/plugins/wpforms/assets/js/jquery.validate.min.js?ver=1.19.0')}}"
            id="wpforms-validation-js"></script>
    <script type="text/javascript">
        /* <![CDATA[ */
        var wpforms_settings = {
            "val_required": "This field is required.",
            "val_email": "Please enter a valid email address.",
            "val_email_suggestion": "Did you mean {suggestion}?",
            "val_email_suggestion_title": "Click to accept this suggestion.",
            "val_email_restricted": "This email address is not allowed.",
            "val_number": "Please enter a valid number.",
            "val_number_positive": "Please enter a valid positive number.",
            "val_confirm": "Field values do not match.",
            "val_checklimit": "You have exceeded the number of allowed selections: {#}.",
            "val_limit_characters": "{count} of {limit} max characters.",
            "val_limit_words": "{count} of {limit} max words.",
            "val_recaptcha_fail_msg": "Google reCAPTCHA verification failed, please try again later.",
            "val_empty_blanks": "Please fill out all blanks.",
            "uuid_cookie": "1",
            "locale": "en",
            "wpforms_plugin_url": "https:\/\/projects.datatime4it.com\/chtml\/wp-content\/plugins\/wpforms\/",
            "gdpr": "",
            "ajaxurl": "https:\/\/projects.datatime4it.com\/chtml\/wp-admin\/admin-ajax.php",
            "mailcheck_enabled": "1",
            "mailcheck_domains": [],
            "mailcheck_toplevel_domains": ["dev"],
            "is_ssl": "1",
            "currency_code": "USD",
            "currency_thousands": ",",
            "currency_decimals": "2",
            "currency_decimal": ".",
            "currency_symbol": "$",
            "currency_symbol_pos": "left",
            "val_requiredpayment": "Payment is required.",
            "val_creditcard": "Please enter a valid credit card number.",
            "val_post_max_size": "The total size of the selected files {totalSize} Mb exceeds the allowed limit {maxSize} Mb.",
            "val_time12h": "Please enter time in 12-hour AM\/PM format (eg 8:45 AM).",
            "val_time24h": "Please enter time in 24-hour format (eg 22:45).",
            "val_url": "Please enter a valid URL.",
            "val_fileextension": "File type is not allowed.",
            "val_filesize": "File exceeds max size allowed. File was not uploaded.",
            "post_max_size": "838860800",
            "val_password_strength": "A stronger password is required. Consider using upper and lower case letters, numbers, and symbols.",
            "val_phone": "Please enter a valid phone number."
        }
        /* ]]> */
    </script>
    <script>
        var currentTab = {{session('current_step_num') ?? 0}};
    </script>
    <script src="{{asset('assets/js/cv.js')}}"></script>
    <x-cv.upload_image_js></x-cv.upload_image_js>
@endsection
