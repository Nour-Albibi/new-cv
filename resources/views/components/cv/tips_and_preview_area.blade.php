<section data-particle_enable="false" data-particle-mobile-disabled="false"
         class="elementor-section  elementor-inner-section elementor-element elementor-element-1b9df0c elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
         data-id="1b9df0c" data-element_type="section" style="padding-bottom:20px;">
    <div class="elementor-container elementor-column-gap-custom">
        {{ $slot }}
        <div
            class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-60deac1 exad-glass-effect-no exad-sticky-section-no"
            data-id="60deac1" data-element_type="column">
            <div class="elementor-widget-wrap">
            </div>
        </div>
        <div
            class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8c3e7a1 exad-glass-effect-no exad-sticky-section-no"
            data-id="8c3e7a1" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div
                    class="elementor-element elementor-element-df95746 elementor-align-center elementor-icon-list--layout-inline elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list"
                    data-id="df95746" data-element_type="widget"
                    data-widget_type="icon-list.default">
                    <div class="elementor-widget-container">
                        <ul class="elementor-icon-list-items elementor-inline-items">
                            <li class="elementor-icon-list-item elementor-inline-item">
                                <a href="javascript:void(0)" onclick="previewCV()">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="far fa-eye"></i>
                                        </span>
                                    <span class="elementor-icon-list-text">{{__('preview')}}</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div
                    class="elementor-element elementor-element-deb6ef1 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-exad-exclusive-card"
                    data-id="deb6ef1" data-element_type="widget"
                    data-widget_type="exad-exclusive-card.default">
                    <div class="elementor-widget-container">

                        <div class="exad-card left text_on_image yes">
                            <div class="exad-card-thumb" id="exad-card-thumb">
{{--                                <img width="595" height="842"--}}
{{--                                     src="{{asset('files/'.$ctemplate->image)}}"--}}
{{--                                     class="attachment-full size-full wp-image-247 preview_cv_im_card" alt=""--}}
{{--                                     decoding="async"/>--}}
                               @include('components.cv.cv_template_modern_card')
                            </div>
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
         class="elementor-section elementor-inner-section elementor-element elementor-element-46c4b769 elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
         data-id="46c4b769" data-element_type="section">
    <div class="elementor-container elementor-column-gap-custom">
        <div
            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-4ab2c735 exad-glass-effect-no exad-sticky-section-no"
            data-id="4ab2c735" data-element_type="column">
            <div class="elementor-widget-wrap">
            </div>
        </div>
        <div
            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9bdfd29 exad-glass-effect-no exad-sticky-section-no"
            data-id="9bdfd29" data-element_type="column">
            <div class="elementor-widget-wrap">
            </div>
        </div>
        <div
            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-59c921f exad-glass-effect-no exad-sticky-section-no"
            data-id="59c921f" data-element_type="column">
            <div class="elementor-widget-wrap">
            </div>
        </div>
        <div
            class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-753894a exad-glass-effect-no exad-sticky-section-no"
            data-id="753894a" data-element_type="column">
            <div class="elementor-widget-wrap">
            </div>
        </div>
    </div>
</section>
