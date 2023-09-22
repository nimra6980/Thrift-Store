
        <!-- start section header -->
        <div class="header">
            <header class="top-head container-fluid">
                <div class="nav-control">
                    <div class="hamburger">
                        <span class="line"></span><span class="line"></span><span class="line"></span>
                    </div>
                    <div class="left-header content-header__menu">
                        <ul class="list-unstyled">

                        </ul>
                    </div>
                </div>
                <div class="header-right">
                    <div class="fullscreen notification_dropdown widget-5">
                        <div class="full">
                            <a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()">
                                <i class="fas fa-expand"></i>
                            </a>
                        </div>
                    </div>
                    <div class="widget-6">
                        <div class="cart-wrapper">
                            <div class="cart-icon">
                                <a class="cart-control" href="#">
                                    <i class="fas fa-bell"></i>
                                    <div class="pulse-css"></div>
                                </a>
                            </div>
                            <div class="cart-dropdown-form dropdown-container">
                                <div class="form-content">
                                    <div class="widget-media main-scroll nicescroll-box">
                                        <ul class="timeline">
                                            <li>
                                                <h6 class="mb-0">Notitications</h6>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2">
                                                        <img alt="image" src="assets/images/avtar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1 ">Incoming Message</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-info">
                                                        <img alt="image" src="assets/images/avtar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">You got a new email</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-success">
                                                        <img alt="image" src="assets/images/avtar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Hello world!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2">
                                                        <img alt="image" src="assets/images/avtar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Beep Boop. Beee...</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-danger">
                                                        <img alt="image" src="assets/images/avtar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Hello world!</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="timeline-panel">
                                                    <div class="media mr-2 media-primary">
                                                        <img alt="image" src="assets/images/avtar/1.jpg">
                                                    </div>
                                                    <div class="media-body">
                                                        <h6 class="mb-1">Incoming Message</h6>
                                                        <small class="d-block">29 July 2020 - 02:26 PM</small>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <a class="all-notification btn btn-primary" href="#">
                                        See all notifications
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-account-wrapper widget-7">
                        <div class="account-wrapper">
                            <div class="account-control">
                                <a class="login header-profile" href="#" title="Sign in">
                                    <div class="header-info">
                                    @if (Route::has('login'))
                                        @auth
                                       <small> {{ Auth::user()->name }}</small>
                                        
                                    </div>
                                   
                                </a>
                                <div class="account-dropdown-form dropdown-container">
                                    <div class="form-content">
                                        <a href="doctor-settings.html">
                                            <i class="far fa-user"></i>
                                            <span class="ml-2">Profile</span>
                                        </a>
                                        <a href="#">
                                            <i class="far fa-envelope"></i>
                                            <span class="ml-2">Inbox</span>
                                        </a>
                                     
                                        <a  href="{{ route('logout') }}"
                                        <div >
                           
                                    <a  href="{{ route('logout') }}" class="ml-2 far fa-envelope"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="ml-2">
                                        @csrf
                                    </form>
                                </div>
                                    @else
                            <li ><a href="{{ route('login') }}" class="ml-2">Login</a></li>
                            <li ><a href="{{ route('register') }}" class="ml-2">register</a></li>
                            @endauth
                            @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
        </div>
        <!-- End section header -->