<section data-particle_enable="false" data-particle-mobile-disabled="false"
         class="width100 section-tab elementor-section elementor-inner-section elementor-element elementor-element-5e93ec0f exad-glass-effect-yes elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-sticky-section-no"
         data-id="5e93ec0f" data-element_type="section"
         data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-custom">
        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-2c10efc4 exad-glass-effect-no exad-sticky-section-no"
             data-id="2c10efc4" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-13bbc91b exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                     data-id="13bbc91b" data-element_type="widget"
                     data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                     data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">Tell us about
                            your Training Courses
                        </h4></div>
                </div>
                <div class="elementor-element elementor-element-442e38ab exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                     data-id="442e38ab" data-element_type="widget"
                     data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                     data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h6 class="elementor-heading-title elementor-size-default">Start with your
                            most recent job and work backwards.
                        </h6></div>
                </div>
                <div class="elementor-element elementor-element-6465a661 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-wpforms"
                     data-id="6465a661" data-element_type="widget"
                     data-widget_type="wpforms.default">
                    <div class="elementor-widget-container">
                        <div class="wpforms-container wpforms-container-full" id="courses_form">
                            <form id="wpforms-form-568" class="wpforms-validate wpforms-form"
                                  data-formid="568" method="post" enctype="multipart/form-data"
                                  action="/">
                                @csrf
                                <noscript class="wpforms-error-noscript">Please enable JavaScript in
                                    your browser to complete this form.
                                </noscript>
                                <div id="course_contianer_section">
                                <div class="wpforms-field-container">
                                    <div id="wpforms-568-field_1-container"
                                         class="wpforms-field wpforms-field-text" data-field-id="1">
                                        <label class="wpforms-field-label"
                                               for="wpforms-568-field_1">Course name</label><input
                                            type="text" id="wpforms-568-field_1"
                                            class="wpforms-field-large" name="course_1['course_name_{{$lang}}']"
                                            placeholder="Course name">
                                    </div>
                                    <div id="wpforms-568-field_2-container"
                                         class="wpforms-field wpforms-field-text" data-field-id="2">
                                        <label class="wpforms-field-label"
                                               for="wpforms-568-field_2">The entity responsible for
                                            the course</label><input type="text"
                                                                     id="wpforms-568-field_2"
                                                                     class="wpforms-field-large"
                                                                     name="course_1['trainer_{{$lang}}']"
                                                                     placeholder="The entity responsible for the course">
                                    </div>
                                    <div id="wpforms-568-field_3-container"
                                         class="wpforms-field wpforms-field-date-time wpforms-one-half wpforms-first"
                                         data-field-id="3">
                                        <label class="wpforms-field-label"
                                               for="wpforms-568-field_3">START DATE</label>
                                        <div class="wpforms-datepicker-wrap">
                                            <input type="date" id="wpforms-568-field_3"
                                                   class="wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                                                   data-date-format="m/d/Y"
                                                   data-disable-past-dates="0" data-input="true"
                                                   name="course_1['start_date']"><a
                                                title="Clear Date" data-clear
                                                class="wpforms-datepicker-clear"
                                                style="display:none;"></a>
                                        </div>
                                    </div>
                                    <div id="wpforms-568-field_4-container"
                                         class="wpforms-field wpforms-field-date-time wpforms-one-half"
                                         data-field-id="4">
                                        <label class="wpforms-field-label"
                                               for="wpforms-568-field_4">END DATE</label>
                                        <div class="wpforms-datepicker-wrap">
                                            <input type="date" id="wpforms-568-field_4"
                                                   class="wpforms-field-date-time-date wpforms-datepicker wpforms-field-large"
                                                   data-date-format="m/d/Y"
                                                   data-disable-past-dates="0" data-input="true"
                                                   name="course_1['end_date']"><a
                                                title="Clear Date" data-clear
                                                class="wpforms-datepicker-clear"
                                                style="display:none;"></a>
                                        </div>
                                    </div>
                                </div>
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

    border-radius: 5px;" type="button" onclick="AddCourse()">+</button>
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
