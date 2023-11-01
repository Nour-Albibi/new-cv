<section data-particle_enable="false" data-particle-mobile-disabled="false"
         class="education_tab_container elementor-454 width100 section-tab elementor-section elementor-inner-section elementor-element elementor-element-6266f929 exad-glass-effect-yes elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-sticky-section-no"
         data-id="6266f929" data-element_type="section"
         data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <x-cv.tips_and_preview_area :ctemplate="$chosen_template">
        {{--Custom  Tips Area--}}
        <div class="tips_area elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5f785b4 exad-glass-effect-no exad-sticky-section-no"
             data-id="5f785b4" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div
                    class="elementor-element elementor-element-98451db exad-sticky-section-no exad-glass-effect-no hello-element elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="98451db" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                    data-widget_type="heading.default" current_tab="3">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">{{__("Great, let’s work on your")}}
                        </h4></div>
                </div>
                <div
                    class="elementor-element elementor-element-e0edac4 exad-sticky-section-no exad-glass-effect-no hello-element elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="e0edac4" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                    data-widget_type="heading.default" current_tab="3">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">{{__('Education')}}</h3>
                    </div>
                </div>
                <div
                    class="elementor-element elementor-element-8fc8c3e exad-sticky-section-no exad-glass-effect-no hello-element elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="8fc8c3e" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                    data-widget_type="heading.default" current_tab="3">
                    <div class="elementor-widget-container">
                        <h6 class="elementor-heading-title elementor-size-default">{{__("Start with your most recent qualification and work backwards.")}}</h6></div>
                </div>
                <div
                    class="elementor-element elementor-element-e0e8c31 elementor-icon-list--layout-traditional elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list"
                    data-id="e0e8c31" data-element_type="widget"
                    data-widget_type="icon-list.default">
                    <div class="elementor-widget-container">
                        <ul class="elementor-icon-list-items">
                            <li class="elementor-icon-list-item">
                                <a href="javascript:void(0)" onclick="$('.tips_area').css('visibility','hidden')">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-chevron-right"></i>
                                        </span>
                                    <span class="elementor-icon-list-text">{{__("Don't show me tips anymore")}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </x-cv.tips_and_preview_area>
    <div class="education_s_tab elementor-container elementor-column-gap-custom">
        <div
            class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-6cb5930a exad-glass-effect-no exad-sticky-section-no"
            data-id="6cb5930a" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div
                    class="elementor-element elementor-element-15324d3d exad-sticky-section-no exad-glass-effect-no  hello-element elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="15324d3d" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                    data-widget_type="heading.default" current_tab="3">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">{{__('Tell us about your education')}}</h4></div>
                </div>
                <div
                    class="elementor-element elementor-element-522986e6 exad-sticky-section-no exad-glass-effect-no  hello-element elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="522986e6" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                    data-widget_type="heading.default" current_tab="3">
                    <div class="elementor-widget-container">
                        <h6 class="elementor-heading-title elementor-size-default">
                            {{__("List universities, colleges or institutions where you studied. If you didn't
                            attend further education, then list your school or any other place of
                            training, particularly if it corresponds to the position sought.")}}</h6>
                    </div>
                </div>
                <div
                    class="elementor-element elementor-element-19f4a607 elementor-hidden-tablet elementor-hidden-mobile exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-wpforms"
                    data-id="19f4a607" data-element_type="widget"
                    data-widget_type="wpforms.default">
                    <div class="elementor-widget-container">
                        <div class="wpforms-container wpforms-container-full" id="wpforms-535">
                            <form id="education_form" class="wpforms-validate wpforms-form"
                                  data-formid="535" method="post" enctype="multipart/form-data"
                                  action="/"
                                  data-token="bd03f5379139322e31b053c6ab97fff9">
                                @csrf
                                <noscript class="wpforms-error-noscript">{{__('Please enable JavaScript in your browser to complete this form.')}}</noscript>
                                <div id="education_section_container">
                                    @if(!empty($addedItem) && count($addedItem->model->customer_cv_education))
                                        @php $i=1; @endphp
                                        @foreach($addedItem->model->customer_cv_education as $education)
                                            <div class="wpforms-field-container">
                                                <div id="wpforms-535-field_1-container"
                                                     class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                                     data-field-id="1">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-535-field_1">{{__('INSTITUTION NAME')}}</label>
                                                    <input type="text" id="wpforms-535-field_1"
                                                           class="wpforms-field-large"
                                                           name="education_{{$i}}[institution_name_{{$cv_lang}}]"
                                                           placeholder="{{__('INSTITUTION NAME')}}" value="{{$education->{"institution_name_".$cv_lang} }}">
                                                </div>
                                                <div id="wpforms-535-field_2-container"
                                                     class="wpforms-field wpforms-field-text wpforms-one-half"
                                                     data-field-id="2">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-535-field_2">{{__('CITY / COUNTRY')}}</label>
                                                    <input type="text" id="wpforms-535-field_2"
                                                                              class="wpforms-field-large"
                                                                              name="education_{{$i}}[city_{{$cv_lang}}]"
                                                                              placeholder="{{__('City/Country')}}" value="{{$education->{"city_".$cv_lang} }}">
                                                </div>
                                                <div id="wpforms-535-field_3-container"
                                                     class="wpforms-field wpforms-field-select wpforms-one-half wpforms-first wpforms-field-select-style-classic"
                                                     data-field-id="3">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-535-field_3">{{__('QUALIFICATION')}}</label><select
                                                        id="wpforms-535-field_3" class="wpforms-field-large"
                                                        name="education_{{$i}}[qualification_id]">
                                                        <option value="1" selected>First Choice</option>
                                                        <option value="2">Second Choice</option>
                                                        <option value="3">Third Choice</option>
                                                    </select>
                                                </div>
                                                <div id="wpforms-535-field_4-container"
                                                     class="wpforms-field wpforms-field-text wpforms-one-half"
                                                     data-field-id="4">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-535-field_4">{{__('FIELD OF STUDY')}}</label>
                                                    <input type="text" id="wpforms-535-field_4"
                                                           class="wpforms-field-large"
                                                           name="education_{{$i}}[field_study_{{$cv_lang}}]"
                                                           value="{{$education->{"field_study_".$cv_lang} }}">
                                                </div>
                                                <div id="wpforms-535-field_5-container"
                                                     class="wpforms-field wpforms-field-number"
                                                     data-field-id="5">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-535-field_5">{{__('HONOURS(optional)')}}</label><input
                                                        type="text" pattern="\d*" id="wpforms-535-field_5"
                                                        class="wpforms-field-large"
                                                        name="education_{{$i}}[honours_{{$cv_lang}}]" value="{{$education->{"honours_".$cv_lang} }}">
                                                </div>
                                                <div id="wpforms-535-field_6-container"
                                                     class="wpforms-field wpforms-field-date-time wpforms-one-half wpforms-first"
                                                     data-field-id="6">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-535-field_6">{{__('START DATE')}}</label>
                                                    <div class="wpforms-datepicker-wrap">
                                                        <input type="date" id="wpforms-535-field_6"
                                                               class="start_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                                                               data-date-format="m/d/Y"
                                                               data-disable-past-dates="0" data-input="true"
                                                               input_name="education_start_date"
                                                               education_num="{{$i}}"
                                                               name="education_{{$i}}[start_date]" value="{{Illuminate\Support\Carbon::parse($education->start_date)->toDateString()}}">
                                                    </div>
                                                </div>
                                                <div id="wpforms-535-field_7-container"
                                                     class="wpforms-field wpforms-field-date-time wpforms-one-half"
                                                     data-field-id="7">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-535-field_7">{{__('END DATE')}}</label>
                                                    <div class="wpforms-datepicker-wrap">
                                                        <input type="date" id="wpforms-535-field_7"
                                                               class="end_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                                                               data-date-format="m/d/Y"
                                                               data-disable-past-dates="0" data-input="true"
                                                               input_name="education_end_date"
                                                               education_num="{{$i}}"
                                                               name="education_{{$i}}[end_date]" value="{{Illuminate\Support\Carbon::parse($education->end_date)->toDateString()}}">
                                                    </div>
                                                </div>
                                                <div id="wpforms-488-field_7-container"
                                                     class="wpforms-field wpforms-field-checkbox"
                                                     data-field-id="7">
                                                    <ul id="wpforms-488-field_7">
                                                        <li class="choice-1 depth-1">
                                                            <input type="checkbox" id="wpforms-488-field_7_1"
                                                                   name="education_{{$i}}[current]"
                                                                   value="{{__('I currently work here')}}" @if($education->current) checked @endif>
                                                            <label class="wpforms-field-label-inline" for="wpforms-488-field_7_1">{{__('Current')}}</label>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            @php $i++; @endphp
                                        @endforeach
                                    @else
                                        <div class="wpforms-field-container">
                                            <div id="wpforms-535-field_1-container"
                                                 class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                                 data-field-id="1">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-535-field_1">{{__('INSTITUTION NAME')}}</label>
                                                <input type="text" id="wpforms-535-field_1"
                                                       class="wpforms-field-large"
                                                       name="education_1[institution_name_{{$cv_lang}}]"
                                                       placeholder="{{__('INSTITUTION NAME')}}">
                                            </div>
                                            <div id="wpforms-535-field_2-container"
                                                 class="wpforms-field wpforms-field-text wpforms-one-half"
                                                 data-field-id="2">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-535-field_2">{{__('CITY /COUNTRY')}}</label><input type="text"
                                                                          id="wpforms-535-field_2"
                                                                          class="wpforms-field-large"
                                                                          name="education_1[city_{{$cv_lang}}]"
                                                                          placeholder="{{__('City/Country')}}">
                                            </div>
                                            <div id="wpforms-535-field_3-container"
                                                 class="wpforms-field wpforms-field-select wpforms-one-half wpforms-first wpforms-field-select-style-classic"
                                                 data-field-id="3">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-535-field_3">{{__('QUALIFICATION')}}</label><select
                                                    id="wpforms-535-field_3" class="wpforms-field-large"
                                                    name="education_1[qualification_id]">
                                                    <option value="1" selected>First Choice</option>
                                                    <option value="2">Second Choice</option>
                                                    <option value="3">Third Choice</option>
                                                </select>
                                            </div>
                                            <div id="wpforms-535-field_4-container"
                                                 class="wpforms-field wpforms-field-text wpforms-one-half"
                                                 data-field-id="4">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-535-field_4">{{__('FIELD OF STUDY')}}</label>
                                                <input type="text" id="wpforms-535-field_4"
                                                       class="wpforms-field-large"
                                                       name="education_1[field_study_{{$cv_lang}}]"
                                                       placeholder="{{__('FIELD OF STUDY')}}">
                                            </div>
                                            <div id="wpforms-535-field_5-container"
                                                 class="wpforms-field wpforms-field-number"
                                                 data-field-id="5">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-535-field_5">{{__('HONOURS(optional)')}}</label><input
                                                    type="text" pattern="\d*" id="wpforms-535-field_5"
                                                    class="wpforms-field-large" name="education_1[honours_{{$cv_lang}}]">
                                            </div>
                                            <div id="wpforms-535-field_6-container"
                                                 class="wpforms-field wpforms-field-date-time wpforms-one-half wpforms-first"
                                                 data-field-id="6">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-535-field_6">{{__('START DATE')}}</label>
                                                <div class="wpforms-datepicker-wrap">
                                                    <input type="date" id="wpforms-535-field_6"
                                                           class="start_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                                                           data-date-format="m/d/Y"
                                                           data-disable-past-dates="0" data-input="true"
                                                           input_name="education_start_date"
                                                           education_num="1"
                                                           name="education_1[start_date]">
                                                </div>
                                            </div>
                                            <div id="wpforms-535-field_7-container"
                                                 class="wpforms-field wpforms-field-date-time wpforms-one-half"
                                                 data-field-id="7">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-535-field_7">{{__('END DATE')}}</label>
                                                <div class="wpforms-datepicker-wrap">
                                                    <input type="date" id="wpforms-535-field_7"
                                                           class="end_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                                                           data-date-format="m/d/Y"
                                                           data-disable-past-dates="0" data-input="true"
                                                           input_name="education_end_date"
                                                           education_num="1"
                                                           name="education_1[end_date]">
                                                </div>
                                            </div>
                                            <div id="wpforms-488-field_7-container"
                                                 class="wpforms-field wpforms-field-checkbox"
                                                 data-field-id="7">
                                                <ul id="wpforms-488-field_7">
                                                    <li class="choice-1 depth-1">
                                                        <input type="checkbox" id="wpforms-488-field_7_1"
                                                               name="education_1[current]"
                                                               value="I currently work here"><label
                                                            class="wpforms-field-label-inline"
                                                            for="wpforms-488-field_7_1">{{__('Current')}}</label>
                                                    </li>
                                                </ul>
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

    border-radius: 5px;" type="button" onclick="AddEducation()">+
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
