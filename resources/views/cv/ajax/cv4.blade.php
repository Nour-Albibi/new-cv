<link rel="stylesheet" href="{{asset('cv-templates/cv4/css/preview_cv4.css')}}" defer/>
<style>
    :root {
        --primary1: {{$cv->template_color ?? "#496267"}}          !important;
    }
</style>
<div class="Home">
    <div class="row" style="flex-direction: column">
        <div class="header">
            <div class="main-title pt-50"><h3>
                    @if($cv_lang=="en")
                        {{$cv->first_name.' '.$cv->surename}}
                    @else
                        {{$cv->first_name_ar.' '.$cv->surename_ar}}
                    @endif
                </h3></div>
            <div class="row contact_info">
                <ul class="contact_info_list ">
                    @if(!empty($cv->{"address_".$cv_lang }))
                        <li class="address"> {{$cv->{"address_".$cv_lang } }}</li>
                    @else
                        <li class="address">46 Roman Rd, Leeds, LS2 3ZR</li>
                    @endif
                    @if(!empty($cv->phone))
                        <li class="phone">{{$cv->phone}}</li>
                    @else
                        <li class="phone">07912 345 678</li>
                    @endif
                    @if(!empty($cv->email))
                        <li class="email">{{$cv->email}}</li>
                    @else
                        <li class="email">dom.webster@example.co.uk</li>
                    @endif
                </ul>
            </div>
        </div>
        <div class="col-main">
            <div class="space-60"></div>
            <div class="summery-section section section-row">
                <div class="col">
                    <h5 class="section-title text-left">PROFESSIONAL SUMMARY</h5>
                </div>
                <div class="col">
                    @if(!empty($cv->{"summary_content_".$cv_lang}))
                        <div class="section-description mt-15">
                            <p>Accomplished Operations executive with a successful track record
                                overseeing regional Marketing, IT, HR/training and property in
                                company and franchise operations for a large chain of restaurants.
                            </p>
                        </div>
                    @else
                        <div class="section-description mt-15">
                            <p>Accomplished Operations executive with a successful track record
                                overseeing regional Marketing, IT, HR/training and property in
                                company and franchise operations for a large chain of restaurants.
                            </p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="space-30 bordered"></div>
            <div class="experience-section section section-row">
                <div class="col">
                    <h5 class="section-title text-left">EXPERIENCE</h5>
                </div>
                <div class="col">
                    @if(count($cv->customer_cv_work_history))
                        @foreach($cv->customer_cv_work_history as $work)
                            <div class="section-description mt-15 experience-item">
                                <p class="strong"
                                   style="max-width:285px">{{$work->{"job_title_".$cv_lang} }} {{ date("m-Y",strtotime($work->start_date))}} {{__('to')}} {{ date("m-Y",strtotime($work->end_date))}}</p>
                                <p class="strong">{{$work->{"employeer_".$cv_lang} }}</p>
                                {!! $work->{"experience_description_".$lang } !!}
                            </div>
                        @endforeach
                    @else
                        <div class="section-description mt-15 experience-item">
                            <p class="strong" style="max-width:285px">Executive Vice President 09/2015 to 02/2019</p>
                            <p class="strong">Pizza Hut UK & Ireland - St Albans, Herts</p>
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
                        <div class="section-description mt-15 experience-item">
                            <p class="strong" style="max-width:285px">Senior Vice President 08/2007 to 09/2015</p>
                            <p class="strong">Café Rouge - London</p>
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
                    @endif
                </div>
            </div>
            @if(count($cv->customer_cv_project))
                <div class="space-30 bordered"></div>
                <div class="experience-section section section-row">
                    <div class="col">
                        <h5 class="section-title text-left">{{__('Projects')}}</h5>
                    </div>
                    <div class="col">
                        @foreach($cv->customer_cv_project as $project)
                            <div class="section-description mt-15 experience-item">
                                <p class="strong"
                                   style="max-width:285px">{{__("Project Name")}}
                                    :{{$project->{"project_name_".$cv_lang} }}
                                    @if(!empty($project->start_date)){{ date("m-Y",strtotime($project->start_date))}}  @endif
                                    @if(!empty($project->end_date)) {{__('to')}} {{date("m-Y",strtotime($project->end_date))}} @endif
                                </p>
                                <p>{{$project->{"description_".$cv_lang} }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @endif
            <div class="space-30 bordered"></div>
            <div class="education-section section section-row">
                <div class="col">
                    <h5 class="section-title text-left">EDUCATION</h5>
                </div>
                <div class="col">
                    @if(count($cv->customer_cv_education))
                        @foreach($cv->customer_cv_education as $edu)
                            <div class="section-description mt-15 education-item">
                                <p class="strong">{{$edu->{"field_study_".$cv_lang} }},
                                    {{ date("m-Y",strtotime($edu->start_date))}}
                                    - {{date("m-Y",strtotime($edu->end_date))}}</p>
                                <p class="strong">{{$edu->{"institution_name_".$cv_lang} }}
                                    - {{$edu->{"city_".$cv_lang} }}</p>
                            </div>
                        @endforeach
                    @else
                        <div class="section-description mt-15 education-item">
                            <p class="strong">BA (Hons) : Business Management, 2006</p>
                            <p class="strong">University Of Westminster - Greater London</p>
                        </div>
                    @endif
                </div>
            </div>
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
                                <p>{{$course->{"course_name_".$cv_lang} }}</p>
                                <p>{{ date("m-Y",strtotime($course->start_date))}}
                                    - {{date("m-Y",strtotime($course->end_date))}} </p>
                                <p class="strong">{{__('Trainer: ')}}{{$course->{"trainer_".$cv_lang} }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="space-30 bordered"></div>
                <div class="education-section section section-row">
                    <div class="col">
                        <h5 class="section-title text-left">QUALIFICATIONS</h5>
                    </div>
                    <div class="col">
                        <div class="section-description mt-15 education-item">
                            <p>CGMA (Chartered Global Management Accountant) conferred by
                                the Chartered Institute of Management Accountants (CIMA), 2010 </p>
                        </div>
                    </div>
                </div>
            @endif
            @if(!empty($cv->{"skills_content_".$cv_lang}))
                <div class="space-30 bordered"></div>
                <div class="education-section section section-row">
                    <div class="col">
                        <h5 class="section-title text-left">{{__('Skills')}}</h5>
                    </div>
                    <div class="col">
                        <div class="section-description mt-15 education-item">
                            <div class="skills_area">
                                {!! $cv->{"skills_content_".$cv_lang} !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>
