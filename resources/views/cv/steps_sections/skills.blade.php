<section data-particle_enable="false" data-particle-mobile-disabled="false"
         class="skills_tab_container elementor-454 width100 section-tab elementor-section elementor-inner-section elementor-element elementor-element-15352d99 exad-glass-effect-yes elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-sticky-section-no"
         data-id="15352d99" data-element_type="section">
    <x-cv.tips_and_preview_area :ctemplate="$chosen_template" :addedItem="$addedItem" :lang="$cv_lang">
        {{--Custom  Tips Area--}}
        <div class="tips_area elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5f785b4 exad-glass-effect-no exad-sticky-section-no"
             data-id="5f785b4" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div
                    class="elementor-element elementor-element-98451db exad-sticky-section-no exad-glass-effect-no hello-element elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="98451db" data-element_type="widget"
                    data-widget_type="heading.default" current_tab="5">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">{{__("Next, let’s take care of your")}}
                        </h4></div>
                </div>
                <div
                    class="elementor-element elementor-element-e0edac4 exad-sticky-section-no exad-glass-effect-no hello-element elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="e0edac4" data-element_type="widget"
                    data-widget_type="heading.default" current_tab="5">
                    <div class="elementor-widget-container">
                        <h3 class="elementor-heading-title elementor-size-default">{{__('Skills')}}</h3>
                    </div>
                </div>
                <div
                    class="elementor-element elementor-element-8fc8c3e exad-sticky-section-no exad-glass-effect-no hello-element elementor-invisible elementor-widget elementor-widget-heading"
                    data-id="8fc8c3e" data-element_type="widget"
                    data-widget_type="heading.default" current_tab="5">
                    <div class="elementor-widget-container">
                        <h6 class="elementor-heading-title elementor-size-default">{{__("Add four to eight skills from your previous jobs relevant to the job you want. We’ll suggest ones with keywords employers look for based on your title. Don’t have previous experience in the job you’re applying for? Try adding some of the skills suggested for that job title to show you can do it.")}}</h6></div>
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
    <div class="skills_tab elementor-container elementor-column-gap-custom">
        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-49124a5a exad-glass-effect-no exad-sticky-section-no"
             data-id="49124a5a" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-20126956 exad-sticky-section-no exad-glass-effect-no hello-element elementor-invisible elementor-widget elementor-widget-heading"
                     data-id="20126956" data-element_type="widget"
                     data-widget_type="heading.default" current_tab="5">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">{{__('Highlight relevant skills for the job you want')}}</h4></div>
                </div>
                <div class="elementor-element elementor-element-4a953a8c exad-sticky-section-no exad-glass-effect-no hello-element elementor-invisible elementor-widget elementor-widget-heading"
                     data-id="4a953a8c" data-element_type="widget"
                     data-widget_type="heading.default" current_tab="5">
                    <div class="elementor-widget-container">
                        <h6 class="elementor-heading-title elementor-size-default">{{__('Start with our
                            expert recommendations by job title or pull the skills required from the
                            job description')}}</h6></div>
                </div>
                <div class="elementor-element elementor-element-40c1aed5 elementor-hidden-tablet elementor-hidden-mobile exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-wpforms"
                     data-id="40c1aed5" data-element_type="widget"
                     data-widget_type="wpforms.default">
                    <div class="elementor-widget-container">
                        <div class="wpforms-container wpforms-container-full" id="wpforms-591">
                            <form id="skills_form" class="wpforms-validate wpforms-form"
                                  data-formid="591" method="post" enctype="multipart/form-data"
                                  action="/"
                                  data-token="bd03f5379139322e31b053c6ab97fff9">
                                @csrf
                                <input name="skills_content" type="hidden" value="@if(!empty($addedItem)){{$addedItem->model->{"skills_content_".$cv_lang} }}@endif">
                                <noscript class="wpforms-error-noscript">{{__('Please enable JavaScript in your browser to complete this form.')}}</noscript>
                                <div class="wpforms-field-container">
                                    <div id="wpforms-591-field_2-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                         data-field-id="2">
                                        <label class="wpforms-field-label"
                                               for="wpforms-591-field_2">{{_('Search for pre-written examples')}}</label>
                                        <input type="text" id="wpforms-591-field_2" class="wpforms-field-large"
                                                                   name="search_skills_job_title"
                                                                   placeholder="{{__('Search Skills for Specific Job Title')}}">
                                    </div>
                                    <div id="wpforms-591-field_3-container"
                                         class="wpforms-field wpforms-field-html wpforms-one-half"
                                         data-field-id="3">
                                        <div id="wpforms-591-field_3">
                                            <button type="button" class="skills_search_button" onclick="getAllSkillRelatedToJobTitle()">{{__('Search')}}</button>
                                        </div>
                                    </div>
                                    <div id="wpforms-591-field_1-container"
                                         class="wpforms-field wpforms-field-textarea wpforms-one-half wpforms-first"
                                         data-field-id="1">
                                        <label class="wpforms-field-label"
                                               for="wpforms-591-field_1">{{__('skills for the job you want')}}</label>
                                        @php $out=''; @endphp
                                        @php $editor_id="wpforms-591-field_1" @endphp
                                        @if(!empty($addedItem) && count($addedItem->model->customer_cv_skill))
                                            @foreach($addedItem->model->customer_cv_skill as $addedSkill)
                                                <input type="hidden" class="skills_idss" name="skills_ids[]" value="{{$addedSkill->id}}"/>
                                            @endforeach
                                                <x-cv.tiny_editor id="wpforms-591-field_1" :selector="$editor_id"
                                                                  class="wpforms-field-medium skill_content"
                                                                  name="content_{{$cv_lang}}">{!! $addedItem->model->{"skill_content_".$cv_lang}  !!}</x-cv.tiny_editor>
                                       @else
                                        <x-cv.tiny_editor id="wpforms-591-field_1" class="wpforms-field-medium skill_content"
                                                            name="content_{{$cv_lang}}" :selector="$editor_id"></x-cv.tiny_editor>
                                        <input type="hidden" class="skills_idss" name="skills_ids[]" value=""/>
                                        @endif
                                    </div>
                                    <div id="wpforms-591-field_4-container"
                                         class="wpforms-field wpforms-field-html wpforms-one-half"
                                         data-field-id="4">
                                        <div id="skills_suggestions">
                                        </div>
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
