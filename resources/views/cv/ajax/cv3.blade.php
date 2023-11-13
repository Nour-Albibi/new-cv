<link rel="stylesheet" href="{{asset('cv-templates/cv3/css/preview_cv3.css')}}" defer/>
<style>
    :root {
        --primary1: {{$cv->template_color ?? "#496267"}}     !important;
    }
</style>
<div class="Home">
    <div class="main_row">
        <div class="header">
            <div class="text-center main-title pt-50"><h3>
                    @if($cv_lang=="en")
                        {{$cv->first_name.' '.$cv->surename}}
                    @else
                        {{$cv->first_name_ar.' '.$cv->surename_ar}}
                    @endif
                </h3>
            </div>
            @if(!empty($cv->{"address_".$cv_lang }))
                <p class="text-center">
                    {{$cv->{"address_".$cv_lang } }}
                </p>
            @endif
            <p class="text-center">
                {{$cv->phone}}, {{$cv->email}}
            </p>
        </div>
        <div class="col-main">
            @if(!empty($cv->{"summary_content_".$cv_lang}))
                <div class="space-30"></div>
                <div class="summery-section section section-row">
                    <div class="head_title">
                        <h5 class="section-title text-left">{{__('PROFESSIONAL SUMMARY')}}</h5>
                    </div>
                    <div class="section-description mt-15" style="display:inline-flex">
                        <div class="col" style="width:160px;"></div>
                        <div class="col">
                            <p>{!! $cv->{"summary_content_".$cv_lang} !!}</p>
                        </div>
                    </div>
                </div>
            @endif
            @if(count($cv->customer_cv_work_history))
                <div class="space-30 bordered"></div>
                <div class="experience-section section section-row">
                    <div class="head_title">
                        <h5 class="section-title text-left">{{__('EXPERIENCE')}}</h5>
                    </div>
                    @foreach($cv->customer_cv_work_history as $work)
                        <div class="section-description mt-15 experience-item">
                            <div class="col">
                                {{ date("m-Y",strtotime($work->start_date))}} {{__('to')}} {{ date("m-Y",strtotime($work->end_date))}}
                            </div>
                            <div class="col">
                                <p class="strong" style="max-width:285px">{{$work->{"job_title_".$cv_lang} }}</p>
                                <p class="strong">{{$work->{"employeer_".$cv_lang} }}</p>
                                {!! $work->{"experience_description_".$lang } !!}
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            @if(count($cv->customer_cv_project))
                <div class="space-30 bordered"></div>
                <div class="experience-section section section-row">
                    <div class="head_title">
                        <h5 class="section-title text-left">{{__('Projects')}}</h5>
                    </div>
                    @foreach($cv->customer_cv_project as $project)
                        <div class="section-description mt-15 experience-item">
                            <div class="col">
                                @if(!empty($project->start_date)){{ date("m-Y",strtotime($project->start_date))}}  @endif
                                @if(!empty($project->end_date)) {{__('to')}} {{date("m-Y",strtotime($project->end_date))}} @endif
                            </div>
                            <div class="col">
                                <div
                                    style="display:flex;justify-content: space-between;margin-bottom: 4px;">
                                    <p class="strong" style="max-width:285px">{{__("Project Name")}}
                                        :{{$project->{"project_name_".$cv_lang} }}</p>
                                </div>
                                <p class="strong">{{$project->{"description_".$cv_lang} }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            @if(count($cv->customer_cv_education))
                <div class="space-30"></div>
                <div class="education-section section section-row">
                    <div class="head_title">
                        <h5 class="section-title text-left">{{__('EDUCATION')}}</h5>
                    </div>
                    @foreach($cv->customer_cv_education as $edu)
                        <div class="section-description mt-15 education-item">
                            <div class="col" style="max-width:90px;">
                                {{ date("m-Y",strtotime($edu->start_date))}}
                                - {{date("m-Y",strtotime($edu->end_date))}}
                            </div>
                            <div class="col">
                                <div style="display: flex">
                                    <p class="strong">BA (Hons) : </p>
                                    <p>{{$edu->{"field_study_".$cv_lang} }}
                                    </p>
                                </div>
                                <div style="display: flex">
                                    <p class="strong">{{$edu->{"institution_name_".$cv_lang} }}</p>
                                    <p>- {{$edu->{"city_".$cv_lang} }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
            @if(!empty($cv->{"skills_content_".$cv_lang}))
                <div class="space-30 bordered"></div>
                <div class="education-section section section-row">
                    <div class="head_title">
                        <h5 class="section-title text-left">{{__('SKILLS')}}</h5>
                    </div>
                    <div class="skills_area">
                        <div class="col" style="width:90px;"></div>
                        <div class="col">
                            {!! $cv->{"skills_content_".$cv_lang} !!}
                        </div>
                    </div>
                </div>
            @endif
            @if(count($cv->customer_cv_course))
                <div class="space-30 bordered"></div>
                <div class="experience-section section section-row">
                    <div class="head_title">
                        <h5 class="section-title text-left">{{__('Courses')}}</h5>
                    </div>
                    @foreach($cv->customer_cv_course as $course)
                        <div class="section-description mt-15 experience-item">
                            <div class="col">
                                {{ date("m-Y",strtotime($course->start_date))}}
                                - {{date("m-Y",strtotime($course->end_date))}}
                            </div>
                            <div class="col">
                                <div style="display: flex">
                                    <p class="strong">{{__('Course Name: ')}} </p>
                                    <p>{{$course->{"course_name_".$cv_lang} }}</p>
                                </div>
                                <div style="display: flex">
                                    <p class="strong">{{__('Trainer: ')}}{{$course->{"trainer_".$cv_lang} }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
