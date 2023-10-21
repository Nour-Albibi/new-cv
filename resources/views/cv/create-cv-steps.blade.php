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
    <style>
        .section-tab {
            display: none;
            backdrop-filter: blur(7px);
            box-shadow: 0 10px 25px 0 rgba(0, 0, 0, 0.1);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            padding: 50px 50px 50px 50px;
            border-radius: 5px 5px 5px 5px;
        }

        .cv-container {
            max-width: 1400px;
            display: flex;
            margin-right: auto;
            margin-left: auto;
            position: relative;
        }

        .cv-container .flex-wrap {
            position: relative;
            width: 100%;
            flex-wrap: wrap;
            align-content: center;
            align-items: center;
        }

        .trans-container {
            transition: background .3s, border .3s, border-radius .3s, box-shadow .3s, transform var(--e-transform-transition-duration, .4s);
        }

        .trans-container.widg-container {
            margin: 36px 0 -7px 0;
            padding: 20px 0 20px 0;
        }

        .elementor-headline-dynamic-text {
            color: var(--dynamic-text-color, #024A53);
        }

        .text-center {
            text-align: center !important;
        }

        .width100 {
            width: 100%
        }

        .mb-15 {
            margin-bottom: 15px;
        }

        .cv-wizard-card {
            box-shadow: 0 10px 25px 0 rgba(0, 0, 0, 0.1);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 0;
            margin-bottom: -200px;
            padding: 50px 50px 50px 50px;
            z-index: 2;
            background-color: var(--e-global-color-fdf12ae);
            backdrop-filter: blur(7px);
            border-radius: 5px 5px 5px 5px;
        }

        .cv-steps-row {
            display: flex;
            margin-right: auto;
            margin-left: auto;
            position: relative;
            justify-content: flex-start;
            align-items: center;
        }

        .cv-step-box {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            flex-wrap: wrap;
        }

        .cv-step-num {
            /*padding: 5px 02px 5px 2px;*/
            background-color: var(--e-global-color-50b2a21);
            border-radius: 5px 5px 5px 5px;
            box-shadow: 0px 10px 25px 0px rgba(0, 0, 0, 0.1);
            padding-left: 8px;
            padding-right: 8px;
            padding-top: 3px;
            padding-bottom: 2px;
        }

        .cv-step-num span {
            color: #024A53;
            font-size: 1.5rem;
            font-weight: 500;
        }
        .cv-step-num.active{
            background: #024851;
        }
        .cv-step-num.active span{
            color: #fff;
        }
        .cv-step-title {
            color: var(--e-global-color-accent);
        }
        .cv-section-tabs{
            background-color: transparent;
            background-image: radial-gradient(at top right, #D8F0F240 10%, var(--e-global-color-6b0ce64) 35%);
            transition: background 0.3s, border 0.3s, border-radius 0.3s, box-shadow 0.3s;
            margin-top: 121px;
            margin-bottom: 0px;
            padding: 100px 50px 100px 50px;
        }
        .cv-footer-wizard{
            display:flex;
            justify-content: space-between;
            align-items: center;
        }
        .direction-rtl{
            direction:rtl;
        }
        .next-btn{
            background-color: transparent;
            background-image: linear-gradient(180deg, #024851 0%, #024851 100%);
            border-radius: 5px 5px 5px 5px;
            padding: 16px 35px 16px 35px;
        }
        .back-btn{
            background-color: transparent;
            background-image: linear-gradient(180deg, #5F5F5F 0%, #646464 100%);
        }
        .back-btn:hover{
            background-color: transparent;
            background-image: linear-gradient(180deg, #024851 0%, #025F6B 100%);
        }
        .cv-btn{
            cursor:pointer;
        }
        .mt-15{
            margin-top:15px;
        }
        .invalid{
            border:1px solid red;
        }
    </style>
@endsection
@section('main_content')
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
                        <div class="active cv-step-num" num="0"><span>1</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('CV heading')}}</h6></div>
                    </div>
                    <div num="1"  step_title="{{__('Work history')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="cv-step-num" num="1"><span>2</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Work history')}}</h6></div>
                    </div>
                    <div num="2" step_title="{{__('Projects')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="cv-step-num" num="2"><span>3</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Projects')}}</h6></div>
                    </div>
                    <div num="3"  step_title="{{__('Education')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="cv-step-num" num="3"><span>4</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Education')}}</h6></div>
                    </div>
                    <div num="4" step_title="{{__('Training Courses')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="cv-step-num" num="4"><span>5</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Training Courses')}}</h6></div>
                    </div>
                    <div num="5" step_title="{{__('Skills')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="cv-step-num" num="5"><span>6</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Skills')}}</h6></div>
                    </div>
                    <div num="6" step_title="{{__('Professional summary')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="cv-step-num"  num="6"><span>7</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Professional summary')}}</h6></div>
                    </div>
                    <div num="7" step_title="{{__('Languages')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="cv-step-num" num="7"><span>8</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Languages')}}</h6></div>
                    </div>
                    <div num="8" step_title="{{__('Finalise')}}"
                        class="cv-step-box elementor-column elementor-col-11 elementor-inner-column elementor-element elementor-element-62b5156f exad-glass-effect-no exad-sticky-section-no">
                        <div class="cv-step-num" num="8"><span>9</span></div>
                        <div class="cv-step-title text-center"><h6>{{__('Finalise')}}</h6></div>
                    </div>
                </div>
            </div>
        </div>
        <section class="cv-section-tabs elementor-section elementor-top-section elementor-element elementor-element-25d6856b elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no">
            <div class="elementor-background-overlay"></div>
{{--            <input type="hidden" name="item_hash" value="{{$cvItem->get('hash')}}"/>--}}
            <div class="cv-container">
                {{--Step 1 Personal Information--}}
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

@endsection
@section('custom_js')
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=62e3f93cf0ce683fcdd5ff7d" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script id="wpforms-elementor-js-extra">var wpformsElementorVars = {
            "captcha_provider": "recaptcha",
            "recaptcha_type": "v2"
        };</script>
    <script src="{{asset('assets/plugins/wpforms/assets/js/integrations/elementor/frontend.min.js?ver=1.6.7')}}"
            id="wpforms-elementor-js"></script>
    <script src="{{asset('assets/plugins/wpforms/pro/assets/js/vendor/jquery.intl-tel-input.min.js?ver=17.0.5')}}"
            id="wpforms-smart-phone-field-js"></script>
    <script id="wpforms-dropzone-js-extra">var wpforms_file_upload = {
            "url": "https:\/\/projects.datatime4it.com\/chtml\/wp-admin\/admin-ajax.php",
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
    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        var current_workExperience=1;
        var current_project=1;
        var button_indecator=0;
        var current_edu=1;
        var current_language=1;
        showTab(currentTab); // Display the current tab
        var main_path="http://localhost/cv/public/";
        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("section-tab");
            x[n].style.display = "block";
            current_step_title=$('.cv-step-box[num='+n+']').attr('step_title');
            $('#step_head_title').html(current_step_title);
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                $('.cv-footer-wizard').addClass('direction-rtl');
                document.getElementById("prevBtn").style.display = "none";
            } else {
                $('.cv-footer-wizard').removeClass('direction-rtl');
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
            } else {
                next_step_title=$('.cv-step-box[num='+(n+1)+']').attr('step_title');
                document.getElementById("nextBtn").innerHTML = "Next: "+next_step_title;
            }
            //... and run a function that will display the correct step indicator:
            //fixStepIndicator(n)
        }
        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("section-tab");
            // Exit the function if any field in the current tab is invalid:
            if (n==1 && !validateForm(n)) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted:
                // document.getElementById("regForm").submit();
                return false;
            }
            if(n==-1) $('.cv-step-num[num='+(currentTab+1)+']').removeClass('active');
            $('.cv-step-num[num='+currentTab+']').addClass('active');
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }
        function validateForm(n) {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("section-tab");
            y = x[currentTab].getElementsByClassName("input_required");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                    // add an "invalid" class to the field:
                    y[i].className += " invalid";
                    // and set the current valid status to false
                    valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
               return storeCVData(currentTab);
             //   document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            // return valid; // return the valid status
        }
        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class on the current step:
            x[n].className += " active";
        }
        function getFormBasedOnStep(step_num){
            if(step_num===0){
              return document.getElementById('cv_heading_form');
            }
            if(step_num===1){
                return document.getElementById('work_history_form');
            }
            if(step_num===2){
                return document.getElementById('project_form');
            }
            if(step_num===3){
                return document.getElementById('education_form');
            }
            if(step_num===4){
                return document.getElementById('courses_form');
            }
            if(step_num===5){
                return document.getElementById('skills_form');
            }
            if(step_num===6){
                return document.getElementById('summary_form');
            }
            if(step_num===7){
                return document.getElementById('languages_form');
            }
        }
        function storeCVData(step_num){
            var form=getFormBasedOnStep(step_num);
            var valid =true;
            $.ajax({
                method: "post",
                url: main_path + "cv-builder/saveCV?step=" + step_num,
                data: new FormData(form),
                contentType: false,
                cache: false,
                processData:false,
                success: function (data) {
                    console.log(data);
                },
                error: function (data) {
                    console.log(data);
                    valid=false;
                }
            });
            return valid;
        }
        function AddWorkExperience(){
            current_workExperience++;
            $.post(main_path+'cv-builder/AddNewWorkHistory', {current_workExperience:current_workExperience}, function (data) {
                $('#work_history_container').append(data);
            });
        }
        function AddProject(){
            current_project++;
            $.post(main_path+'cv-builder/AddProject', {current_project:current_project}, function (data) {
                $('#project_section_container').append(data);
            });
        }
        function AddEducation(){
            current_edu++;
            $.post(main_path+'cv-builder/AddEducation', {current_edu:current_edu}, function (data) {
                $('#education_section_container').append(data);
            });
        }
        function AddCourse(){
            current_course++;
            $.post(main_path+'cv-builder/AddCourse', {current_course:current_course}, function (data) {
                $('#course_contianer_section').append(data);
            });
        }
        function AddLanguage(){
            current_language++;
            $.post(main_path+'cv-builder/AddLanguage', {current_language:current_language}, function (data) {
                $('#languages_section').append(data);
            });
        }
    </script>

@endsection
