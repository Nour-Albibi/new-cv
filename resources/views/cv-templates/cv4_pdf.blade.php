<!DOCTYPE html>
<html lang="en" class="direction-ltr">
<head>
    <title>{{__('CV')}}</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
{{--    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700&display=swap" rel="stylesheet">--}}
    <link href="{{asset('cv-templates/css/cv4_pdf.css')}}" rel="stylesheet"/>
    <!--Custom CSS-->
    <style>
        .header {
            background-color: {{$cv->template_color ?? "#009acc"}}  !important;
        }

        h5.section-title {
            color: {{$cv->template_color ?? "#496267"}}  !important;
        }
        .bordered {
            border-bottom: 4px solid {{$cv->template_color ?? "#496267"}};
        }
    </style>
</head>
<body>
<div class="Home">
    <div class="row">
        <div class="header">
            <div class="main-title pt-50"><h3>
                    @if($lang=="en")
                        {{$cv->first_name.' '.$cv->surename}}
                    @else
                        {{$cv->first_name_ar.' '.$cv->surename_ar}}
                    @endif
                </h3></div>
            <div class="row contact_info" style="text-align:center">
                <center>
                    <ul class="contact_info_list " >
                        @if(!empty($cv->{"address_".$lang }))
                            <li class="address">{{$cv->{"address_".$lang } }}</li>
                        @endif
                        @if(!empty($cv->phone))
                            <li class="phone">{{$cv->phone}}</li>
                        @endif
                        @if(!empty($cv->email))
                            <li class="email">{{$cv->email}}</li>
                        @endif
                    </ul>
                </center>
            </div>
        </div>
        <div class="col-main">
            <div class="space-30"></div>
            @if(!empty($cv->{"summary_content_".$lang}))
                <div class="space-30 bordered"></div>
                <div class="summery-section section section-row">
                    <div class="col">
                        <h5 class="section-title text-left">{{__('PROFESSIONAL SUMMARY')}}</h5>
                    </div>
                    <div class="col">
                        <div class="section-description mt-15">
                            <p>{!! $cv->{"summary_content_".$lang} !!}
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            @if(count($cv->customer_cv_work_history))
                <div class="space-30 bordered"></div>
                <div class="experience-section section section-row">
                    <div class="col">
                        <h5 class="section-title text-left">{{__('EXPERIENCE')}}</h5>
                    </div>
                    <div class="col">
                        @foreach($cv->customer_cv_work_history as $work)
                            <div class="section-description mt-15 experience-item">
                                <p class="strong" style="max-width:285px">{{$work->{"job_title_".$lang} }}
                                    {{ date("m-Y",strtotime($work->start_date))}} {{__('to')}} {{ date("m-Y",strtotime($work->end_date))}}
                                </p>
                                <p class="strong">{{$work->{"employeer_".$lang} }}</p>
                                {!! $work->{"experience_description_".$lang } !!}
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            @if(count($cv->customer_cv_project))
                <div class="space-30 bordered"></div>
                <div class="experience-section section section-row">
                    <div class="col">
                        <h5 class="section-title text-left">{{__('Projects')}}</h5>
                    </div>
                    <div class="col">
                        @foreach($cv->customer_cv_project as $project)
                            <div class="section-description mt-15 experience-item">
                                <p class="strong" style="max-width:285px">{{__("Project Name")}}
                                    :{{$project->{"project_name_".$lang} }}
                                </p>
                                <p class="strong">
                                    @if(!empty($project->start_date)){{ date("m-Y",strtotime($project->start_date))}}  @endif
                                    @if(!empty($project->end_date)) {{__('to')}} {{date("m-Y",strtotime($project->end_date))}} @endif
                                </p>
                                <p>{{$project->{"description_".$lang} }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            @if(count($cv->customer_cv_education))
                <div class="space-30 bordered"></div>
                <div class="education-section section section-row">
                    <div class="col">
                        <h5 class="section-title text-left">{{__('EDUCATION')}}</h5>
                    </div>
                    <div class="col">
                        @foreach($cv->customer_cv_education as $edu)
                            <div class="section-description mt-15 education-item">
                                <p class="strong">{{__('Field Of Study')}} : {{$edu->{"field_study_".$lang} }},
                                    @if(!empty($edu->start_date))
                                        {{ date("m-Y",strtotime($edu->start_date))}}
                                        -
                                    @endif
                                    @if(!empty($edu->end_date))
                                        {{date("m-Y",strtotime($edu->end_date))}}
                                    @endif
                                    @if(!empty($edu->current))
                                        {{__(' current')}}
                                    @endif</p>
                                <p class="strong">{{$edu->{"institution_name_".$lang} }}
                                    - {{$edu->{"city_".$lang} }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            @if(count($cv->customer_cv_course))
                <div class="space-30 bordered"></div>
                <div class="education-section section section-row">
                    <div class="col">
                        <h5 class="section-title text-left">{{__('Courses')}}</h5>
                    </div>
                    <div class="col">
                        @foreach($cv->customer_cv_course as $course)
                            <div class="section-description mt-15 education-item">
                                <p class="strong">{{__('Course Name: ')}} </p>
                                <p>{{$course->{"course_name_".$lang} }},
                                    @if(!empty($course->start_date))
                                        {{ date("m-Y",strtotime($course->start_date))}}
                                    @endif
                                    @if(!empty($course->end_date))
                                        - {{date("m-Y",strtotime($course->end_date))}}
                                    @endif
                                </p>
                                <p class="strong">{{__('Trainer: ')}}{{$course->{"trainer_".$lang} }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            @if(!empty($cv->{"skills_content_".$lang}))
                <div class="space-30 bordered"></div>
                <div class="education-section section section-row">
                    <div class="col">
                        <h5 class="section-title text-left">{{__('SKILLS')}}</h5>
                    </div>
                    <div class="col">
                        <div class="section-description mt-15 education-item">
                            <p>{!! $cv->{"skills_content_".$lang} !!} </p>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
</body>
</html>
