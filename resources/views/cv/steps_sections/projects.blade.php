<section data-particle_enable="false" data-particle-mobile-disabled="false"
         class="width100 section-tab elementor-section elementor-inner-section elementor-element elementor-element-38bf725a exad-glass-effect-yes elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-sticky-section-no"
         data-id="38bf725a" data-element_type="section"
         data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-custom">
        <div
            class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-12633ce2 exad-glass-effect-no exad-sticky-section-no"
            data-id="12633ce2" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div
                    class="elementor-element elementor-element-1fb7b102 exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="1fb7b102" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Tell us about
                            your work Projects
                        </h4></div>
                </div>
                <div
                    class="elementor-element elementor-element-138ae84a exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="138ae84a" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                    data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h6 class="elementor-heading-title elementor-size-default">Start with your
                            most recent job and work backwards.
                        </h6></div>
                </div>
                <div
                    class="elementor-element elementor-element-404baf79 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-wpforms"
                    data-id="404baf79" data-element_type="widget"
                    data-widget_type="wpforms.default">
                    <div class="elementor-widget-container">
                        <div class="wpforms-container wpforms-container-full" id="wpforms-519">
                            <form id="project_form" class="wpforms-validate wpforms-form"
                                  data-formid="519" method="post" enctype="multipart/form-data"
                                  action="/"
                                  data-token="bd03f5379139322e31b053c6ab97fff9">
                                @csrf
                                <noscript
                                    class="wpforms-error-noscript">{{__('Please enable JavaScript in your browser to complete this form.')}}</noscript>
                                <div id="project_section_container">
                                    @if(!empty($addedItem) && count($addedItem->model->customer_cv_project))
                                        @php $i=1; @endphp
                                        @foreach($addedItem->model->customer_cv_project as $project)
                                            <div class="wpforms-field-container">
                                                <div id="wpforms-519-field_1-container"
                                                     class="wpforms-field wpforms-field-text" data-field-id="1">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-519-field_1">{{__('PROJECT NAME')}}</label><input
                                                        type="text" id="wpforms-519-field_1"
                                                        class="wpforms-field-large"
                                                        name="project_{{$i}}[project_name_{{$lang}}]"
                                                        placeholder="{{__('PROJECT NAME')}}" value="{{$project->{"project_name_".$lang } }}">
                                                </div>
                                                <div id="wpforms-519-field_3-container"
                                                     class="wpforms-field wpforms-field-text" data-field-id="3">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-519-field_3">{{__('DESCRIPTION OF WORK ON THE PROJECT')}}</label>
                                                    <textarea name="project_{{$i}}[description_{{$lang}}]"
                                                              class="wpforms-field-large"
                                                              placeholder="{{__('DESCRIPTION OF WORK ON THE PROJECT')}}">{!! $project->{"description_".$lang} !!}</textarea>
                                                </div>
                                                <div id="wpforms-519-field_4-container"
                                                     class="wpforms-field wpforms-field-date-time wpforms-one-half wpforms-first"
                                                     data-field-id="4">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-519-field_4">{{__('START DATE')}}</label>
                                                    <div class="wpforms-datepicker-wrap">
                                                        <input type="date" id="wpforms-519-field_4"
                                                               class="start_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                                                               data-date-format="m/d/Y"
                                                               data-disable-past-dates="0" data-input="true"
                                                               input_name="project_start_date"
                                                               project_num="{{$i}}"
                                                               name="project_{{$i}}[start_date]" value="{{Illuminate\Support\Carbon::parse($project->start_date)->toDateString()}}">
                                                    </div>
                                                </div>
                                                <div id="wpforms-519-field_5-container"
                                                     class="wpforms-field wpforms-field-date-time wpforms-one-half"
                                                     data-field-id="5">
                                                    <label class="wpforms-field-label"
                                                           for="wpforms-519-field_5">{{__('END DATE')}}</label>
                                                    <div class="wpforms-datepicker-wrap">
                                                        <input type="date" id="wpforms-519-field_5"
                                                               class="end_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                                                               data-date-format="m/d/Y"
                                                               data-disable-past-dates="0" data-input="true"
                                                               input_name="project_end_date"
                                                               project_num="{{$i}}"
                                                               name="project_{{$i}}[end_date]" value="{{Illuminate\Support\Carbon::parse($project->end_date)->toDateString()}}">
                                                    </div>
                                                </div>
                                            </div>
                                            @php $i++; @endphp
                                        @endforeach
                                    @else
                                        <div class="wpforms-field-container">
                                            <div id="wpforms-519-field_1-container"
                                                 class="wpforms-field wpforms-field-text" data-field-id="1">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-519-field_1">PROJECT NAME</label><input
                                                    type="text" id="wpforms-519-field_1"
                                                    class="wpforms-field-large"
                                                    name="project_1[project_name_{{$lang}}]"
                                                    placeholder="PROJECT NAME">
                                            </div>
                                            <div id="wpforms-519-field_3-container"
                                                 class="wpforms-field wpforms-field-text" data-field-id="3">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-519-field_3">{{__('DESCRIPTION OF WORK ON THE PROJECT')}}</label>
                                                <textarea name="project_1[description_{{$lang}}]"
                                                          class="wpforms-field-large"
                                                          placeholder="{{__('DESCRIPTION OF WORK ON THE PROJECT')}}"></textarea>
                                            </div>
                                            <div id="wpforms-519-field_4-container"
                                                 class="wpforms-field wpforms-field-date-time wpforms-one-half wpforms-first"
                                                 data-field-id="4">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-519-field_4">START DATE</label>
                                                <div class="wpforms-datepicker-wrap">
                                                    <input type="date" id="wpforms-519-field_4"
                                                           class="start_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                                                           data-date-format="m/d/Y"
                                                           data-disable-past-dates="0" data-input="true"
                                                           input_name="project_start_date"
                                                           project_num="1"
                                                           name="project_1[start_date]">
                                                </div>
                                            </div>
                                            <div id="wpforms-519-field_5-container"
                                                 class="wpforms-field wpforms-field-date-time wpforms-one-half"
                                                 data-field-id="5">
                                                <label class="wpforms-field-label"
                                                       for="wpforms-519-field_5">{{__('END DATE')}}</label>
                                                <div class="wpforms-datepicker-wrap">
                                                    <input type="date" id="wpforms-519-field_5"
                                                           class="end_date wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                                                           data-date-format="m/d/Y"
                                                           data-disable-past-dates="0" data-input="true"
                                                           input_name="project_end_date"
                                                           project_num="1"
                                                           name="project_1[end_date]">
                                                </div>
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

    border-radius: 5px;" type="button" onclick="AddProject()">+
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>  <!-- .wpforms-container -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
