@if(!empty($clients))
    <section data-particle_enable="false" data-particle-mobile-disabled="false"
             class="elementor-section elementor-top-section elementor-element elementor-element-78d8ade8 elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
             data-id="78d8ade8" data-element_type="section"
             data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
        <div class="elementor-container elementor-column-gap-no">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-692b57d2 exad-glass-effect-no exad-sticky-section-no"
                data-id="692b57d2" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                             class="elementor-section elementor-inner-section elementor-element elementor-element-73b8fb0a elementor-section-full_width exad-glass-effect-yes elementor-section-height-default elementor-section-height-default exad-sticky-section-no elementor-invisible"
                             data-id="73b8fb0a" data-element_type="section"
                             data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div
                                class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-73f1bae4 exad-glass-effect-no exad-sticky-section-no"
                                data-id="73f1bae4" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-111d0603 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-heading"
                                        data-id="111d0603" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h4 class="elementor-heading-title elementor-size-default">{{__('Our Clients')}}
                                            </h4></div>
                                    </div>
                                    <div
                                        class="elementor-element elementor-element-7654d7f6 exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-exad-logo-carousel"
                                        data-id="7654d7f6" data-element_type="widget"
                                        data-widget_type="exad-logo-carousel.default">
                                        <div class="elementor-widget-container">
                                            <div class="exad-logo-carousel">
                                                <div
                                                    class="exad-logo-carousel-element exad-logo-carousel-max-height-no"
                                                    data-carousel-nav="none" data-slidestoshow="4"
                                                    data-slidestoshow-tablet="3" data-slidestoshow-mobile="2"
                                                    data-slidestoscroll="1" data-direction="false" data-loop="true"
                                                    data-autoplay="true" data-autoplayspeed="5000"
                                                    data-smooth="true"
                                                    data-smooth-speed="2000">
                                                    @foreach($clients as $client)
                                                    <div class="exad-logo-carousel-item exad-logo-carousel-center">
                                                        <img width="709" height="284"
                                                             src="{{asset('files/'.$client->image)}}"
                                                             class="attachment-full size-full wp-image-113" alt=""
                                                             decoding="async"
                                                             sizes="(max-width: 709px) 100vw, 709px" loading="lazy">
                                                    </div>
                                                    @endforeach
                                                </div>
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
@endif
