<link href="{{asset('cv-templates/css/cv4_card.css')}}" rel="stylesheet" defer/>
@if(isset($cv) &&  !empty($cv))
    <style>
        .card-header{
            background-color: {{ $cv->template_color ?? session('chosen_cv_color')}};
        }
        h5.card-section-title{
            color: {{ $cv->template_color ?? session('chosen_cv_color')}};
        }
    </style>
@else
<style>

    .card-header{
        background-color: {{session('chosen_cv_color')}};
    }
    h5.card-section-title{
        color: {{session('chosen_cv_color')}};
    }
</style>
@endif
<div class="card-Home">
    <div class="card-row" style="flex-direction: column">
        <div class="card-header">
            <div class="card-main-title">
                <h3 id="cv_template_name">
                    @if(isset($addedItem) && !empty($addedItem))
                        @if($lang=="en")
                            {{$addedItem->model->first_name.' '.$addedItem->model->surename}}
                        @else
                            {{$addedItem->model->first_name_ar.' '.$addedItem->model->surename_ar}}
                        @endif
                    @elseif(isset($cv) &&  !empty($cv))
                        @if($lang=="en")
                            {{$cv->first_name.' '.$cv->surename}}
                        @else
                            {{$cv->first_name_ar.' '.$cv->surename_ar}}
                        @endif
                    @else
                        {{__("Your Name")}}
                    @endif
                </h3></div>
            <div class="card-row card-contact_info" style="text-align:center;">
                    @if(isset($addedItem) && !empty($addedItem))
                    <ul class="card-contact_info_list " >
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
                        <ul class="card-contact_info_list ">
                            <li class="address">46 Roman Rd, Leeds, LS2 3ZR</li>
                            <li class="phone">07912 345 678</li>
                            <li class="email">dom.webster@example.co.uk</li>
                        </ul>
                    @endif
            </div>
        </div>
        <div class="card-col-main">
            @if(isset($addedItem) && !empty($addedItem) && !empty($addedItem->model->{"summary_content_".$lang}))
                <div class="card-space-30 card-bordered"></div>
                <div class="card-summery-section card-section card-section-row">
                    <div class="card-col">
                        <h5 class="card-section-title text-left">{{__('PROFESSIONAL SUMMARY')}}</h5>
                    </div>
                    <div class="card-col">
                        <div class="card-section-description card-mt-15">
                            <p>{!! $addedItem->model->{"summary_content_".$lang} !!}
                            </p>
                        </div>
                    </div>
                </div>
            @else
                <div class="card-space-30 card-bordered"></div>
                <div class="card-summery-section card-section card-section-row">
                    <div class="card-col">
                        <h5 class="card-section-title text-left">PROFESSIONAL SUMMARY</h5>
                    </div>
                    <div class="card-col">
                        <div class="card-section-description card-mt-15">
                            <p>Accomplished Operations executive with a successful track record
                                overseeing regional Marketing, IT, HR/training and property in
                                company and franchise operations for a large chain of restaurants.
                            </p>
                        </div>
                    </div>
                </div>
            @endif
            @if(isset($addedItem) && !empty($addedItem) && count($addedItem->model->customer_cv_work_history))
                <div class="card-space-30 card-bordered"></div>
                <div class="card-experience-section card-section card-section-row">
                    <div class="card-col">
                        <h5 class="card-section-title text-left">{{__('EXPERIENCE')}}</h5>
                    </div>
                    <div class="card-col">
                        @foreach($addedItem->model->customer_cv_work_history as $work)
                            <div class="card-section-description card-mt-15 card-experience-item">
                                <p class="card-strong" style="max-width:285px">{{$work->{"job_title_".$lang} }}
                                    {{ date("m-Y",strtotime($work->start_date))}} {{__('to')}} {{ date("m-Y",strtotime($work->end_date))}}
                                </p>
                                <p class="card-strong">{{$work->{"employeer_".$lang} }}</p>
                                {!! $work->{"experience_description_".$lang } !!}
                            </div>
                        @endforeach
                    </div>
                </div>
            @else
                <div class="card-space-30 card-bordered"></div>
                <div class="card-experience-section card-section card-section-row">
                    <div class="card-col">
                        <h5 class="card-section-title text-left">EXPERIENCE</h5>
                    </div>
                    <div class="card-col">
                        <div class="card-section-description card-mt-15 card-experience-item">
                            <p class="card-strong" style="max-width:285px">Executive Vice President 09/2015 to 02/2019</p>
                            <p class="card-strong">Pizza Hut UK & Ireland - St Albans, Herts</p>
                            <ul class="card-work-duties card-mt-16 card-main-list">
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
            <div class="card-space-30 card-bordered"></div>
            <div class="card-education-section section section-row">
                <div class="card-col">
                    <h5 class="card-section-title text-left">EDUCATION</h5>
                </div>
                <div class="card-col">
                    <div class="card-section-description card-mt-15 card-education-item">
                        <p class="card-strong">BA (Hons) : Business Management, 2006</p>
                        <p class="card-strong">University Of Westminster - Greater London</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
