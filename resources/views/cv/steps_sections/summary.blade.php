<section data-particle_enable="false" data-particle-mobile-disabled="false"
         class="summary_tab_container elementor-454 width100 section-tab elementor-section elementor-inner-section elementor-element elementor-element-11a1e1d7 exad-glass-effect-yes elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-sticky-section-no"
         data-id="11a1e1d7" data-element_type="section"
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
                    data-widget_type="heading.default" current_tab="6">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">{{__("Finally, let’s work on your")}}
                        </h4></div>
                </div>
                <div
                    class="elementor-element elementor-element-e0edac4 exad-sticky-section-no exad-glass-effect-no hello-element elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="e0edac4" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                    data-widget_type="heading.default" current_tab="6">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">{{__('Summary')}}</h3>
                    </div>
                </div>
                <div
                    class="elementor-element elementor-element-8fc8c3e exad-sticky-section-no exad-glass-effect-no hello-element elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="8fc8c3e" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                    data-widget_type="heading.default" current_tab="6">
                    <div class="elementor-widget-container">
                        <h6 class="elementor-heading-title elementor-size-default">{{__("Write a career summary to show companies how your background matches the job you want. If you’re applying for a job you haven’t done before, focus on your relevant experience and skills that the new job would use.")}}</h6></div>
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
    <div class="cv_summaries_tab elementor-container elementor-column-gap-custom">
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
                                <input name="summary_content" type="hidden" value="{{$addedItem->model->{"summary_content_".$cv_lang} }}">

                                <noscript class="wpforms-error-noscript">{{__('Please enable JavaScript in your browser to complete this form.')}}</noscript>
                                <div class="wpforms-field-container">
                                    <div id="wpforms-614-field_2-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                         data-field-id="2">
                                        <label class="wpforms-field-label"
                                               for="wpforms-614-field_2">{{__('Search for pre-written examples')}}</label>
                                        <input type="text" id="wpforms-614-field_2"
                                                                   class="wpforms-field-large"
                                                                   name="search_summaries_job_title"
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
    border-radius: 5px;" onclick="getAllSummariesRelatedToJobTitle()">{{__('Search')}}</button>
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
                                        <div id="summaries_suggestions">
                                        </div>
                                    </div>
                                    <div id="wpforms-614-field_1-container"
                                         class="wpforms-field wpforms-field-textarea"
                                         data-field-id="1">
                                        <label class="wpforms-field-label"
                                               for="wpforms-614-field_1">{{__('Professional summary')}}</label>
                                        @php $editor_id="wpforms-614-field_1" @endphp
                                        @if(!empty($addedItem) && count($addedItem->model->customer_cv_summery))
                                            @foreach($addedItem->model->customer_cv_summery as $addedSummary)
                                                <input type="hidden" class="summaries_idss" name="summaries_ids[]" value="{{$addedSummary->id}}"/>
                                            @endforeach
                                        @endif
                                        <x-cv.tiny_editor id="wpforms-614-field_1" :selector="$editor_id"
                                                          class="wpforms-field-medium summary_content"
                                                          name="content_{{$cv_lang}}">{!!$addedItem->model->{"summary_content_".$cv_lang}  !!}</x-cv.tiny_editor>
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
