<link href="{{asset('cv-templates/css/cv4_card.css')}}" rel="stylesheet" defer/>
<div class="Home">
    <div class="row" style="flex-direction: column">
        <div class="header">
            <div class="main-title pt-50">
                <h3 id="cv_template_name">
                    @if(isset($addedItem) && !empty($addedItem))
                        @if($lang=="en")
                            {{$addedItem->model->first_name.' '.$addedItem->model->surename}}
                        @else
                            {{$addedItem->model->first_name_ar.' '.$addedItem->model->surename_ar}}
                        @endif
                    @else {{__("Your Name")}}
                    @endif
                </h3></div>
            <div class="row contact_info" style="text-align:center;">
                <center>
                    @if(isset($addedItem) && !empty($addedItem))
                    <ul class="contact_info_list " >
                        @if(!empty($addedItem->model->{"address_".$lang }))
                            <li class="address">{{$addedItem->model->{"address_".$lang } }}</li>
                        @endif
                        @if(!empty($addedItem->model->phone))
                            <li class="phone">{{$addedItem->model->phone}}</li>
                        @endif
                        @if(!empty($addedItem->model->email))
                            <li class="email">{{$addedItem->model->email}}</li>
                        @endif
                    </ul>
                    @else
                        <ul class="contact_info_list ">
                            <li class="address">46 Roman Rd, Leeds, LS2 3ZR</li>
                            <li class="phone">07912 345 678</li>
                            <li class="email">dom.webster@example.co.uk</li>
                        </ul>
                    @endif
                </center>
            </div>
        </div>
        <div class="col-main">
            @if(isset($addedItem) && !empty($addedItem) && !empty($addedItem->model->{"summary_content_".$lang}))
                <div class="space-30 bordered"></div>
                <div class="summery-section section section-row">
                    <div class="col">
                        <h5 class="section-title text-left">{{__('PROFESSIONAL SUMMARY')}}</h5>
                    </div>
                    <div class="col">
                        <div class="section-description mt-15">
                            <p>{!! $addedItem->model->{"summary_content_".$lang} !!}
                            </p>
                        </div>
                    </div>
                </div>
            @else
                <div class="space-30 bordered"></div>
                <div class="summery-section section section-row">
                    <div class="col">
                        <h5 class="section-title text-left">PROFESSIONAL SUMMARY</h5>
                    </div>
                    <div class="col">
                        <div class="section-description mt-15">
                            <p>Accomplished Operations executive with a successful track record
                                overseeing regional Marketing, IT, HR/training and property in
                                company and franchise operations for a large chain of restaurants.
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            @if(isset($addedItem) && !empty($addedItem) && count($addedItem->model->customer_cv_work_history))
                <div class="space-30 bordered"></div>
                <div class="experience-section section section-row">
                    <div class="col">
                        <h5 class="section-title text-left">{{__('EXPERIENCE')}}</h5>
                    </div>
                    <div class="col">
                        @foreach($addedItem->model->customer_cv_work_history as $work)
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
            @else
                <div class="space-30 bordered"></div>
                <div class="experience-section section section-row">
                    <div class="col">
                        <h5 class="section-title text-left">EXPERIENCE</h5>
                    </div>
                    <div class="col">
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
                    </div>
                </div>
            @endif
            <div class="space-30 bordered"></div>
            <div class="education-section section section-row">
                <div class="col">
                    <h5 class="section-title text-left">EDUCATION</h5>
                </div>
                <div class="col">
                    <div class="section-description mt-15 education-item">
                        <p class="strong">BA (Hons) : Business Management, 2006</p>
                        <p class="strong">University Of Westminster - Greater London</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
