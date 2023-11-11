<section data-particle_enable="false" data-particle-mobile-disabled="false"
         class="section-tab width100 elementor-section elementor-inner-section elementor-element elementor-element-5fbcd1e4 exad-glass-effect-yes elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-sticky-section-no"
         data-id="5fbcd1e4" data-element_type="section"
         data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-container elementor-column-gap-custom ">
        <div
            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-48460c2e exad-glass-effect-no exad-sticky-section-no"
            data-id="48460c2e" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div
                    class="elementor-element elementor-element-6700379e exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-wpforms"
                    data-id="6700379e" data-element_type="widget"
                    data-widget_type="wpforms.default">
                    <div class="elementor-widget-container">
                        <div class="wpforms-container wpforms-container-full" id="wpforms-412">
                            <form id="cv_heading_form"
                                  class="wpforms-validate wpforms-form wpforms-ajax-form cv_heading_form"
                                  data-formid="412" method="post" enctype="multipart/form-data"
                                  action="{{route('cv.storeFirstStepData')}}"
                                  data-token="bd03f5379139322e31b053c6ab97fff9">
                                @csrf
                                <input type="hidden" name="item_hash" value="{{$addedItem->hash ?? ''}}"/>
                                <input type="hidden" name="step" value="0"/>
                                <input type="hidden" name="image_file" value="{{$addedItem->model->image ?? ''}}"/>
                                <input type="hidden" name="redirect_after_login"
                                       value="{{url('cv-builder/create?step=1')}}"/>
                                <noscript class="wpforms-error-noscript">
                                    {{__('Please enable JavaScript in your browser to complete this form.')}}
                                </noscript>
                                <div class="wpforms-field-container">
                                    <div id="wpforms-412-field_2-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                         data-field-id="2">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_2">{{__('FIRST NAME')}}</label><input
                                            type="text" id="wpforms-412-field_2"
                                            class="wpforms-field-large first_name input_required" required name="first_name"
                                            placeholder="{{__('FIRST NAME')}}"
                                            value="{{$addedItem->model->first_name ?? ''}}">
                                    </div>
                                    <div id="wpforms-412-field_3-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-one-half"
                                         data-field-id="3">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_3">{{__('SURNAME')}}</label><input
                                            type="text" id="wpforms-412-field_3"
                                            class="wpforms-field-large surename input_required" required name="surename"
                                            placeholder="{{__('SURNAME')}}"
                                            value="{{$addedItem->model->surename ?? ''}}">
                                    </div>
                                    <div id="wpforms-412-field_4-container"
                                         class="wpforms-field wpforms-field-phone wpforms-one-half wpforms-first"
                                         data-field-id="4">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_4">{{__('Phone')}}</label><input
                                            type="tel" id="wpforms-412-field_4"
                                            class="wpforms-field-large wpforms-smart-phone-field input_required"
                                            data-rule-smart-phone-field="true" required
                                            name="phone" placeholder="{{__('Phone')}}"
                                            value="{{$addedItem->model->phone ?? '+966'}}">
                                    </div>
                                    <div id="wpforms-412-field_5-container"
                                         class="wpforms-field wpforms-field-email wpforms-one-half"
                                         data-field-id="5">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_5">{{__('EMAIL ADDRESS')}}</label><input
                                            type="email" id="wpforms-412-field_5"
                                            class="wpforms-field-large" name="email"
                                            placeholder="{{__('EMAIL ADDRESS')}}"
                                            value="{{$addedItem->model->email ?? ''}}">
                                    </div>
                                    <div id="wpforms-412-field_6-container"
                                         class="wpforms-field wpforms-field-checkbox"
                                         data-field-id="6">
                                        <ul id="wpforms-412-field_6">
                                            <li class="choice-1 depth-1">
                                                <input type="checkbox" id="wpforms-412-field_6_1"
                                                       name="open_for_remote"
                                                       value="Open for remote work"
                                                       @if(isset($addedItem->model->open_for_remote) && !empty($addedItem->model->open_for_remote)) checked @endif><label
                                                    class="wpforms-field-label-inline"
                                                    for="wpforms-412-field_6_1">{{__('Open for remote work')}}</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <div id="wpforms-412-field_12-container"
                                         class="wpforms-field wpforms-field-html"
                                         data-field-id="12">
                                        <div id="wpforms-412-field_12">
                                            <hr>
                                        </div>
                                    </div>
                                    <div id="wpforms-412-field_8-container"
                                         class="wpforms-field wpforms-field-html" data-field-id="8">
                                        <div id="wpforms-412-field_8"><h4>{{__('Home address')}}</h4></div>
                                    </div>
                                    <div id="wpforms-412-field_13-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                         data-field-id="13">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_13">{{__('STREET ADDRESS')}}</label><input
                                            type="text"
                                            id="wpforms-412-field_13"
                                            class="wpforms-field-large"
                                            name="address_{{$cv_lang}}"
                                            placeholder="{{__('STREET ADDRESS')}}"
                                            value="{{$addedItem->model->{"address_".$cv_lang} ?? ''}}">
                                    </div>
                                    <div id="wpforms-412-field_14-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half"
                                         data-field-id="14">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_14">{{__('CITY/TOWN')}}</label><input
                                            type="text" id="wpforms-412-field_14"
                                            class="wpforms-field-large" name="city_town_{{$cv_lang}}"
                                            placeholder="{{__('CITY/TOWN')}}"
                                            value="{{$addedItem->model->{"city_town_".$cv_lang} ?? ''}}">
                                    </div>
                                    <div id="wpforms-412-field_15-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                         data-field-id="15">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_15">{{__('COUNTRY')}}</label><input
                                            type="text" id="wpforms-412-field_15"
                                            class="wpforms-field-large" name="country_{{$cv_lang}}"
                                            placeholder="{{__('COUNTRY')}}"
                                            value="{{$addedItem->model->{"country_".$cv_lang} ?? ''}}">
                                    </div>
                                    <div id="wpforms-412-field_16-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half"
                                         data-field-id="16">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_16">{{__('POSTCODE')}}</label><input
                                            type="text" id="wpforms-412-field_16"
                                            class="wpforms-field-large" name="postcode"
                                            value="{{$addedItem->model->postcode ?? ''}}">
                                    </div>
                                    <div id="wpforms-412-field_17-container"
                                         class="wpforms-field wpforms-field-html"
                                         data-field-id="17">
                                        <div id="wpforms-412-field_17">
                                            <hr>
                                        </div>
                                    </div>
                                    <div id="wpforms-412-field_19-container"
                                         class="wpforms-field wpforms-field-html"
                                         data-field-id="19">
                                        <div id="wpforms-412-field_19"><h4>{{__('Additional Information')}}</h4></div>
                                    </div>
                                    <div id="wpforms-412-field_18-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                         data-field-id="18" style="position:relative;z-index:2">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_18">{{__('LINKEDIN')}}</label><input
                                            type="text" id="wpforms-412-field_18"
                                            class="wpforms-field-large" name="linkedlin_url"
                                            placeholder="{{__('LINKEDIN')}}"
                                            value="{{$addedItem->model->linkedlin_url ?? ''}}">
                                    </div>
                                    <div id="wpforms-412-field_20-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half"
                                         data-field-id="20" style="position:relative;z-index:2">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_20">{{__('WEBSITE')}}</label><input
                                            type="text" id="wpforms-412-field_20"
                                            class="wpforms-field-large" name="website"
                                            placeholder="{{__('WEBSITE')}}"
                                            value="{{$addedItem->model->website ?? ''}}">
                                    </div>
                                    <div id="wpforms-412-field_21-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                         data-field-id="21" style="position:relative;z-index:2">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_21">{{__('DRIVING LICENCE')}}</label>
                                        <input type="text"
                                               id="wpforms-412-field_21"
                                               class="wpforms-field-large"
                                               name="driving_licence"
                                               value="{{$addedItem->model->driving_licence ?? ''}}">
                                    </div>
                                    <div id="wpforms-412-field_22-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half"
                                         data-field-id="22" style="position:relative;z-index:2">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_22">{{__('NATIONALITY')}}</label><input
                                            type="text" id="wpforms-412-field_22"
                                            class="wpforms-field-large" name="nationality"
                                            placeholder="{{__('NATIONALITY')}}"
                                            value="{{$addedItem->model->nationality ?? ''}}">
                                    </div>
                                </div>
                            </form>
                            @if($chosen_template->has_personal_image)
                                <div class="wpforms-field-container">
                                    <x-cv.upload_image_field :addedItem=$addedItem></x-cv.upload_image_field>
                                </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2ce79aa7 exad-glass-effect-no exad-sticky-section-no"
            data-id="2ce79aa7" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div
                    class="elementor-element elementor-element-687c8be elementor-align-center elementor-icon-list--layout-inline elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list"
                    data-id="687c8be" data-element_type="widget"
                    data-widget_type="icon-list.default">
                    <div class="elementor-widget-container">
                        <ul class="elementor-icon-list-items elementor-inline-items">
                            <li class="elementor-icon-list-item elementor-inline-item">
                                <a href="javascript:void(0)" onclick="previewCV()"><span class="elementor-icon-list-icon">
							            <i aria-hidden="true" class="far fa-eye"></i>
                                    </span>
                                    <span class="elementor-icon-list-text">{{__('preview')}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="elementor-element elementor-element-cc8a3ec exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-exad-exclusive-card"
                    data-id="cc8a3ec" data-element_type="widget"
                    data-widget_type="exad-exclusive-card.default">
                    <div class="elementor-widget-container">
                        <div class="exad-card left text_on_image yes">
                            <div class="exad-card-thumb">
{{--                                <img width="595" height="842"--}}
{{--                                     src="{{asset('files/'.$chosen_template->image)}}"--}}
{{--                                     class="attachment-full size-full wp-image-247 preview_cv_im_card" alt=""--}}
{{--                                     decoding="async">--}}
                                <x-cv.cv_template_modern_card :addedItem="$addedItem" :lang="$cv_lang"></x-cv.cv_template_modern_card>
                            </div>
                            <div class="exad-card-body"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
