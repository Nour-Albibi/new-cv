<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img">
                    <img src="@if(!empty(Auth::guard('customer')->user()->avatar)){{asset('files/images/'.Auth::guard('customer')->user()->avatar)}} @else {{asset('customer-assets/images/avatar.png')}} @endif" alt="" class="rounded-circle">
                    <span class="avatar-online bg-success"></span>
                </div>
                <div class="user-info">
                    <h5 class="mt-3 font-size-16 text-white">

                        @if(auth()->guard('customer')->check())
                            <li class="elementor-icon-list-item elementor-inline-item">
                                <a href="{{ route('customer.dashboard') }}">
                                    <span
                                        class="elementor-icon-list-text">
                                        {{Auth::guard('customer')->user()->first_name.' '.Auth::guard('customer')->user()->last_name  }}
                                    </span>
                                </a>
                            </li>
                        @endif

                    </h5>
                    <span class="font-size-13 text-white-50">{{ __('Customer') }}</span>
                </div>
            </div>
        </div>



        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">{{__('Menu')}}</li>

                <li>
                    <a href="{{ route('customer.dashboard') }}" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span>{{ __('Dashboard') }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{ route('customer.CVs') }}" class=" waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span style="font-size: small;">{{ __('CV Managment') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('customer.subscriptions') }}" class=" waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span style="font-size: small;">{{ __('Supcription Managment') }}</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('customer.chat')}}" class=" waves-effect">
                        <i class="dripicons-message"></i>
                        <span style="font-size: small;">{{ __('Chat') }}</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('customer.viewedmyCV') }}" class=" waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span style="font-size: small;">{{ __('Viewed my CV') }}</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
