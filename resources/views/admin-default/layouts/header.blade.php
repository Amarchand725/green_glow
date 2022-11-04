<header class="main-header">
    <a href="{{ route('admin.dashboard') }}" class="logo">
        <span class="logo-lg">{{ Auth::user()->name }}</span>
    </a>

    <nav class="navbar navbar-static-top">

        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <span style="float:left;line-height:50px;color:#fff;padding-left:15px;font-size:18px;">Admin Panel</span>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ url('/') }}" target="_blank">Visit Website</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-bell"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="head text-light bg-dark">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <span>Notifications (3)</span>
                                    <a href="" class="float-right text-light">Mark all as read</a>
                                </div>
                            </div>
                        </li>
                        <li class="notification-box">
                            <div class="row">
                                <div class="col-lg-3 col-sm-3 col-3 text-center">
                                    <img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8">
                                    <strong class="text-info">David John</strong>
                                    <div>
                                        Lorem ipsum dolor sit amet, consectetur
                                    </div>
                                    <small class="text-warning">27.11.2015, 15:00</small>
                                </div>
                            </div>
                        </li>
                        <li class="footer bg-dark text-center">
                            <a href="" class="text-light">View All</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-envelope"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="head text-light bg-dark">
                            <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <span>Notifications (3)</span>
                                    <a href="" class="float-right text-light">Mark all as read</a>
                                </div>
                            </div>
                        </li>
                        <li class="notification-box">
                            <div class="row">
                                <div class="col-lg-3 col-sm-3 col-3 text-center">
                                    <img src="/demo/man-profile.jpg" class="w-50 rounded-circle">
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8">
                                    <strong class="text-info">David John</strong>
                                    <div>
                                        Lorem ipsum dolor sit amet, consectetur
                                    </div>
                                    <small class="text-warning">27.11.2015, 15:00</small>
                                </div>
                            </div>
                        </li>
                        <li class="footer bg-dark text-center">
                            <a href="" class="text-light">View All</a>
                        </li>
                    </ul>
                </li>

                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @if(Auth::user()->image)
                            <img src="{{ asset('public/admin/img') }}/{{ Auth::user()->image }}" class="user-image" alt="user photo">
                        @else
                            <img src="{{ asset('public/admin/img/dummy-user.png') }}" class="user-image" alt="user photo">
                        @endif
                        <span class="hidden-xs"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-footer">
                            <div>
                                <a href="{{ route('admin.profile.edit') }}" class="btn btn-default btn-flat">Edit Profile</a>
                            </div>
                            <div>
                                <a class="dropdown-item btn btn-default btn-flat" href="{{ route('admin.logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>

    </nav>
</header>
