<link rel="stylesheet" href="{{asset('cv-templates/cv2/css/preview_cv2.css')}}" defer/>
<style>
    :root {
        --primary1: {{$cv->template_color ?? "#496267"}}  !important;
    }
</style>
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
                        <div class="display-grid">
                            @if(!empty($cv->email))
                                <div class="position_relative">
                                    <img class="fl"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEESURBVDhPY2Bsv/efVGy58Ol/kjQmbnn1//6H32BMlMbAtS/+n3/x8z8MbL/7Db9Gx6XP/h9/+gOs+PmXP2AMAv2nPmLXCPLD/offwYpAAKR5+bUvUN7//4V73qBqNJz35P/6m1+h0hAA0lC5/x2UBwGeK59DNCpOe/R//qXPUGEEaD/+HqwIHUhOevifAeQPdPD99z9wCGrOevz//fe/UFEIAMmBLAPbCHIiyMOgYAYpBBkm2P8AzEcHoNCFa0TGIA0gGjkwkAFIHCSPNVRB8QZyBcjm6ec+oTgX5G+QGqwaYQEFCnaYGMgwkDjIMBAfp0ZQPGKTg2GsGkHOhPkVO773HwB2TUdgTJT4iwAAAABJRU5ErkJggg=="
                                         width="14" height="14"/>
                                    <p class="fl ml-5">{{$cv->email}}</p>
                                </div>
                            @endif
                            @if(!empty($cv->phone))
                                <div class="position_relative mt-5">
                                    <img class="fl"
                                         src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAE8SURBVDhPfZIhTAJhFMfPSDQajUaikWg0Go1Goo1GMLAZdDPoDM4ZnAQ3DGwEApsBN4POIIiKojJPRT2U6XO/d7xPjh287e12997v3f/9v8+byNZkVM5s3MjsdjO25k2vXUum7Gsul54lsVJ3xYX8g5QagQS9X9k67chk7uofXDx8lMFIbt5GQOoMZ2j9pacqFJzbu+8jYczvtxxIE0rO29+SLrYltXMnJ60vVeVRHIz16psDgQ4uPlQFTxRQXzp6EjWHiRZ+8ONAJtNkEivNrpq1e/YegtmKrxANTDXQkkZWQObUakN/pCAvOIeDw5DVcdSMQbo7R5Yn2Mu+jcvIBcAAgiOwb0iMuwQREDMKl58K4x7nxwoE+7OKKYqAlrnjV202aDjoiQVJ5PGHuKA+ErTESa4bQ8jwnGvyB2eZP6atrai4AAAAAElFTkSuQmCC"
                                         width="14" height="14"/>
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
                                <img class="fl"
                                     src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA4AAAAOCAYAAAAfSC3RAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAAJcEhZcwAADsMAAA7DAcdvqGQAAAEESURBVDhPY2Bsv/efVGy58Ol/kjQmbnn1//6H32BMlMbAtS/+n3/x8z8MbL/7Db9Gx6XP/h9/+gOs+PmXP2AMAv2nPmLXCPLD/offwYpAAKR5+bUvUN7//4V73qBqNJz35P/6m1+h0hAA0lC5/x2UBwGeK59DNCpOe/R//qXPUGEEaD/+HqwIHUhOevifAeQPdPD99z9wCGrOevz//fe/UFEIAMmBLAPbCHIiyMOgYAYpBBkm2P8AzEcHoNCFa0TGIA0gGjkwkAFIHCSPNVRB8QZyBcjm6ec+oTgX5G+QGqwaYQEFCnaYGMgwkDjIMBAfp0ZQPGKTg2GsGkHOhPkVO773HwB2TUdgTJT4iwAAAABJRU5ErkJggg=="
                                     width="14" height="14"/>
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
            <div class="display-inline-grid">
                <div class="col1">
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
                    @if(count($cv->customer_cv_project))
                        <div class="experience-section section section-row">
                            <div class="col">
                                <h5 class="section-title text-left">{{__('Projects')}}</h5>
                            </div>
                            <div class="col">
                                @foreach($cv->customer_cv_project as $project)
                                    <div class="section-description mt-15 experience-item">
                                        <div
                                            style="display:flex;justify-content: space-between;margin-bottom: 4px;">
                                            <p class="strong" style="max-width:285px">{{__("Project Name")}}
                                                :{{$project->{"project_name_".$cv_lang} }}</p>
                                            <p class="strong">@if(!empty($project->start_date)){{ date("m-Y",strtotime($project->start_date))}}  @endif
                                                @if(!empty($project->end_date)) {{__('to')}} {{date("m-Y",strtotime($project->end_date))}} @endif</p>
                                        </div>
                                        <p class="strong">{{$project->{"description_".$cv_lang} }}</p>
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
                <div class="col2">
                    @if(!empty($cv->{"skills_content_".$cv_lang}))
                        <div class="personal-info-section">
                            <div class="personal-info-title section-title"><h3>{{__('SKILLS')}}</h3></div>
                            <div class="personal-info-description mt-10">
                                <div class="skills_area">
                                    {!! $cv->{"skills_content_".$cv_lang} !!}
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
