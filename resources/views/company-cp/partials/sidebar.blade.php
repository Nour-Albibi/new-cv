<div class="vertical-menu">

    <div data-simplebar class="h-100">


        <div class="user-sidebar text-center">
            <div class="dropdown">
                <div class="user-img">
                    <img src="{{asset('company-assets/images/users/img-7.png')}}" alt="" class="rounded-circle">
                    <span class="avatar-online bg-success"></span>
                </div>
                <div class="user-info">
                    <h5 class="mt-3 font-size-16 text-white">James 1</h5>
                    <span class="font-size-13 text-white-50">Company </span>
                </div>
            </div>
        </div>


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{route('company.dashboard')}}" class="waves-effect">
                        <i class="dripicons-home"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="{{route('company.profile')}}" class=" waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span style="font-size: small;">My Profile</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('company.subscriptions')}}" class=" waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span style="font-size: small;">My Supcription </span>
                    </a>
                </li>
                <li>
                    <a href="{{route('company.find_cvs')}}" class=" waves-effect">
                        <i class="dripicons-calendar"></i>
                        <span style="font-size: small;">Find CVs & Download</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('company.chat')}}" class=" waves-effect">
                        <i class="dripicons-message"></i>
                        <span style="font-size: small;">Chat</span>
                    </a>
                </li>


            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
