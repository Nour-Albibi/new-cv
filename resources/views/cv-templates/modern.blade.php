<!DOCTYPE html>
<html lang="en" class="direction-ltr">
<head>
    <title>{{__('CV')}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('cv-templates/css/modern.css')}}" rel="stylesheet"/>
    <!--Custom CSS-->
</head>
<body>
<div class="Home">
    <div class="row">
        <div class="col-personal">
            @if(!empty($cv->image))
                <img class="personal-image" src="{{asset('uploads/'.$cv->image)}}" width="168" height="168"
                     loading="lazy"/>
            @endif
            <div class="space-49"></div>
            <div class="personal-info-section">
                <div class="personal-info-title">{{__('CONTACT')}}</div>
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
                    </ul>
                </div>
            </div>
            @if(count($cv->customer_cv_skill))
                <div class="space-41"></div>
                <div class="personal-info-section">
                    <div class="personal-info-title">{{__('SKILLS')}}</div>
                    <div class="personal-info-description mt-10">
                        <ul class="skills-list">
                            @foreach($cv->customer_cv_skill as $skill)
                                <li>{{$skill->{"content_".$lang} }}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            @endif
            @if(count($cv->customer_cv_language))
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
                                            class="beforecolonspace"> </span><span dependency="FRFM">: </span></span>
                                    <span class="flt-right" id="FIELD_RATG1"></span>
                                </div>
                                <div class="rating-bar" dependency="RATV">
                                    <div class="inner-rating" id="FIELD_RATV1" type="width" style="width: {{getLanguageLevel($language->{"level_".$lang})}}%;"></div>
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
            @endif
        </div>
        <div class="col-main">
            <div class="main-title">
                @if($lang=="en")
                    {{$cv->first_name.' '.$cv->surename}}
                @else
                    {{$cv->first_name_ar.' '.$cv->surename_ar}}
                @endif
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="458" height="8" viewBox="0 0 458 8" fill="none">
                <path d="M0.732506 3.87695H457.931" stroke="black" stroke-width="6.66665" stroke-miterlimit="10"/>
            </svg>
            <div class="space-45"></div>
            <div class="objective-section section">
                <h3 class="section-title text-left">{{__('OBJECTIVE')}}</h3>
                <div class="section-description mt-7">
                    <p>To find a fulfilling position where I can apply my skills and knowledge. </p>
                </div>
            </div>
            @if(!empty($cv->customer_cv_professional_summary()))
                <div class="space-45"></div>
                <div class="summery-section section">
                    <h3 class="section-title text-left">{{__('PROFESSIONAL SUMMARY')}}</h3>
                    <div class="section-description mt-15">
                        <p>{!! $cv->customer_cv_professional_summary()->{"content_".$lang} !!}</p>
                    </div>
                </div>
            @endif
            @if(count($cv->customer_cv_work_history))
                <div class="space-45"></div>
                <div class="experience-section section">
                    <h3 class="section-title text-left">{{__('EXPERIENCE')}}</h3>
                    @foreach($cv->customer_cv_work_history as $work)
                        <div class="section-description mt-15 experience-item">
                            <div style="display:flex;/*justify-content: space-between;*/ margin-bottom: 4px;">
                                <p class="strong" style="max-width:285px">{{$work->{"job_title_".$lang} }}</p>
                                <p class="strong">09/2015 to 02/2019</p>
                            </div>
                            <p class="strong">{{$work->{"employeer_".$lang} }}</p>
                            {{--                    <p>{!! $work->{"experience_description_".$lang } !!}</p>--}}
                            <ul class="work-duties mt-16 main-list">
                                <li>Led operations involved in running the brand including Marketing,
                                    IT, HR/training, development/construction, property and P&L for 200
                                    store locations.
                                </li>
                                <li>Oversaw operations for all regional company and franchise locations.</li>
                                <li>
                                    Assessed profitability of existing company processes to determine
                                    optimum organisational structure for maximum revenue growth.
                                </li>
                            </ul>
                        </div>
                    @endforeach
                </div>
            @endif
            @if(count($cv->customer_cv_project))
                <div class="space-45"></div>
                <div class="education-section section">
                    <h3 class="section-title text-left">{{__('Projects')}}</h3>
                    @foreach($cv->customer_cv_project as $project)
                        <div class="section-description mt-15 education-item">
                            <div style="display:flex;/*justify-content: space-between;*/margin-bottom: 4px;">
                                <p class="strong" style="max-width:285px">{{__("Project Name")}}
                                    :{{$project->{"project_name_".$lang} }}</p>
                                <p class="strong">@if(!empty($project->start_date)){{ date("m-Y",strtotime($project->start_date))}}  @endif
                                    @if(!empty($project->end_date)) {{__('to')}} {{date("m-Y",strtotime($project->end_date))}} @endif</p>
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
                            <div style="display: flex">
                                <p class="strong">BA (Hons) : </p>
                                <p>{{$edu->{"field_study_".$lang} }},
                                    {{ date("m-Y",strtotime($edu->start_date))}}
                                    - {{date("m-Y",strtotime($edu->end_date))}}
                                </p>
                            </div>
                            <div style="display: flex">
                                <p class="strong">{{$edu->{"institution_name_".$lang} }}</p>
                                <p>- {{$edu->{"city_".$lang} }}</p>
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
                                    {{ date("m-Y",strtotime($course->start_date))}}
                                    - {{date("m-Y",strtotime($course->end_date))}}
                                </p>
                            </div>
                            <div style="display: flex">
                                <p class="strong">{{__('Trainer: ')}}{{$course->{"trainer_".$lang} }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
</body>
</html>
