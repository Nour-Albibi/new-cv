<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{route('home_page')}}" class="logo logo-dark">
                            <span class="logo-sm">
                                <img src="{{asset('company-assets/images/b-logo.png')}}" alt="" height="22">
                            </span>
                    <span class="logo-lg">
                                <img src="{{asset('company-assets/images/b-logo.png')}}" alt="" height="20">
                            </span>
                </a>
                <a href="{{route('company.dashboard')}}" class="logo logo-light">
                            <span class="logo-sm">
                                <img src="{{asset('compnay-assets/images/b-logo.png')}}" alt="" height="22">
                            </span>
                    <span class="logo-lg">
                                <img src="{{asset('company-assets/images/b-logo.png')}}" alt="" height="20">
                            </span>
                </a>
            </div>
            <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect" id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="topbar-social-icon me-3 d-none d-md-block">
            </div>
        </div>
        <div class="d-flex">
            <div class="dropdown d-none d-md-block ms-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    @if(\Illuminate\Support\Facades\App::getLocale()=="ar")
                        <img src="{{asset('customer-assets/images/flags/arabic.png')}}" alt="user-image"
                             class="me-1"
                             height="22" loading="lazy">  {{__('Arabic')}} <span class="mdi mdi-chevron-down"></span>
                    @else
                        <img class="me-2" src="{{asset('customer-assets/images/flags/us.jpg')}}" alt="Header Language"
                             height="16"> English <span class="mdi mdi-chevron-down"></span>
                    @endif
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <form action="{{route('lang.change')}}" method="post"
                          enctype="multipart/form-data" id="form-language">
                        @csrf
                        <input type="hidden" name="sel_lang" value="{{getAnotherLanguage()}}">
                        <a href="javascript:void(0);" class="dropdown-item notify-item"
                           onclick="$('#form-language').submit()">
                            @if(getAnotherLanguage()=="ar")
                                <img src="{{asset('customer-assets/images/flags/arabic.png')}}" alt="user-image"
                                     class="me-1"
                                     height="22" loading="lazy"> <span class="align-middle"> {{__('Arabic')}} </span>
                            @else
                                <img class="me-2" src="{{asset('customer-assets/images/flags/us.jpg')}}"
                                     alt="Header Language"
                                     height="16"> English
                            @endif
                        </a>
                    </form>
                </div>
            </div>
            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                         src="@if(!empty(Auth::guard('company')->user()->avatar)){{asset('files/images/'.Auth::guard('company')->user()->avatar)}} @else {{asset('customer-assets/images/avatar.png')}} @endif"
                         alt="{{Auth::guard('company')->user()->username}}">
                    <span class="d-none d-xl-inline-block ms-1">
                            <li class="elementor-icon-list-item elementor-inline-item">
                                <a href="{{route('company.dashboard')}}">
                                    <span
                                        class="elementor-icon-list-text">
                                        {{Auth::guard('company')->user()->first_name}}
                                    </span>
                                </a>
                            </li>
                    </span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('company.profile') }}"><i
                            class="mdi mdi-account-circle-outline font-size-16 align-middle me-1"></i> {{__('Profile')}}</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('company.logout') }}"><i
                            class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i> {{__('Logout')}}</a>
                </div>
            </div>
        </div>
    </div>
</header>
