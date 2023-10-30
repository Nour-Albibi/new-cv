<section data-particle_enable="false" data-particle-mobile-disabled="false"
         class="width100 section-tab elementor-section elementor-inner-section elementor-element elementor-element-675b6c06 exad-glass-effect-yes elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-sticky-section-no"
         data-id="675b6c06" data-element_type="section"
         data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-custom">
        <div
            class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-109d2954 exad-glass-effect-no exad-sticky-section-no"
            data-id="109d2954" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div
                    class="elementor-element elementor-element-5585903 exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="5585903" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">{{__('Tell us about your work history')}}</h4>
                    </div>
                </div>
                <div
                    class="elementor-element elementor-element-f7e3c06 exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="f7e3c06" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h6 class="elementor-heading-title elementor-size-default">{{__('Start with your most recent job and work backwards.')}}</h6>
                    </div>
                </div>
                <div
                    class="elementor-element elementor-element-4a5ed31 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-wpforms"
                    data-id="4a5ed31" data-element_type="widget"
                    data-widget_type="wpforms.default">
                    <div class="elementor-widget-container">
                        <div class="wpforms-container wpforms-container-full" id="wpforms-488">
                            <form id="work_history_form" class="wpforms-validate wpforms-form"
                                  data-formid="488" method="post" enctype="multipart/form-data"
                                  action="/">
                                @csrf
                                <noscript
                                    class="wpforms-error-noscript">{{__('Please enable JavaScript in your browser to complete this form.')}}</noscript>
                                <div id="work_history_container">
                                    @if(!empty($addedItem) && count($addedItem->model->customer_cv_work_history))
                                        @php $i=1; @endphp
                                        @foreach($addedItem->model->customer_cv_work_history as $work)
                                            <div class="wpforms-field-container">
                                                <div id="wpforms-488-field_1-container"
                                                     class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                                     data-field-id="1">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-488-field_1">{{__('JOB TITLE')}}</label><input
                                                        type="text" id="wpforms-488-field_1"
                                                        class="wpforms-field-large" name="work_{{$i}}[job_title_{{$lang}}]"
                                                        placeholder="JOB TITLE" value="{{$work->{"job_title_".$lang } }}">
                                                </div>
                                                <div id="wpforms-488-field_2-container"
                                                     class="wpforms-field wpforms-field-text wpforms-one-half"
                                                     data-field-id="2">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-488-field_2">{{__('EMPLOYER')}}</label><input
                                                        type="text" id="wpforms-488-field_2"
                                                        class="wpforms-field-large" name="work_{{$i}}[employeer_{{$lang}}]"
                                                        placeholder="EMPLOYER" value="{{$work->{"employeer_".$lang } }}">
                                                </div>
                                                <div id="wpforms-488-field_3-container"
                                                     class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                                     data-field-id="3">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-488-field_3">{{__('CITY/TOWN')}}</label><input
                                                        type="text" id="wpforms-488-field_3"
                                                        class="wpforms-field-large" name="work_{{$i}}[city_{{$lang}}]"
                                                        placeholder="CITY/TOWN" value="{{$work->{"city_".$lang } }}">
                                                </div>
                                                <div id="wpforms-488-field_4-container"
                                                     class="wpforms-field wpforms-field-text wpforms-one-half"
                                                     data-field-id="4">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-488-field_4">{{__('COUNTY')}}</label>
                                                    <input
                                                        type="text" id="wpforms-488-field_4"
                                                        class="wpforms-field-large" name="work_{{$i}}[country_{{$lang}}]"
                                                        placeholder="COUNTY" value="{{$work->{"country_".$lang } }}">
                                                </div>
                                                <div id="wpforms-488-field_5-container"
                                                     class="wpforms-field wpforms-field-date-time wpforms-one-half wpforms-first"
                                                     data-field-id="5">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-488-field_5">{{__('START DATE')}}</label>
                                                    <div class="wpforms-datepicker-wrap">
                                                        <input type="date" id="wpforms-488-field_5"
                                                               class="start_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                                                               data-date-format="m/d/Y"
                                                               data-disable-past-dates="0" data-input="true"
                                                               work_num="{{$i}}"
                                                               input_name="work_start_date"
                                                               name="work_{{$i}}[start_date]" value="{{Illuminate\Support\Carbon::parse($work->start_date)->toDateString()}}">
                                                    </div>
                                                </div>
                                                <div id="wpforms-488-field_6-container"
                                                     class="wpforms-field wpforms-field-date-time wpforms-one-half"
                                                     data-field-id="6">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-488-field_6">{{__('END DATE')}}</label>
                                                    <div class="wpforms-datepicker-wrap">
                                                        <input type="date" id="wpforms-488-field_6"
                                                               class="end_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                                                               data-date-format="m/d/Y"
                                                               data-disable-past-dates="0" data-input="true"
                                                               work_num="{{$i}}"
                                                               input_name="work_end_date"
                                                               name="work_{{$i}}[end_date]" value="{{Illuminate\Support\Carbon::parse($work->end_date)->toDateString()}}">
                                                    </div>
                                                </div>
                                                <div id="wpforms-488-field_7-container"
                                                     class="wpforms-field wpforms-field-checkbox"
                                                     data-field-id="7">
                                                    <ul id="wpforms-488-field_7">
                                                        <li class="choice-1 depth-1">
                                                            <input type="checkbox" id="wpforms-488-field_7_1"
                                                                   name="work_{{$i}}[current]"
                                                                   value="I currently work here"
                                                             @if($work->current) checked @endif><label
                                                                class="wpforms-field-label-inline"
                                                                for="wpforms-488-field_7_1">{{__('I currently work here')}}</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="wpforms-488-field_4-container"
                                                     class="wpforms-field wpforms-field-text">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-488-field_4">{{__('Job Description')}}</label>
                                                    <textarea class="wpforms-field-large"
                                                              name="work_1[experience_description_{{$lang}}]"
                                                              placeholder="{{__('Job Description')}}">{!! $work->{"experience_description_".$lang} !!}</textarea>
                                                </div>
                                            </div>
                                            @php $i++; @endphp
                                        @endforeach
                                    @else
                                        <div class="wpforms-field-container">
                                            <div id="wpforms-488-field_1-container"
                                                 class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                                 data-field-id="1">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-488-field_1">{{__('JOB TITLE')}}</label><input
                                                    type="text" id="wpforms-488-field_1"
                                                    class="wpforms-field-large" name="work_1[job_title_{{$lang}}]"
                                                    placeholder="JOB TITLE">
                                            </div>
                                            <div id="wpforms-488-field_2-container"
                                                 class="wpforms-field wpforms-field-text wpforms-one-half"
                                                 data-field-id="2">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-488-field_2">{{__('EMPLOYER')}}</label><input
                                                    type="text" id="wpforms-488-field_2"
                                                    class="wpforms-field-large" name="work_1[employeer_{{$lang}}]"
                                                    placeholder="EMPLOYER">
                                            </div>
                                            <div id="wpforms-488-field_3-container"
                                                 class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                                 data-field-id="3">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-488-field_3">{{__('CITY/TOWN')}}</label><input
                                                    type="text" id="wpforms-488-field_3"
                                                    class="wpforms-field-large" name="work_1[city_{{$lang}}]"
                                                    placeholder="CITY/TOWN">
                                            </div>
                                            <div id="wpforms-488-field_4-container"
                                                 class="wpforms-field wpforms-field-text wpforms-one-half"
                                                 data-field-id="4">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-488-field_4">{{__('COUNTY')}}</label>
                                                <input
                                                    type="text" id="wpforms-488-field_4"
                                                    class="wpforms-field-large" name="work_1[country_{{$lang}}]"
                                                    placeholder="COUNTY">
                                            </div>
                                            <div id="wpforms-488-field_5-container"
                                                 class="wpforms-field wpforms-field-date-time wpforms-one-half wpforms-first"
                                                 data-field-id="5">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-488-field_5">{{__('START DATE')}}</label>
                                                <div class="wpforms-datepicker-wrap">
                                                    <input type="date" id="wpforms-488-field_5"
                                                           class="start_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                                                           data-date-format="m/d/Y"
                                                           data-disable-past-dates="0" data-input="true"
                                                           work_num="1"
                                                           input_name="work_start_date"
                                                           name="work_1[start_date]">
                                                </div>
                                            </div>
                                            <div id="wpforms-488-field_6-container"
                                                 class="wpforms-field wpforms-field-date-time wpforms-one-half"
                                                 data-field-id="6">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-488-field_6">{{__('END DATE')}}</label>
                                                <div class="wpforms-datepicker-wrap">
                                                    <input type="date" id="wpforms-488-field_6"
                                                           class="end_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                                                           data-date-format="m/d/Y"
                                                           data-disable-past-dates="0" data-input="true"
                                                           work_num="1"
                                                           input_name="work_end_date"
                                                           name="work_1[end_date]">
                                                </div>
                                            </div>
                                            <div id="wpforms-488-field_7-container"
                                                 class="wpforms-field wpforms-field-checkbox"
                                                 data-field-id="7">
                                                <ul id="wpforms-488-field_7">
                                                    <li class="choice-1 depth-1">
                                                        <input type="checkbox" id="wpforms-488-field_7_1"
                                                               name="work_1[current]"
                                                               value="I currently work here"><label
                                                            class="wpforms-field-label-inline"
                                                            for="wpforms-488-field_7_1">{{__('I currently work here')}}</label>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div id="wpforms-488-field_4-container"
                                                 class="wpforms-field wpforms-field-text">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-488-field_4">{{__('Job Description')}}</label>
                                                <textarea class="wpforms-field-large"
                                                          name="work_1[experience_description_{{$lang}}]"
                                                          placeholder="{{__('Job Description')}}"></textarea>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                                <div id="wpforms-626-field_5-container"
                                     class="wpforms-field wpforms-field-html wpforms-two-thirds wpforms-first"
                                     data-field-id="5">
                                    <div id="wpforms-626-field_5">
                                        <hr>
                                    </div>
                                </div>
                                <div id="wpforms-626-field_6-container"
                                     class="wpforms-field wpforms-field-html wpforms-one-third"
                                     data-field-id="6">
                                    <div id="wpforms-626-field_6">
                                        <button type="button" style="display: inline-block;
    vertical-align: middle;
    background: #024851;
    height: auto;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 5px;

    border-radius: 5px;" type="button" onclick="AddWorkExperience()">+
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
