<header id="page-topbar">
    <div class="navbar-header">
        <div class="d-flex">

            <!-- LOGO -->
            <div class="navbar-brand-box">
                <a href="{{route('home_page')}}" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{asset('customer-assets/images/b-logo.png')}}" alt="" height="22">
                </span>
                    <span class="logo-lg">
                    <img src="{{asset('customer-assets/images/b-logo.png')}}" alt="" height="20">
                </span>
                </a>

                <a href="{{route('customer.dashboard')}}" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{asset('customer-assets/images/b-logo.png')}}" alt="" height="22">
                </span>
                    <span class="logo-lg">
                    <img src="{{asset('customer-assets/images/b-logo.png')}}" alt="" height="20">
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
                    <img class="me-2" src="{{asset('customer-assets/images/flags/us.jpg')}}" alt="Header Language"
                         height="16"> English <span class="mdi mdi-chevron-down"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="{{asset('customer-assets/images/flags/arabic.png')}}" alt="user-image" class="me-1"
                             height="22" loading="lazy"> <span class="align-middle"> {{__('Arabic')}} </span>
                    </a>
                </div>
            </div>

            <div class="dropdown d-none d-lg-inline-block ms-1">
                <button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
                    <i class="mdi mdi-fullscreen"></i>
                </button>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item noti-icon waves-effect"
                        id="page-header-notifications-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-bell-outline bx-tada"></i>
                    <span class="badge bg-danger rounded-pill">{{$notifications->count()}}</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                     aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="m-0"> Notifications </h6>
                            </div>
                            <div class="col-auto">
                                <a href="{{route('customer.viewedmyCV')}}" class="small"> View All</a>
                            </div>
                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        @if($notifications->count() == 0)
                            <div class="notifications-empty text-center">
                                <h6 class="mt-0 mb-1"> {{ __('No New notifications') }}</h6>
                            </div>
                        @else
                            @foreach($notifications as $notification)
                                <a href="" class="text-reset notification-item">
                                    <div class="media">
                                        <div class="avatar-xs me-3">
                                    <span class="avatar-title bg-primary rounded-circle font-size-16">
                                        <i class="mdi mdi-cart text-white"></i>
                                    </span>
                                        </div>
                                        <div class="media-body">
                                            <h6 class="mt-0 mb-1">@if(isset($notification->data['company_name'])){{__('You have new view From: ').$notification->data['company_name']}} @endif</h6>
                                            <div class="font-size-13 text-muted">
                                                <p class="mb-1">{{__(' CV: ').$notification->data['view_cv']['cv_id'] ?? ''}}</p>
                                                <p class="mb-0"><i class="mdi mdi-clock-outline"></i>{{ (new \DateTime($notification->data['view_cv']['created_at']))->format('Y-m-d H:i:s')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </div>
                    <div class="p-2 border-top">
                        <a class="btn btn-sm btn-link font-size-14 w-100 text-center"
                           href="{{route('customer.viewedmyCV')}}">
                            <i class="mdi mdi-arrow-right-circle me-1"></i> View More..
                        </a>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user"
                         src="@if(!empty(Auth::guard('customer')->user()->avatar)){{asset('files/images/'.Auth::guard('customer')->user()->avatar)}} @else {{asset('customer-assets/images/avatar.png')}} @endif"
                         alt="{{Auth::guard('customer')->user()->username}}">
                    <span class="d-none d-xl-inline-block ms-1">
                            <li class="elementor-icon-list-item elementor-inline-item">
                                <a href="{{route('customer.dashboard')}}">
                                    <span
                                        class="elementor-icon-list-text">
                                        {{Auth::guard('customer')->user()->first_name}}
                                    </span>
                                </a>
                            </li>
                    </span>
                    <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('customer.myprofile') }}"><i
                            class="mdi mdi-account-circle-outline font-size-16 align-middle me-1"></i> Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item text-danger" href="{{ route('customer.logout') }}"><i
                            class="mdi mdi-power font-size-16 align-middle me-1 text-danger"></i> Logout</a>
                </div>
            </div>
        </div>
    </div>
</header>

