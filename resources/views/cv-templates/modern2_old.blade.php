<!DOCTYPE html>
<html lang="en" class="direction-ltr">
<head>
    <title>{{__('CV')}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('cv-templates/css/modern.css')}}" rel="stylesheet"/>
    <!--Custom CSS-->
</head>
<style>
    .col-personal{
        background-color: {{$cv->template_color ?? "#496267"}} !important;
        height:100vh !important;
    }
    .main-title{
        color:{{$cv->template_color ?? "#496267"}} !important;
    }
    .page-break {
        page-break-after: always;
    }
</style>
<body>
<div class="Home">
    <table class="width100">
        <tr class="width100">
            <td class="col-personal" style="height:100%;float: left;background-color: #496267;">
                <div class="space-49"></div>
                <div class="personal-info-title">{{__('CONTACT')}}</div>
                <table class="width100">
                    @if(!empty($cv->image))
                        <tr>
                            <td>
                                <img class="personal-image" src="{{asset('files/uploads/'.$cv->image)}}" width="168"
                                     height="168"
                                     loading="lazy"/>
                            </td>
                        </tr>
                    @endif
                    <tr>
                        <td>
                            <div class="personal-info-description mt-10">
                                <ul class="contact-list">
                                    @if(!empty($cv->{"address_".$lang }))
                                        <li><p class="strong">{{__('Address:')}} {{$cv->{"address_".$lang } }}</p></li>
                                    @endif
                                    @if(!empty($cv->phone))
                                        <li><p class="strong">{{__('Phone:')}} {{$cv->phone}}</p></li>
                                    @endif
                                    @if(!empty($cv->email))
                                        <li><p class="strong">{{__('Email:')}} {{$cv->email}}</p></li>
                                    @endif
                                    @if(!empty($cv->{"city_town_".$lang}))
                                            <li><p class="strong">{{__('Country / City:')}} {{$cv->{"country_".$lang} . ' '. $cv->{"city_town_".$lang} }}</p></li>
                                   @endif

                                    @if(!empty($cv->nationality))
                                            <li><p class="strong">{{__('Nationality:')}} {{$cv->nationality}}</p></li>
                                    @endif
                                    @if(!empty($cv->linkedlin_url))
                                            <li><p class="strong">{{__('Linkedin:')}} {{$cv->linkedlin_url}}</p></li>
                                    @endif
                                    @if(!empty($cv->website))
                                            <li><p class="strong">{{__('Website:')}} {{$cv->website}}</p></li>
                                    @endif
                                </ul>
                            </div>
                        </td>
                    </tr>
                    @if(!empty($cv->{"skills_content_".$lang}))
                        <tr>
                            <td>
                                <div class="space-41"></div>
                                <div class="personal-info-section">
                                    <div class="personal-info-title">{{__('SKILLS')}}</div>
                                    <div class="personal-info-description mt-10">
                                        {!! $cv->{"skills_content_".$lang} !!}
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endif
                    @if(count($cv->customer_cv_language))
                        <tr>
                            <td>
                                <div class="space-41"></div>
                                <div class="personal-info-section">
                                    <div class="personal-info-title">{{__('LANGUAGES')}}</div>
                                    <div class="personal-info-description">
                                        @foreach($cv->customer_cv_language as $language)
                                            <div class="singlecolumn infobarpara mt-10">
                                                <div class="field">
                                    <span class="txt-bold"
                                          id="FIELD_FRFM1">{{$language->language->{"name_".$lang } }}</span><span
                                                        class="colon"><span
                                                            class="beforecolonspace"> </span><span
                                                            dependency="FRFM">: </span></span>
                                                    <span class="flt-right" id="FIELD_RATG1"></span>
                                                </div>
                                                <div class="rating-bar" dependency="RATV">
                                                    <div class="inner-rating" id="FIELD_RATV1" type="width"
                                                         style="width: {{getLanguageLevel($language->{"level_".$lang})}}%;"></div>
                                                </div>
                                                <div class="field field-ratt">
                                                    @if(!empty($language->{"level_".$lang}))
                                                        <span id="FIELD_RATT1">{{$language->{"level_".$lang} }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endif
                </table>
            </td>
            <td class="col-main" style="width:76%;height:100%;">
                <table class="width100">
                    <tr class="width100">
                        <td class="width100">
                            <div class="main-title">
                                @if($lang=="en")
                                    {{$cv->first_name.' '.$cv->surename}}
                                @else
                                    {{$cv->first_name_ar.' '.$cv->surename_ar}}
                                @endif
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="458" height="8" viewBox="0 0 458 8"
                                 fill="none">
                                <path d="M0.732506 3.87695H457.931" stroke="black" stroke-width="6.66665"
                                      stroke-miterlimit="10"/>
                            </svg>
                            <div class="space-45"></div>
                        </td>
                    </tr>
                    @if(!empty($cv->{"summary_content_".$lang}))
                    <tr class="width100">
                        <td class="width100">
                            <div class="objective-section section">
                                <h3 class="section-title text-left">{{__('PROFESSIONAL SUMMARY')}}</h3>
                                <div class="section-description mt-7">
                                   {!! $cv->{"summary_content_".$lang} !!}
                                </div>
                            </div>
                        </td>
                    </tr>
                    @endif
                </table>
                @if(count($cv->customer_cv_work_history))
                    <div class="space-45"></div>
                    <div class="experience-section section">
                        <h3 class="section-title text-left">{{__('EXPERIENCE')}}</h3>
                        <table class="width100">
                            @foreach($cv->customer_cv_work_history as $work)
                                <tr class="width100">
                                    <td class="width100">
                                        <div class="section-description mt-15 experience-item">
                                            <div
                                                style="display:flex;/*justify-content: space-between;*/ margin-bottom: 4px;">
                                                <table class="" style=" width: 95%">
                                                    <tr class="width100">
                                                        <td>
                                                            <p class="strong"
                                                               style="max-width:285px">{{$work->{"job_title_".$lang} }}</p>
                                                        </td>
                                                        <td style="width: 50%;">
                                                            <p class="strong"
                                                               style=";text-align:center;">{{ date("m-Y",strtotime($work->start_date))}} {{__('to')}}
                                                                @if(!empty($work->end_date))
                                                                      {{date("m-Y",strtotime($work->end_date))}}
                                                                @endif
                                                                @if(!empty($work->current))
                                                                    {{__('current')}}
                                                                @endif
                                                            </p>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            {!! $work->{"experience_description_".$lang } !!}
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                @endif
                @if(count($cv->customer_cv_project))
                    <div class="space-45"></div>
                    <div class="education-section section">
                        <h3 class="section-title text-left">{{__('Projects')}}</h3>
                        @foreach($cv->customer_cv_project as $project)
                            <div class="section-description mt-15 education-item">
                                <div style="display:flex;/*justify-content: space-between;*/margin-bottom: 4px;">
                                    <table class="" style="width: 95%">
                                        <tr class="width100">
                                            <td>
                                                <p class="strong" style="max-width:285px">
                                                    {{__("Project Name")}}: {{$project->{"project_name_".$lang} }}</p>
                                            </td>
                                            <td style="width: 50%">
                                                <p class="strong"
                                                   style="text-align: center">@if(!empty($project->start_date)){{ date("m-Y",strtotime($project->start_date))}}  @endif
                                                    @if(!empty($project->end_date)) {{__('to')}} {{date("m-Y",strtotime($project->end_date))}} @endif</p>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <p class="strong">{{$project->{"description_".$lang} }}</p>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if(count($cv->customer_cv_education))
                    <div class="space-45"></div>
                    <div class="education-section section">
                        <h3 class="section-title text-left">{{__('EDUCATION')}}</h3>
                        @foreach($cv->customer_cv_education as $edu)
                            <div class="section-description mt-15 education-item">
                                <div style="display: flex;">
                                    <p><span class="strong">{{__('Field Of Study')}} : </span>
                                        {{$edu->{"field_study_".$lang} }},
                                         @if(!empty($edu->start_date))
                                        {{ date("m-Y",strtotime($edu->start_date))}}
                                        -
                                        @endif
                                         @if(!empty($edu->end_date))
                                         {{date("m-Y",strtotime($edu->end_date))}}
                                        @endif
                                         @if(!empty($edu->current))
                                             {{__(' current')}}
                                         @endif
                                    </p>
                                </div>
                                <div style="display: flex">
                                    <p><span class="strong">{{$edu->{"institution_name_".$lang} }}</span>
                                        - {{$edu->{"city_".$lang} }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
                @if(count($cv->customer_cv_course))
                    <div class="space-45"></div>
                    <div class="education-section section">
                        <h3 class="section-title text-left">{{__('Courses')}}</h3>
                        @foreach($cv->customer_cv_course as $course)
                            <div class="section-description mt-15 education-item">
                                <div style="display: flex">
                                    <p class="strong">{{__('Course Name: ')}} </p>
                                    <p>{{$course->{"course_name_".$lang} }},
                                     @if(!empty($course->start_date))
                                        {{ date("m-Y",strtotime($course->start_date))}}
                                        @endif
                                        @if(!empty($course->end_date))
                                        - {{date("m-Y",strtotime($course->end_date))}}
                                        @endif
                                    </p>
                                </div>
                                @if(!empty($course->{"trainer_".$lang}))
                                <div style="display: flex">
                                    <p class="strong">{{__('Trainer: ')}}{{$course->{"trainer_".$lang} }}</p>
                                </div>
                                    @endif
                            </div>
                        @endforeach
                    </div>
                @endif
            </td>
        </tr>
    </table>
</div>
<script src="https://code.jquery.com/jquery-3.6.3.slim.min.js"
        integrity="sha256-ZwqZIVdD3iXNyGHbSYdsmWP//UBokj2FHAxKuSBKDSo=" crossorigin="anonymous"></script>
<script>
    // objectHeight=document.getElementById('col-main').offsetHeight;
    // alert(objectHeight);
    // document.getElementById("col-personal").style.height = objectHeight+"px !important";
    $(document).ready(function(){

        // alert($('.col-main').height());
        $('.col-personal').height($('.col-main').height());
    });
</script>
</body>
</html>
