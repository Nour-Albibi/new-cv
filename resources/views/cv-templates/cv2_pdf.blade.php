<!DOCTYPE html>
<html lang="en" class="direction-ltr">
<head>
    <title>{{__('CV')}}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('cv-templates/cv2/css/cv2_pdf.css')}}" defer/>
    <!--Custom CSS-->
    <style>
        .Home{
            background-color: {{$cv->template_color ?? "#0187de"}}  !important;
        }
        .inner_contact_area{
            background-color: {{$cv->template_color ?? "#0187de"}}  !important;
        }
        .col2{
            border-left:3px solid {{$cv->template_color ?? "#0187de"}}  !important;
        }
        h5.section-title{
            color: {{$cv->template_color ?? "#0187de"}}  !important;
        }
    </style>
</head>
<body>
@php($cv_lang=$cv->language)
<div class="Home">
    <div class="inner_home">
        <header>
            <div class="inner_header display-table header_table">
                <div class="table-cell header_info">
                    <h1 class="name">
                        @if($cv_lang=="en")
                            {{$cv->first_name.' '.$cv->surename}}
                        @else
                            {{$cv->first_name_ar.' '.$cv->surename_ar}}
                        @endif
                    </h1>
                    @if(!empty($cv->{"summary_content_".$cv_lang}))
                        <p class="summary">
                            {!! $cv->{"summary_content_".$cv_lang} !!}
                        </p>
                    @endif
                </div>
                <div class="table-cell">
                    <div class="fr">
                        @if(!empty($cv->image))
                            <img class="personal_image" src="{{asset('files/uploads/'.$cv->image)}}" width="116"
                                 height="116"
                                 loading="lazy"/>
                        @endif
                    </div>
                </div>
            </div>
        </header>
        <div class="contact_area mt-40">
            <div class="inner_contact_area">
                <div class="display-table contact_table">
                    <div class="table-cell" style="width:38%;">
                        <div class="display-grid" style="">
                            @if(!empty($cv->email))
                                <div class="position_relative">
                                    <div class="iconSvg">
                                        <svg viewBox="0 0 42 42">
                                            <rect x="0" y="0" height="42" width="42"></rect>
                                            <path transform="translate(5,5)"
                                                  d="M32 6c0-1.106-.894-2-2-2H2C.894 4 0 4.894 0 6l16 13L32 6z"></path>
                                            <path transform="translate(5,5)"
                                                  d="M0 9v17c0 1.106.894 2 2 2h28c1.106 0 2-.894 2-2V8.968L16 22 0 9z"></path>
                                        </svg>
                                    </div>
                                    <p class="fl ml-5">{{$cv->email}}</p>
                                </div>
                            @endif
                            @if(!empty($cv->phone))
                                <div class="position_relative mt-5">
                                    <div class="iconSvg">
                                        <svg viewBox="0 0 42 42">
                                            <rect x="0" y="0" height="42" width="42"></rect>
                                            <path transform="translate(5,5)"
                                                  d="M6.067.655L1.328 5.39C-.696 7.413.196 9.679.196 9.679c2.156 4.733 5.134 9.182 9.03 13.076 3.898 3.893 8.35 6.87 13.087 9.024 0 0 2.195.964 4.293-1.132l4.739-4.736a2.229 2.229 0 0 0 0-3.156l-4.74-4.736a2.233 2.233 0 0 0-3.159 0l-2.665 2.664c-1.837-1.237-3.607-2.619-5.233-4.242-1.627-1.623-3.005-3.391-4.245-5.229l2.665-2.665a2.229 2.229 0 0 0 0-3.157L9.23.655a2.236 2.236 0 0 0-3.162 0z"></path>
                                        </svg>
                                    </div>
                                    <p class="fl ml-5">{{$cv->phone}}</p>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="table-cell"
                         style="width:150px;border-left:1px solid #6cc1fa;border-right:1px solid #6cc1fa"></div>
                    <div class="table-cell" style="">
                        @if(!empty($cv->{"address_".$cv_lang }))
                            <div class="position_relative ml-5">
                                <div class="iconSvg">
                                    <svg viewBox="0 0 42 42">
                                        <rect x="0" y="0" height="42" width="42"></rect>
                                        <path transform="translate(5,5)"
                                              d="M16 0C8.772 0 2.912 5.86 2.912 13.088 2.912 20.428 9.276 25.27 16 32c6.724-6.732 13.088-11.572 13.088-18.912C29.088 5.86 23.228 0 16 0zm0 22.288c-5.302 0-9.602-4.298-9.602-9.602 0-5.302 4.298-9.602 9.602-9.602 5.302 0 9.602 4.298 9.602 9.602s-4.3 9.602-9.602 9.602z"></path>
                                    </svg>
                                </div>
                                <p class="fl ml-5" style="max-width:114px;">
                                    {{$cv->{"address_".$cv_lang } }}
                                </p>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="inner_content width100">
            <div class="" style="display:table">
                <div class="col1" style="display:table-cell">
                    @if(count($cv->customer_cv_work_history))
                        <div class="experience-section section section-row">
                            <div class="col">
                                <h5 class="section-title text-left">{{__('EXPERIENCE')}}</h5>
                            </div>
                            <div class="col">
                                @foreach($cv->customer_cv_work_history as $work)
                                    <div class="section-description mt-15 experience-item">
                                        <p>{{ date("m-Y",strtotime($work->start_date))}} {{__('to')}} {{ date("m-Y",strtotime($work->end_date))}}</p>
                                        <p class="strong"
                                           style="max-width:285px">{{$work->{"job_title_".$cv_lang} }}</p>
                                        <p class="strong">{{$work->{"employeer_".$cv_lang} }}</p>
                                        <div class="description_area">
                                            {!! $work->{"experience_description_".$lang } !!}
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if(count($cv->customer_cv_course))
                        <div class="education-section section section-row mt-30">
                            <div class="col">
                                <h5 class="section-title text-left">{{__('Courses')}}</h5>
                            </div>
                            <div class="col">
                                @foreach($cv->customer_cv_course as $course)
                                    <div style="max-width:300px">
                                        <div class="section-description mt-15 education-item">
                                            <div style="display: flex">
                                                <p class="strong">{{__('Course Name: ')}} </p>
                                                <p>{{$course->{"course_name_".$cv_lang} }},
                                                    {{ date("m-Y",strtotime($course->start_date))}}
                                                    - {{date("m-Y",strtotime($course->end_date))}}
                                                </p>
                                            </div>
                                            <div style="display: flex">
                                                <p class="strong">{{__('Trainer: ')}}{{$course->{"trainer_".$cv_lang} }}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                </div>
                @endif
                <div class="col2" style="display:table-cell">
                    @if(count($cv->customer_cv_project))
                        <div class="experience-section section section-row">
                            <div class="col">
                                <h5 class="section-title text-left">{{__('Projects')}}</h5>
                            </div>
                            <div class="col">
                                @foreach($cv->customer_cv_project as $project)
                                    <div class="section-description mt-15 experience-item">
                                        <div
                                            style="display:flex;margin-bottom: 4px;">
                                            <p class="strong" style="max-width:285px">{{__("Project Name")}}
                                                :{{$project->{"project_name_".$cv_lang} }}</p>
                                            <p class="strong">@if(!empty($project->start_date)){{ date("m-Y",strtotime($project->start_date))}}  @endif
                                                @if(!empty($project->end_date)) {{__('to')}} {{date("m-Y",strtotime($project->end_date))}} @endif</p>
                                        </div>
                                        <p>{{$project->{"description_".$cv_lang} }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                    @if(!empty($cv->{"skills_content_".$cv_lang}))
                        <div class="education-section section section-row personal-info-section">
                            <div class="col">
                                <h5 class="section-title text-left">{{__('Skills')}}</h5>
                            </div>
                            <div class="col">
                                <div class="personal-info-description  mt-10">
                                    <div class="skills_area">
                                        {!! $cv->{"skills_content_".$cv_lang} !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @if(count($cv->customer_cv_education))
                        <div class="education-section section section-row mt-30">
                            <div class="col">
                                <h5 class="section-title text-left">{{__('EDUCATION')}}</h5>
                            </div>
                            <div class="col">
                                @foreach($cv->customer_cv_education as $edu)
                                    <div class="section-description mt-15 education-item">
                                        <div style="display: flex">
                                            <p class="strong">BA (Hons) : </p>
                                            <p>{{$edu->{"field_study_".$cv_lang} }},
                                                {{ date("m-Y",strtotime($edu->start_date))}}
                                                - {{date("m-Y",strtotime($edu->end_date))}}
                                            </p>
                                        </div>
                                        <div style="display: flex">
                                            <p class="strong">{{$edu->{"institution_name_".$cv_lang} }}</p>
                                            <p>- {{$edu->{"city_".$cv_lang} }}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
