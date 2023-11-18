@if(!empty($hero_section))
    <section data-particle_enable="false" data-particle-mobile-disabled="false"
             class="elementor-section elementor-top-section elementor-element elementor-element-3f99e713 elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
             data-id="3f99e713" data-element_type="section"
             data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-28ce839 exad-glass-effect-no exad-sticky-section-no"
                data-id="28ce839" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-280c3bb2 exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="280c3bb2" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">{{$hero_section->{"sub_title_".$lang} }}</h2>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-4a24751b elementor-headline--style-highlight exad-sticky-section-no exad-glass-effect-no elementor-invisible elementor-widget elementor-widget-animated-headline"
                        data-id="4a24751b" data-element_type="widget"
                        data-settings="{&quot;highlighted_text&quot;:&quot; Perfect CV&quot;,&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200,&quot;headline_style&quot;:&quot;highlight&quot;,&quot;marker&quot;:&quot;circle&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;highlight_animation_duration&quot;:1200,&quot;highlight_iteration_delay&quot;:8000}"
                        data-widget_type="animated-headline.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-headline">
                                {!! $hero_section->{"main_title_".$lang}  !!}
                            </h2>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-4d0d179c exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-text-editor"
                        data-id="4d0d179c" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">
                            {{$hero_section->{"description_".$lang} }}
                        </div>
                    </div>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                             class="elementor-section elementor-inner-section elementor-element elementor-element-2229ec9e elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                             data-id="2229ec9e" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div
                                class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-2cfba647 exad-glass-effect-no exad-sticky-section-no"
                                data-id="2cfba647" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-7908336 elementor-align-left exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-button"
                                        data-id="7908336" data-element_type="widget"
                                        data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                                   href="{{route('cv.start')}}">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">{{__('home.Start Now')}}</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4ed7f6d7 exad-glass-effect-no exad-sticky-section-no"
                                data-id="4ed7f6d7" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <div
                class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-164d15c exad-glass-effect-no exad-sticky-section-no"
                data-id="164d15c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div
                        class="elementor-element elementor-element-66a98036 elementor-widget__width-auto elementor-absolute exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-spacer"
                        data-id="66a98036" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                        data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-4ef9b87a elementor-widget__width-auto elementor-absolute exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-spacer"
                        data-id="4ef9b87a" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                        data-widget_type="spacer.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-spacer">
                                <div class="elementor-spacer-inner"></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-19cf39ad elementor-widget__width-auto elementor-absolute elementor-view-default exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon"
                        data-id="19cf39ad" data-element_type="widget"
                        data-settings="{&quot;_position&quot;:&quot;absolute&quot;}"
                        data-widget_type="icon.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-wrapper">
                                <div class="elementor-icon">
                                    <i aria-hidden="true" class="fas fa-circle"></i></div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="elementor-element elementor-element-9dda159 elementor-skin-coverflow elementor-arrows-yes elementor-pagination-type-bullets elementor-pagination-position-outside exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-media-carousel"
                        data-id="9dda159" data-element_type="widget"
                        data-settings="{&quot;skin&quot;:&quot;coverflow&quot;,&quot;speed&quot;:200,&quot;autoplay_speed&quot;:3000,&quot;show_arrows&quot;:&quot;yes&quot;,&quot;pagination&quot;:&quot;bullets&quot;,&quot;autoplay&quot;:&quot;yes&quot;,&quot;loop&quot;:&quot;yes&quot;,&quot;pause_on_hover&quot;:&quot;yes&quot;,&quot;pause_on_interaction&quot;:&quot;yes&quot;,&quot;space_between&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]},&quot;space_between_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:10,&quot;sizes&quot;:[]}}"
                        data-widget_type="media-carousel.default">
                        <div class="elementor-widget-container">

                            <div class="elementor-swiper">
                                <div class="elementor-main-swiper swiper">
                                    <div class="swiper-wrapper">
                                        @foreach($hero_section->images as $slide_image)
                                            <div class="swiper-slide">
                                                <a href="#">
                                                    <div class="elementor-carousel-image" role="img"
                                                         aria-label="University-Student-Resume-Template-web1"
                                                         style="">
                                                        <img src="{{asset('files/'.$slide_image->image)}}" loading="lazy"/>
                                                    </div>
                                                </a></div>
                                        @endforeach
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="elementor-swiper-button elementor-swiper-button-prev" role="button"
                                         tabindex="0">
                                        <i aria-hidden="true" class="eicon-chevron-left"></i> <span
                                            class="elementor-screen-only">Previous</span>
                                    </div>
                                    <div class="elementor-swiper-button elementor-swiper-button-next" role="button"
                                         tabindex="0">
                                        <i aria-hidden="true" class="eicon-chevron-right"></i> <span
                                            class="elementor-screen-only">Next</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif
