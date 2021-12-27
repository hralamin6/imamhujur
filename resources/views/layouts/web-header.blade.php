<header>
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="top-header-full">
                        <div class="top-right-hd p-1">
                            <ul style="padding-left: 0px;display: flex;align-items: stretch;justify-content: space-between;width: 100%;">
                                <li style="display: block;flex: 0 1 auto;"><a class="" href="{{route('home')}}"><img src="{{ asset('frontend') }}/images/logo.svg" alt=""></a></li>
                                <li>
                                    <div class="dropdown">

                                        <a href="#" class="icon15 dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                            <i class="fas fa-globe"></i>
                                            <i class="fas fa-caret-down p-crt"></i>
                                        </a>
                                        <div class="dropdown-menu lanuage-dropdown dropdown-menu-left">
                                            <a class="link-item" href="#">EN</a>
                                            <a class="link-item" href="#">DE</a>
                                            <a class="link-item" href="#">RU</a>
                                            <a class="link-item" href="#">ES</a>
                                            <a class="link-item" href="#">FR</a>
                                        </div>
                                    </div>
                                </li>

                            @auth
                                <li class="dropdown">
                                    <a href="#"  class="icon14 dropdown-toggle-no-caret pt-0 mt-0" role="button" data-toggle="dropdown">
                                        <i class="fas fa-envelope pt-0 mt-0"></i><div class="circle-alrt"></div>
                                    </a>
                                    <div class="dropdown-menu message-dropdown dropdown-menu-right">
                                        <div class="user-request-list">
                                            <div class="request-users">
                                                <div class="user-request-dt">
                                                    <a href="#"><img src="{{ asset('frontend') }}/images/user-dp-1.jpg" alt="">
                                                        <div class="user-title1">Jassica William </div>
                                                        <span>Hey How are you John Doe...</span>
                                                    </a>
                                                </div>
                                                <div class="time5">2 min ago</div>
                                            </div>
                                        </div>
                                        <div class="user-request-list">
                                            <div class="request-users">
                                                <div class="user-request-dt">
                                                    <a href="#"><img src="{{ asset('frontend') }}/images/user-dp-1.jpg" alt="">
                                                        <div class="user-title1">Rock Smith </div>
                                                        <span>Interesting Event! I will join this...</span>
                                                    </a>
                                                </div>
                                                <div class="time5">5 min ago</div>
                                            </div>
                                        </div>
                                        <div class="user-request-list">
                                            <div class="request-users">
                                                <div class="user-request-dt">
                                                    <a href="#"><img src="{{ asset('frontend') }}/images/user-dp-1.jpg" alt="">
                                                        <div class="user-title1">Joy Doe </div>
                                                        <span>Hey Sir! What about you...</span>
                                                    </a>
                                                </div>
                                                <div class="time5">10 min ago</div>
                                            </div>
                                        </div>
                                        <div class="user-request-list">
                                            <a href="my_freelancer_messages.html" class="view-all">View All Messages</a>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="icon14 dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                        <i class="fas fa-bell"></i><div class="circle-alrt"></div>
                                    </a>
                                    <div class="dropdown-menu message-dropdown dropdown-menu-right">
                                        <div class="user-request-list">
                                            <div class="request-users">
                                                <div class="user-request-dt">
                                                    <a href="#">
                                                        <div class="noti-icon"><i class="fas fa-users"></i></div>
                                                        <div class="user-title1">Rock William </div>
                                                        <span>applied for a <ins class="noti-p-link">Php Developer</ins>.</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-request-list">
                                            <div class="request-users">
                                                <div class="user-request-dt">
                                                    <a href="#">
                                                        <div class="noti-icon"><i class="fas fa-bullseye"></i></div>
                                                        <div class="user-title1">Johnson Smith</div>
                                                        <span>placed a bid on your <ins class="noti-p-link">I Need a ...</ins></span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-request-list">
                                            <div class="request-users">
                                                <div class="user-request-dt">
                                                    <a href="#">
                                                        <div class="noti-icon"><i class="fas fa-exclamation"></i></div>
                                                        <span class="pt-2">Your job listing <ins class="noti-p-link">Wordpress Developer</ins> is expiring.</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="user-request-list">
                                            <a href="my_freelancer_notifications.html" class="view-all">View All Notifications</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="account order-1 dropdown">
                                        <a href="#" class="account-link dropdown-toggle-no-caret" role="button" data-toggle="dropdown">
                                            <div class="user-dp"><img class="mt-0" src="{{ asset('frontend') }}/images/dp.jpg" alt=""></div>
                                            <i class="fas fa-sort-down"></i>
                                        </a>
                                        <div class="dropdown-menu account-dropdown dropdown-menu-right">
                                            <a class="link-item" href="my_freelancer_dashboard.html">Dashboard</a>
                                            <a class="link-item" href="{{route('imam.details')}}">Edit CV</a>
                                            <a class="link-item" href="my_freelancer_setting.html">Setting</a>
                                            <a class="link-item" href="my_freelancer_messages.html">My Messages</a>
                                            <a class="link-item" href="my_freelancer_jobs.html">My Jobs</a>
                                            <a class="link-item" href="my_freelancer_bids.html">My Bids</a>
                                            <a class="link-item" href="my_freelancer_portfolio.html">My Portfolio</a>
                                            <a class="link-item" href="my_freelancer_bookmarks.html">My Bookmarks</a>
                                            <a class="link-item" href="my_freelancer_payments.html">Payments</a>
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="{{ route('logout') }}" class="link-item" onclick="event.preventDefault();this.closest('form').submit();">{{ __('Logout') }}</a>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                                @else
                                    <li><a href="{{url('/login')}}" class="icon14 pt-0 mt-0"><i class="fas fa-sign"></i></a></li>
                                    <li><a href="{{url('/register')}}" class="icon14"><i class="fas fa-sign-in-alt"></i></a></li>
                                @endauth
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>



<div class="banner-slider">
    <div class="owl-carousel bnnr-owl owl-theme">
        <div class="item">
            <div class="featured-cities">
                <a href="#">
                    <div class="feature-img">
                        <img src="{{ asset('frontend') }}/images/homepage/owl-bnnr/img-1.jpg" alt="">
                        <div class="overly-bg"></div>
                    </div>
                </a>
                <a href="#">
                    <div class="featured-text">
                        <div class="city-title">California</div>
                        <ins>125 Jobs</ins>
                    </div>
                </a>
            </div>
        </div>
        <div class="item">
            <div class="featured-cities">
                <a href="#">
                    <div class="feature-img">
                        <img src="{{ asset('frontend') }}/images/homepage/owl-bnnr/img-2.jpg" alt="">
                        <div class="overly-bg"></div>
                    </div>
                </a>
                <a href="#">
                    <div class="featured-text">
                        <div class="city-title">Califasdfornia</div>
                        <ins>125 Jobs</ins>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="achivements">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-12">
                <div class="achive-text">3M Registered Members</div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="achive-text">786k Jobs Found</div>
            </div>
            <div class="col-lg-2 col-md-6 col-12">
                <div class="achive-text">1.2K Best Companies</div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <ul class="post-buttons">
                    <li><button class="add-job" onclick="window.location.href = 'post_a_job.html';">Post a Job</button></li>
                    <li><button class="add-project" onclick="window.location.href = 'post_a_project.html';">Post a Work</button></li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="we-offers">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-12">
                <div class="main-heading">
                    <h2>What We Offers</h2>
                    <span>Offering the Best Deal</span>
                    <div class="line-shape1">
                        <img src="{{ asset('frontend') }}/images/line.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-12">
                <div class="offer-step">
                    <div class="offer-text-dt">
                        <h4>Searching the Best Jobs</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur dictum commodo mi.</p>
                        <a href="#">Read More<i class="fas fa-angle-double-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
