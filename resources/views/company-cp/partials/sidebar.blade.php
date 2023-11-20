<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img">
                    <img src="@if(auth()->guard('company')->check()){{asset('files/images/'.Auth::guard('company')->user()->avatar)}}@endif" alt="" class="rounded-circle">
                    <span class="avatar-online bg-success"></span>
                </div>
                <div class="user-info">
                    <h5 class="mt-3 font-size-16 text-white">
                        @if(auth()->guard('company')->check())
                            <li class="elementor-icon-list-item elementor-inline-item">
                                <a href="#">
                                    <span
                                        class="elementor-icon-list-text">
                                        {{Auth::guard('company')->user()->first_name.' '.Auth::guard('company')->user()->last_name  }}
                                    </span>
                                </a>
                            </li>
                        @endif
                    </h5>
                    <span class="font-size-13 text-white-50">{{ __('Company') }} </span>
                </div>
            </div>
        </div>


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">{{ __('Menu') }}</li>

                <li>
                    <a href="{{route('company.dashboard')}}" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span>{{ __('Dashboard') }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('company.profile')}}" class=" waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span style="font-size: small;">{{ __('My Profile') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('company.subscriptions')}}" class=" waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span style="font-size: small;">{{ __('My Supcription') }} </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('company.find_cvs')}}" class=" waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span style="font-size: small;">{{ __('Find CVs & Download') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('company.chat')}}" class=" waves-effect">
                        <i class="dripicons-message"></i>
                        <span style="font-size: small;">{{ __('Chat') }}</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
