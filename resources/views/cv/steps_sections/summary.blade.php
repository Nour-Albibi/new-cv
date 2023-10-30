<section data-particle_enable="false" data-particle-mobile-disabled="false"
         class="width100 section-tab elementor-section elementor-inner-section elementor-element elementor-element-11a1e1d7 exad-glass-effect-yes elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-sticky-section-no"
         data-id="11a1e1d7" data-element_type="section"
         data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-custom">
        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-1cf01187 exad-glass-effect-no exad-sticky-section-no"
             data-id="1cf01187" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-47332c22 exad-sticky-section-no exad-glass-effect-no hello-element elementor-invisible elementor-widget elementor-widget-heading"
                     data-id="47332c22" data-element_type="widget"
                     data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                     data-widget_type="heading.default" current_tab="6">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">{{__('Briefly tell us about your background')}}</h4></div>
                </div>
                <div class="elementor-element elementor-element-4cf1e1ac exad-sticky-section-no exad-glass-effect-no hello-element elementor-invisible elementor-widget elementor-widget-heading"
                     data-id="4cf1e1ac" data-element_type="widget"
                     data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                     data-widget_type="heading.default" current_tab="6">
                    <div class="elementor-widget-container">
                        <h6 class="elementor-heading-title elementor-size-default">{{__('Use the samples
                            below, and tailor them to fit your experience and the role.')}}</h6></div>
                </div>
                <div class="elementor-element elementor-element-78afe226 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-wpforms"
                     data-id="78afe226" data-element_type="widget"
                     data-widget_type="wpforms.default">
                    <div class="elementor-widget-container">
                        <div class="wpforms-container wpforms-container-full" id="wpforms-614">
                            <form id="summary_form" class="wpforms-validate wpforms-form"
                                  data-formid="614" method="post" enctype="multipart/form-data"
                                  action="/"
                                  data-token="bd03f5379139322e31b053c6ab97fff9">
                                @csrf
                                <noscript class="wpforms-error-noscript">{{__('Please enable JavaScript in your browser to complete this form.')}}</noscript>
                                <div class="wpforms-field-container">
                                    <div id="wpforms-614-field_2-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                         data-field-id="2">
                                        <label class="wpforms-field-label"
                                               for="wpforms-614-field_2">{{__('Search for pre-written examples')}}</label>
                                        <input type="text" id="wpforms-614-field_2"
                                                                   class="wpforms-field-large"
                                                                   name="wpforms[fields][2]"
                                                                   placeholder="{{__('Search')}}">
                                    </div>
                                    <div id="wpforms-614-field_3-container"
                                         class="wpforms-field wpforms-field-html wpforms-one-half"
                                         data-field-id="3">
                                        <div id="wpforms-614-field_3">
                                            <button type="button" style="display: inline-block;
    vertical-align: middle;
    background: #024851;
    height: auto;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 5px;
    margin-top: 27px;
    border-radius: 5px;">{{__('Search')}}</button>
                                        </div>
                                    </div>
                                    <div id="wpforms-614-field_5-container"
                                         class="wpforms-field wpforms-field-html" data-field-id="5">
                                        <div id="wpforms-614-field_5">
                                            <hr>
                                        </div>
                                    </div>
                                    <div id="wpforms-614-field_4-container"
                                         class="wpforms-field wpforms-field-html" data-field-id="4">
                                        <div id="wpforms-614-field_4">
                                            <br>
                                            <i class="fas fa-plus-circle" style="list-style:none"></i>
                                            <span class="f">{{__('Organized and dependable candidate successful at managing multiple priorities with a positive attitude.')}}</span>
                                            <br>
                                            <i class="fas fa-plus-circle"
                                               style="list-style:none"></i>
                                                {{__('Hardworking and passionate job seeker with strong organizational skills')}}
                                            <br>
                                        </div>
                                    </div>
                                    <div id="wpforms-614-field_1-container"
                                         class="wpforms-field wpforms-field-textarea"
                                         data-field-id="1">
                                        <label class="wpforms-field-label"
                                               for="wpforms-614-field_1">{{__('Professional summary')}}</label>
                                        <textarea id="wpforms-614-field_1" class="wpforms-field-medium"
                                                  name="content_{{$lang}}">{!! $addedItem->customer_cv_summery ?? '' !!}</textarea>
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
