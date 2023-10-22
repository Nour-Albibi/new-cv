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
                                <input type="hidden" name="step" value="0"/>
                                <input type="hidden" name="redirect_after_login" value="{{url('cv-builder/create?step=1')}}"/>
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
                                            class="wpforms-field-large input_required" required name="first_name"
                                            placeholder="{{__('FIRST NAME')}}" value="{{CVSession('customer_cv_data','first_name')}}">
                                    </div>
                                    <div id="wpforms-412-field_3-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-one-half"
                                         data-field-id="3">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_3">{{__('SURNAME')}}</label><input
                                            type="text" id="wpforms-412-field_3"
                                            class="wpforms-field-large input_required" required name="surename"
                                            placeholder="{{__('SURNAME')}}" value="{{CVSession('customer_cv_data','surename')}}">
                                    </div>
                                    <div id="wpforms-412-field_4-container"
                                         class="wpforms-field wpforms-field-phone wpforms-one-half wpforms-first"
                                         data-field-id="4">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_4">{{__('Phone')}}</label><input
                                            type="tel" id="wpforms-412-field_4"
                                            class="wpforms-field-large wpforms-smart-phone-field input_required"
                                            data-rule-smart-phone-field="true" required
                                            name="phone" placeholder="{{__('Phone')}}" value="{{CVSession('customer_cv_data','phone')}}">
                                    </div>
                                    <div id="wpforms-412-field_5-container"
                                         class="wpforms-field wpforms-field-email wpforms-one-half"
                                         data-field-id="5">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_5">{{__('EMAIL ADDRESS')}}</label><input
                                            type="email" id="wpforms-412-field_5"
                                            class="wpforms-field-large" name="email"
                                            placeholder="{{__('EMAIL ADDRESS')}}" value="{{CVSession('customer_cv_data','email')}}">
                                    </div>
                                    <div id="wpforms-412-field_6-container"
                                         class="wpforms-field wpforms-field-checkbox"
                                         data-field-id="6">
                                        <ul id="wpforms-412-field_6">
                                            <li class="choice-1 depth-1">
                                                <input type="checkbox" id="wpforms-412-field_6_1"
                                                       name="open_for_remote"
                                                       value="Open for remote work"><label
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
                                               for="wpforms-412-field_13">{{__('STREET ADDRESS')}}</label><input type="text"
                                                                  id="wpforms-412-field_13"
                                                                  class="wpforms-field-large"
                                                                  name="address_{{$lang}}"
                                                                  placeholder="{{__('STREET ADDRESS')}}" value="{{CVSession('customer_cv_data','address_'.$lang)}}">
                                    </div>
                                    <div id="wpforms-412-field_14-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half"
                                         data-field-id="14">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_14">{{__('CITY/TOWN')}}</label><input
                                            type="text" id="wpforms-412-field_14"
                                            class="wpforms-field-large" name="city_town_{{$lang}}"
                                            placeholder="{{__('CITY/TOWN')}}" value="{{CVSession('customer_cv_data','city_town_'.$lang)}}">
                                    </div>
                                    <div id="wpforms-412-field_15-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                         data-field-id="15">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_15">{{__('COUNTRY')}}</label><input
                                            type="text" id="wpforms-412-field_15"
                                            class="wpforms-field-large" name="country_{{$lang}}"
                                            placeholder="{{__('COUNTRY')}}" value="{{CVSession('customer_cv_data','country_'.$lang)}}">
                                    </div>
                                    <div id="wpforms-412-field_16-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half"
                                         data-field-id="16">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_16">{{__('POSTCODE')}}</label><input
                                            type="text" id="wpforms-412-field_16"
                                            class="wpforms-field-large" name="postcode" value="{{CVSession('customer_cv_data','postcode')}}">
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
                                         data-field-id="18">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_18">{{__('LINKEDIN')}}</label><input
                                            type="text" id="wpforms-412-field_18"
                                            class="wpforms-field-large" name="linkedin"
                                            placeholder="{{__('LINKEDIN')}}" value="{{CVSession('customer_cv_data','linkedin')}}">
                                    </div>
                                    <div id="wpforms-412-field_20-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half"
                                         data-field-id="20">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_20">{{__('WEBSITE')}}</label><input
                                            type="text" id="wpforms-412-field_20"
                                            class="wpforms-field-large" name="website"
                                            placeholder="{{__('WEBSITE')}}" value="{{CVSession('customer_cv_data','website')}}">
                                    </div>
                                    <div id="wpforms-412-field_21-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                         data-field-id="21">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_21">{{__('DRIVING LICENCE')}}</label>
                                        <input type="text"
                                                                  id="wpforms-412-field_21"
                                                                  class="wpforms-field-large"
                                                                  name="driving_licence" value="{{CVSession('customer_cv_data','driving_licence')}}">
                                    </div>
                                    <div id="wpforms-412-field_22-container"
                                         class="wpforms-field wpforms-field-text wpforms-one-half"
                                         data-field-id="22">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_22">{{__('NATIONALITY')}}</label><input
                                            type="text" id="wpforms-412-field_22"
                                            class="wpforms-field-large" name="nationality"
                                            placeholder="{{__('NATIONALITY')}}" value="{{CVSession('customer_cv_data','nationality')}}">
                                    </div>
                                    <div id="wpforms-412-field_24-container"
                                         class="wpforms-field wpforms-field-file-upload"
                                         data-field-id="24">
                                        <label class="wpforms-field-label"
                                               for="wpforms-412-field_24">{{__('Upload cv photograph')}}</label>
                                        <div class="wpforms-uploader" data-field-id="24"
                                             data-form-id="412" data-input-name="wpforms_412_24"
                                             data-extensions="jpg,jpeg,jpe,gif,png,bmp,tiff,tif,webp,ico,heic,asf,asx,wmv,wmx,wm,avi,divx,mov,qt,mpeg,mpg,mpe,mp4,m4v,ogv,webm,mkv,3gp,3gpp,3g2,3gp2,txt,asc,c,cc,h,srt,csv,tsv,ics,rtx,css,vtt,mp3,m4a,m4b,aac,ra,ram,wav,ogg,oga,flac,mid,midi,wma,wax,mka,rtf,pdf,class,tar,zip,gz,gzip,rar,7z,psd,xcf,doc,pot,pps,ppt,wri,xla,xls,xlt,xlw,mpp,docx,docm,dotx,dotm,xlsx,xlsm,xlsb,xltx,xltm,xlam,pptx,pptm,ppsx,ppsm,potx,potm,ppam,sldx,sldm,onetoc,onetoc2,onepkg,oxps,xps,odt,odp,ods,odg,odc,odb,odf,wp,wpd,key,numbers,pages"
                                             data-max-size="209715200" data-max-file-number="1"
                                             data-post-max-size="209715200"
                                             data-max-parallel-uploads="4"
                                             data-parallel-uploads="true"
                                             data-file-chunk-size="2097152">
                                            <div class="dz-message">
                                                <svg viewbox="0 0 1024 1024" focusable="false"
                                                     class="" data-icon="inbox" width="50px"
                                                     height="50px" fill="#B1B1B1"
                                                     aria-hidden="true">
                                                    <path
                                                        d="M885.2 446.3l-.2-.8-112.2-285.1c-5-16.1-19.9-27.2-36.8-27.2H281.2c-17 0-32.1 11.3-36.9 27.6L139.4 443l-.3.7-.2.8c-1.3 4.9-1.7 9.9-1 14.8-.1 1.6-.2 3.2-.2 4.8V830a60.9 60.9 0 0 0 60.8 60.8h627.2c33.5 0 60.8-27.3 60.9-60.8V464.1c0-1.3 0-2.6-.1-3.7.4-4.9 0-9.6-1.3-14.1zm-295.8-43l-.3 15.7c-.8 44.9-31.8 75.1-77.1 75.1-22.1 0-41.1-7.1-54.8-20.6S436 441.2 435.6 419l-.3-15.7H229.5L309 210h399.2l81.7 193.3H589.4zm-375 76.8h157.3c24.3 57.1 76 90.8 140.4 90.8 33.7 0 65-9.4 90.3-27.2 22.2-15.6 39.5-37.4 50.7-63.6h156.5V814H214.4V480.1z"></path>
                                                </svg>
                                                <span class="modern-title">{{__('Click or drag a file to this area to upload.')}}</span>
                                            </div>
                                        </div>
                                        <input type="text" class="dropzone-input"
                                               style="position:absolute!important;clip:rect(0,0,0,0)!important;height:1px!important;width:1px!important;border:0!important;overflow:hidden!important;padding:0!important;margin:0!important;"
                                               id="wpforms-412-field_24" name="image" value="{{CVSession('customer_cv_data','image')}}">
                                    </div>
                                </div>
                            </form>
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
                                <a href="#"><span class="elementor-icon-list-icon">
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
                                <img width="595" height="842"
                                     src="{{asset('files/'.$chosen_template->image)}}"
                                     class="attachment-full size-full wp-image-247" alt=""
                                     decoding="async"></div>
                            <div class="exad-card-body">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
