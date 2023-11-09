<div data-elementor-type="header" data-elementor-id="23" class="elementor elementor-23 elementor-location-header"
     data-elementor-post-type="elementor_library">
    <section data-particle_enable="false" data-particle-mobile-disabled="false"
             class="elementor-section elementor-top-section elementor-element elementor-element-600578a9 elementor-section-boxed elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
             data-id="600578a9" data-element_type="section">
        <div class="elementor-container elementor-column-gap-no">
            <div
                class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-fe964bb exad-glass-effect-no exad-sticky-section-no"
                data-id="fe964bb" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                             class="elementor-section elementor-inner-section elementor-element elementor-element-5b2dba36 elementor-section-full_width elementor-section-height-default elementor-section-height-default exad-glass-effect-no exad-sticky-section-no"
                             data-id="5b2dba36" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div
                                class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4c6a59ff elementor-hidden-tablet elementor-hidden-mobile exad-glass-effect-no exad-sticky-section-no"
                                data-id="4c6a59ff" data-element_type="column">
                                <div class="elementor-widget-wrap">
                                </div>
                            </div>
                            <div
                                class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-34818f52 exad-glass-effect-no exad-sticky-section-no"
                                data-id="34818f52" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-634a914d elementor-icon-list--layout-inline elementor-align-right elementor-tablet-align-center elementor-mobile-align-center elementor-list-item-link-full_width exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-icon-list"
                                        data-id="634a914d" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items elementor-inline-items">
                                                <li class="elementor-icon-list-item elementor-inline-item">
                                                    <a href="#">
												<span class="elementor-icon-list-icon">
													<i class="fa fa-language" aria-hidden="true"></i>
												</span>
                                                        <span class="elementor-icon-list-text">AR</span>
                                                    </a>
                                                </li>
                                                @if(auth()->guard('customer')->check())
                                                    <li class="elementor-icon-list-item elementor-inline-item  profile dropdown " style="position:relative;">
                                                        <a class="dropdown-toggle" href="{{route('customer.dashboard')}}" role="button" id="profile_dropdown_list" data-toggle="dropdown"
                                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span
                                                                class="elementor-icon-list-text">{{__('My Profile')}}</span>
                                                        </a>
                                                    </li>
                                                @elseif(auth()->guard('company')->check())
                                                    <li class="elementor-icon-list-item elementor-inline-item  profile dropdown ">
                                                        <a class="dropdown-toggle" href="#" role="button" id="profile_dropdown_list" data-toggle="dropdown"
                                                           data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <span
                                                                class="elementor-icon-list-text">{{__('My Profile')}}</span>
                                                        </a>
                                                        <div class="dropdown-content" aria-labelledby="profile_dropdown_list">
                                                                <ul class="profile_list">
                                                                        <li class="dropdown-item">
                                                                            <a href="{{route('customer.dashboard')}}"><span>{{__('Dashboard')}}</span></a>
                                                                        </li>
                                                                        <li class="dropdown-item">
                                                                            <a href="{{route('customer.logout')}}"><span>{{__('Logout')}}</span></a>
                                                                        </li>
                                                                </ul>
                                                        </div>
                                                    </li>
                                                @else
                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                        <a href="{{route('customer.login')}}">
                                                            <span
                                                                class="elementor-icon-list-text">{{__('Sign in')}}</span>
                                                        </a>
                                                    </li>
                                                    <li class="elementor-icon-list-item elementor-inline-item">
                                                        <a href="{{route('customer.register')}}">
                                                            <span
                                                                class="elementor-icon-list-text">{{__('Sign up')}}</span>
                                                        </a>
                                                    </li>
                                                @endif
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section data-particle_enable="false" data-particle-mobile-disabled="false"
                             class="elementor-section elementor-inner-section elementor-element elementor-element-59f620c4 elementor-section-full_width exad-glass-effect-yes elementor-section-height-default elementor-section-height-default exad-sticky-section-no"
                             data-id="59f620c4" data-element_type="section"
                             data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-1a25e3d4 exad-glass-effect-no exad-sticky-section-no"
                                data-id="1a25e3d4" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-2e4e6e0b exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-image"
                                        data-id="2e4e6e0b" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <a href="{{route('home_page')}}">
                                                <img width="553" height="110"
                                                     src="{{asset('assets/uploads/2023/09/b-logo.png')}}"
                                                     class="attachment-large size-large wp-image-57" alt=""
                                                     srcset="{{asset('assets/uploads/2023/09/b-logo.png')}} 553w, {{asset('assets/uploads/2023/09/b-logo-300x60.png')}} 300w"
                                                     sizes="(max-width: 553px) 100vw, 553px"> </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-51d1bfce exad-glass-effect-no exad-sticky-section-no"
                                data-id="51d1bfce" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-3cb49089 elementor-nav-menu__align-right elementor-nav-menu--stretch elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-nav-menu"
                                        data-id="3cb49089" data-element_type="widget"
                                        data-settings="{&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-angle-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;toggle&quot;:&quot;burger&quot;}"
                                        data-widget_type="nav-menu.default">
                                        <div class="elementor-widget-container">
                                            <nav
                                                class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-drop-out">
                                                <ul id="menu-1-3cb49089" class="elementor-nav-menu">
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-96">
                                                        <a href="#"
                                                           class="elementor-item elementor-item-anchor">{{__('Cover Letter')}}</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-98">
                                                        <a href="#"
                                                           class="elementor-item elementor-item-anchor">{{__('CV Templates')}}</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-99">
                                                        <a href="#"
                                                           class="elementor-item elementor-item-anchor">{{__('About us')}}</a>
                                                    </li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-97">
                                                        <a href="{{route('contact.index')}}"
                                                           class="elementor-item elementor-item-anchor">{{__('Contact us')}}</a>
                                                    </li>
                                                </ul>
                                            </nav>
                                            <div class="elementor-menu-toggle" role="button" tabindex="0"
                                                 aria-label="Menu Toggle" aria-expanded="false">
                                                <i aria-hidden="true" role="presentation"
                                                   class="elementor-menu-toggle__icon--open fa fa-bars"></i><i
                                                    aria-hidden="true" role="presentation"
                                                    class="elementor-menu-toggle__icon--close fa fa-window-close"></i>
                                                <span class="elementor-screen-only">{{__('Menu')}}</span>
                                            </div>
                                            <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container"
                                                 aria-hidden="true">
                                                <ul id="menu-2-3cb49089" class="elementor-nav-menu">
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-96">
                                                        <a href="#" class="elementor-item elementor-item-anchor"
                                                           tabindex="-1">{{__('Cover Letter')}}</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-98">
                                                        <a href="#" class="elementor-item elementor-item-anchor"
                                                           tabindex="-1">{{__('CV Templates')}}</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-99">
                                                        <a href="#" class="elementor-item elementor-item-anchor"
                                                           tabindex="-1">{{__('About us')}}</a></li>
                                                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-97">
                                                        <a href="{{route('contact.index')}}" class="elementor-item elementor-item-anchor"
                                                           tabindex="-1">{{__('Contact us')}}</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-13625a2b elementor-hidden-tablet elementor-hidden-mobile exad-glass-effect-no exad-sticky-section-no"
                                data-id="13625a2b" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div
                                        class="elementor-element elementor-element-784aeec6 elementor-align-right exad-sticky-section-no exad-glass-effect-no elementor-widget elementor-widget-button"
                                        data-id="784aeec6" data-element_type="widget"
                                        data-widget_type="button.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                                   href="{{route('cv.start')}}"><span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">{{__('Start Now')}}</span>
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
</div>
