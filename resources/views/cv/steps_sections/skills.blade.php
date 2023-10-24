<section data-particle_enable="false" data-particle-mobile-disabled="false"
         class="width100 section-tab elementor-section elementor-inner-section elementor-element elementor-element-15352d99 exad-glass-effect-yes elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-sticky-section-no"
         data-id="15352d99" data-element_type="section"
         data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-custom">
        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-49124a5a exad-glass-effect-no exad-sticky-section-no"
             data-id="49124a5a" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-20126956 exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                     data-id="20126956" data-element_type="widget"
                     data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                     data-widget_type="heading.default">
                    <div class="elementor-widget-container">
                        <h4 class="elementor-heading-title elementor-size-default">{{__('Highlight relevant skills for the job you want')}}</h4></div>
                </div>
                <div class="elementor-element elementor-element-4a953a8c exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                     data-id="4a953a8c" data-element_type="widget"
                     data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                     data-widget_type="heading.default">
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
                                <noscript class="wpforms-error-noscript">{{__('Please enable JavaScript in your browser to complete this form.')}}</noscript>
                                <div class="wpforms-field-container">
                                    <div id="wpforms-591-field_2-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                         data-field-id="2">
                                        <label class="wpforms-field-label"
                                               for="wpforms-591-field_2">{{_('Search for pre-written examples')}}</label>
                                        <input type="text" id="wpforms-591-field_2" class="wpforms-field-large"
                                                                   name="wpforms[fields][2]"
                                                                   placeholder="{{__('Search')}}">
                                    </div>
                                    <div id="wpforms-591-field_3-container"
                                         class="wpforms-field wpforms-field-html wpforms-one-half"
                                         data-field-id="3">
                                        <div id="wpforms-591-field_3">
                                            <button type="button" style="display: inline-block;
    vertical-align: middle;
    background: #024851;
    height: auto;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
    padding: 5px;
    margin-top: 27px;
    border-radius: 5px;">{{__('Search')}}
                                            </button>
                                        </div>
                                    </div>
                                    <div id="wpforms-591-field_1-container"
                                         class="wpforms-field wpforms-field-textarea wpforms-one-half wpforms-first"
                                         data-field-id="1">
                                        <label class="wpforms-field-label"
                                               for="wpforms-591-field_1">{{__('skills for the job you want')}}</label>
                                        @php $out=''; @endphp
                                        @if(!empty($addedItem) && count($addedItem->model->customer_cv_skill))
                                            @foreach($addedItem->model->customer_cv_skill as $addedSkill)
                                                <input type="hidden" class="skills_idss" name="skills_ids[]" value="{{$addedSkill->id}}"/>
                                               @php
                                                    $out.=$addedSkill->{"content_".$lang}.'</br>';
                                               @endphp
                                            @endforeach
                                            <textarea id="wpforms-591-field_1"
                                                      class="wpforms-field-medium skill_content"
                                                      name="content_{{$lang}}">
                                                {!! $out !!}
                                            </textarea>
                                       @else
                                        <textarea id="wpforms-591-field_1"
                                                                  class="wpforms-field-medium skill_content"
                                                                  name="content_{{$lang}}"></textarea>
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
