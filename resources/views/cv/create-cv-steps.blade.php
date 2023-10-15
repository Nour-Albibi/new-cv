@extends('layouts.app')
@section('seo_section')
    <meta name="description" content="">
    <meta name="keywords" content="">
@stop
@section('custom_css')
    <link rel="stylesheet" id="elementor-post-293-css"
          href="{{asset('assets/uploads/elementor/css/post-293.css?ver=1696740455')}}" media="all" defer>
    <link rel="stylesheet" id="elementor-post-23-css"
          href="{{asset('assets/uploads/elementor/css/post-23.css?ver=1696667947')}}" media="all" defer>
    <link rel="stylesheet" id="elementor-post-55-css"
          href="{{asset('assets/uploads/elementor/css/post-55.css?ver=1695921314')}}" media="all" defer>
    <link rel="stylesheet" href="{{asset('assets/plugins/elementor-pro/assets/css/widget-animated-headline.min.css')}}"
          defer>
    <link rel="stylesheet" href="{{asset('assets/css/cv.css')}}" defer/>

@endsection
@section('main_content')
    <div data-elementor-type="wp-page" data-elementor-id="380" class="elementor elementor-380" data-elementor-post-type="page">
       @include('cv.steps_header')
        {{--Step 1 Personal Information--}}
        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                 class="cv_heading personal_information elementor-section elementor-top-section elementor-element elementor-element-7e247d83 elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                 data-id="7e247d83" data-element_type="section"
                 data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-container elementor-column-gap-no">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4e374572 exad-glass-effect-no exad-sticky-section-no"
                    data-id="4e374572" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                 class="elementor-section elementor-inner-section elementor-element elementor-element-3a52c3db elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                                 data-id="3a52c3db" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                <div
                                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-288112a6 exad-glass-effect-no exad-sticky-section-no"
                                    data-id="288112a6" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-15d81b13 exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="15d81b13" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h4 class="elementor-heading-title elementor-size-default">What’s the
                                                    best
                                                    way for employers to contact you?</h4></div>
                                        </div>
                                        <div
                                            class="elementor-element elementor-element-70622673 exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                                            data-id="70622673" data-element_type="widget"
                                            data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h6 class="elementor-heading-title elementor-size-default">We suggest
                                                    including an email and phone number.

                                                </h6></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                 class="elementor-section elementor-inner-section elementor-element elementor-element-5d58122e elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                                 data-id="5d58122e" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-custom">
                                <div
                                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-13ce14a1 exad-glass-effect-no exad-sticky-section-no"
                                    data-id="13ce14a1" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                 class="elementor-section elementor-inner-section elementor-element elementor-element-5fbcd1e4 exad-glass-effect-yes elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-sticky-section-no"
                                 data-id="5fbcd1e4" data-element_type="section"
                                 data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-container elementor-column-gap-custom">
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
                                                    <form id="wpforms-form-412"
                                                          class="wpforms-validate wpforms-form wpforms-ajax-form"
                                                          data-formid="412" method="post" enctype="multipart/form-data"
                                                          action="/c/cv-heading/?simply_static_page=1554&#038;wpforms_form_id=412"
                                                          data-token="bd03f5379139322e31b053c6ab97fff9">
                                                        <noscript class="wpforms-error-noscript">Please enable
                                                            JavaScript in
                                                            your browser to complete this form.
                                                        </noscript>
                                                        <div class="wpforms-field-container">
                                                            <div id="wpforms-412-field_2-container"
                                                                 class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                                                 data-field-id="2">
                                                                <label class="wpforms-field-label"
                                                                       for="wpforms-412-field_2">FIRST
                                                                    NAME</label><input
                                                                    type="text" id="wpforms-412-field_2"
                                                                    class="wpforms-field-large"
                                                                    name="wpforms[fields][2]"
                                                                    placeholder="FIRST NAME">
                                                            </div>
                                                            <div id="wpforms-412-field_3-container"
                                                                 class="wpforms-field wpforms-field-text wpforms-one-half wpforms-one-half"
                                                                 data-field-id="3">
                                                                <label class="wpforms-field-label"
                                                                       for="wpforms-412-field_3">SURNAME</label><input
                                                                    type="text" id="wpforms-412-field_3"
                                                                    class="wpforms-field-large"
                                                                    name="wpforms[fields][3]"
                                                                    placeholder="SURNAME">
                                                            </div>
                                                            <div id="wpforms-412-field_4-container"
                                                                 class="wpforms-field wpforms-field-phone wpforms-one-half wpforms-first"
                                                                 data-field-id="4">
                                                                <label class="wpforms-field-label"
                                                                       for="wpforms-412-field_4">Phone</label><input
                                                                    type="tel" id="wpforms-412-field_4"
                                                                    class="wpforms-field-large wpforms-smart-phone-field"
                                                                    data-rule-smart-phone-field="true"
                                                                    name="wpforms[fields][4]" placeholder="Phone">
                                                            </div>
                                                            <div id="wpforms-412-field_5-container"
                                                                 class="wpforms-field wpforms-field-email wpforms-one-half"
                                                                 data-field-id="5">
                                                                <label class="wpforms-field-label"
                                                                       for="wpforms-412-field_5">EMAIL
                                                                    ADDRESS</label><input
                                                                    type="email" id="wpforms-412-field_5"
                                                                    class="wpforms-field-large"
                                                                    name="wpforms[fields][5]"
                                                                    placeholder="EMAIL ADDRESS">
                                                            </div>
                                                            <div id="wpforms-412-field_6-container"
                                                                 class="wpforms-field wpforms-field-checkbox"
                                                                 data-field-id="6">
                                                                <ul id="wpforms-412-field_6">
                                                                    <li class="choice-1 depth-1">
                                                                        <input type="checkbox"
                                                                               id="wpforms-412-field_6_1"
                                                                               name="wpforms[fields][6][]"
                                                                               value="Open for remote work"><label
                                                                            class="wpforms-field-label-inline"
                                                                            for="wpforms-412-field_6_1">Open for remote
                                                                            work</label>
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
                                                                 class="wpforms-field wpforms-field-html"
                                                                 data-field-id="8">
                                                                <div id="wpforms-412-field_8"><h4>Home address</h4>
                                                                </div>
                                                            </div>
                                                            <div id="wpforms-412-field_13-container"
                                                                 class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                                                 data-field-id="13">
                                                                <label class="wpforms-field-label"
                                                                       for="wpforms-412-field_13">STREET
                                                                    ADDRESS</label><input type="text"
                                                                                          id="wpforms-412-field_13"
                                                                                          class="wpforms-field-large"
                                                                                          name="wpforms[fields][13]"
                                                                                          placeholder="STREET ADDRESS">
                                                            </div>
                                                            <div id="wpforms-412-field_14-container"
                                                                 class="wpforms-field wpforms-field-text wpforms-one-half"
                                                                 data-field-id="14">
                                                                <label class="wpforms-field-label"
                                                                       for="wpforms-412-field_14">CITY/TOWN</label><input
                                                                    type="text" id="wpforms-412-field_14"
                                                                    class="wpforms-field-large"
                                                                    name="wpforms[fields][14]"
                                                                    placeholder="CITY/TOWN">
                                                            </div>
                                                            <div id="wpforms-412-field_15-container"
                                                                 class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                                                 data-field-id="15">
                                                                <label class="wpforms-field-label"
                                                                       for="wpforms-412-field_15">COUNTY</label><input
                                                                    type="text" id="wpforms-412-field_15"
                                                                    class="wpforms-field-large"
                                                                    name="wpforms[fields][15]"
                                                                    placeholder="COUNTY">
                                                            </div>
                                                            <div id="wpforms-412-field_16-container"
                                                                 class="wpforms-field wpforms-field-text wpforms-one-half"
                                                                 data-field-id="16">
                                                                <label class="wpforms-field-label"
                                                                       for="wpforms-412-field_16">POSTCODE</label><input
                                                                    type="text" id="wpforms-412-field_16"
                                                                    class="wpforms-field-large"
                                                                    name="wpforms[fields][16]">
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
                                                                <div id="wpforms-412-field_19"><h4>Additional
                                                                        Information</h4></div>
                                                            </div>
                                                            <div id="wpforms-412-field_18-container"
                                                                 class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                                                 data-field-id="18">
                                                                <label class="wpforms-field-label"
                                                                       for="wpforms-412-field_18">LINKEDIN</label><input
                                                                    type="text" id="wpforms-412-field_18"
                                                                    class="wpforms-field-large"
                                                                    name="wpforms[fields][18]"
                                                                    placeholder="LINKEDIN">
                                                            </div>
                                                            <div id="wpforms-412-field_20-container"
                                                                 class="wpforms-field wpforms-field-text wpforms-one-half"
                                                                 data-field-id="20">
                                                                <label class="wpforms-field-label"
                                                                       for="wpforms-412-field_20">WEBSITE</label><input
                                                                    type="text" id="wpforms-412-field_20"
                                                                    class="wpforms-field-large"
                                                                    name="wpforms[fields][20]"
                                                                    placeholder="WEBSITE">
                                                            </div>
                                                            <div id="wpforms-412-field_21-container"
                                                                 class="wpforms-field wpforms-field-text wpforms-one-half wpforms-first"
                                                                 data-field-id="21">
                                                                <label class="wpforms-field-label"
                                                                       for="wpforms-412-field_21">DRIVING
                                                                    LICENCE</label><input type="text"
                                                                                          id="wpforms-412-field_21"
                                                                                          class="wpforms-field-large"
                                                                                          name="wpforms[fields][21]">
                                                            </div>
                                                            <div id="wpforms-412-field_22-container"
                                                                 class="wpforms-field wpforms-field-text wpforms-one-half"
                                                                 data-field-id="22">
                                                                <label class="wpforms-field-label"
                                                                       for="wpforms-412-field_22">NATIONALITY</label><input
                                                                    type="text" id="wpforms-412-field_22"
                                                                    class="wpforms-field-large"
                                                                    name="wpforms[fields][22]"
                                                                    placeholder="NATIONALITY">
                                                            </div>
                                                            <div id="wpforms-412-field_24-container"
                                                                 class="wpforms-field wpforms-field-file-upload"
                                                                 data-field-id="24">
                                                                <label class="wpforms-field-label"
                                                                       for="wpforms-412-field_24">Upload cv
                                                                    photograph</label>
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
                                                                        <span class="modern-title">
			Click or drag a file to this area to upload.		</span>

                                                                    </div>
                                                                </div>
                                                                <input type="text" class="dropzone-input"
                                                                       style="position:absolute!important;clip:rect(0,0,0,0)!important;height:1px!important;width:1px!important;border:0!important;overflow:hidden!important;padding:0!important;margin:0!important;"
                                                                       id="wpforms-412-field_24" name="wpforms_412_24">
                                                            </div>
                                                        </div>
                                                        <div class="wpforms-submit-container">
                                                            <input type="hidden" name="wpforms[id]" value="412"><input
                                                                type="hidden" name="wpforms[author]" value="1"><input
                                                                type="hidden" name="wpforms[post_id]" value="380">
                                                            <button type="submit" name="wpforms[submit]"
                                                                    class="wpforms-submit " id="wpforms-submit-412"
                                                                    value="wpforms-submit"
                                                                    aria-live="assertive"></button>
                                                            <img decoding="async"
                                                                 src="https://projects.datatime4it.com/chtml/wp-content/plugins/wpforms/assets/images/submit-spin.svg"
                                                                 class="wpforms-submit-spinner" style="display: none;"
                                                                 width="26" height="26" alt="">
                                                        </div>
                                                    </form>
                                                </div>  <!-- .wpforms-container -->        </div>
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
                                                        <a href="#">


												<span class="elementor-icon-list-icon">
							<i aria-hidden="true" class="far fa-eye"></i>						</span>
                                                            <span class="elementor-icon-list-text">preview</span>
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
                                                             src="https://projects.datatime4it.com/chtml/wp-content/uploads/2023/09/jtv21-cv9.svg"
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
                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                 class="elementor-section elementor-inner-section elementor-element elementor-element-5ce96e10 elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                                 data-id="5ce96e10" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-custom">
                                <div
                                    class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-769fa335 exad-glass-effect-no exad-sticky-section-no"
                                    data-id="769fa335" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section data-particle_enable="false" data-particle-mobile-disabled="false"
                                 class="elementor-section elementor-inner-section elementor-element elementor-element-d3fb953 elementor-section-full_width elementor-section-content-middle elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                                 data-id="d3fb953" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-custom">
                                <div
                                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-5944a38a exad-glass-effect-no exad-sticky-section-no"
                                    data-id="5944a38a" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-431474a5 elementor-align-left elementor-mobile-align-center exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-button"
                                            data-id="431474a5" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                                       href="start2.html">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Back</span>
		</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1aa3f9d6 exad-glass-effect-no exad-sticky-section-no"
                                    data-id="1aa3f9d6" data-element_type="column">
                                    <div class="elementor-widget-wrap">
                                    </div>
                                </div>
                                <div
                                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-11cb1708 exad-glass-effect-no exad-sticky-section-no"
                                    data-id="11cb1708" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div
                                            class="elementor-element elementor-element-24d99c42 elementor-align-right elementor-mobile-align-center exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-button"
                                            data-id="24d99c42" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                                       href="work-history.html">
						<span class="elementor-button-content-wrapper">
						<span class="elementor-button-text">Next: Work History</span>
		</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </section>
        @include('cv.wizard_footer')
    </div>

@endsection
@section('custom_js')
@endsection
