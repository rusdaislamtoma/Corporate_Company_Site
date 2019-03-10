<!-- Start top bar -->
<div class="topbar-area fix hidden-xs">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="topbar-left">
                    <div class="quote-button">
                        <a href="#" class="quote-btn"  title="Quick view" data-toggle="modal" data-target="#quoteModal">free consultaion</a>
                    </div>
                    <div class="top-social">
                        <ul>
                            <li><a href="#"><i class="fa fa-skype"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                            <li><a href="#"><i class="fa fa-google"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class=" col-md-6 col-sm-6">
                <div class="topbar-right">
                    <ul>
                        <li><a href="#"><i class="fa fa-envelope"></i>{{ $contact->email }}</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>{{ $contact->contactNo }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End top bar -->
<!-- header-area start -->
<div id="sticker" class="header-area hidden-xs">
    <div class="container">
        <div class="row">
            <!-- logo start -->
            <div class="col-md-3 col-sm-3">
                <div class="logo">
                    <!-- Brand -->
                    <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                        <img src="{{ asset($company->logo) }}" alt="">
                    </a>
                </div>
            </div>
            <!-- logo end -->
            <div class="col-md-9 col-sm-9">
                <div class="header-right-link">
                    <!-- search option start -->
                    <form action="{{ route('search') }}" method="GET">
                        @csrf
                        <div class="search-option">
                            <input type="text" name="search" placeholder="Search Category">
                            <button class="button" type="submit"><i class="fa fa-search"></i></button>
                        </div>
                        <a class="main-search" href="#"><i class="fa fa-search"></i></a>
                    </form>
                    <!-- search option end -->
                </div>
                <!-- mainmenu start -->
                <nav class="navbar navbar-default">
                    <div class="collapse navbar-collapse" id="navbar-example">
                        <div class="main-menu">
                            <ul class="nav navbar-nav navbar-right">
                                @foreach($menus as $menu)
                                <li><a class="pagess" href="{{ route($menu->slug_title) }}">{{ $menu->title }}</a>
                                    @if($menu->title == 'About Us')
                                        <ul class="sub-menu">
                                            @foreach($submenus as $submenu)
                                                 <li><a href="{{ route($submenu->slug_title)  }}">{{ $submenu->title }}</a></li>
                                            @endforeach

                                        </ul>

                                    @endif


                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- mainmenu end -->
            </div>
        </div>
    </div>
</div>
<!-- header-area end -->
<!-- mobile-menu-area start -->
<div class="mobile-menu-area hidden-lg hidden-md hidden-sm">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="mobile-menu">
                    <div class="logo">
                        <a href="index.html"><img src="{{ asset('frontend/img/logo/logo.png') }}" alt="" /></a>
                    </div>
                    <nav id="dropdown">
                        <ul>
                            <li><a class="pagess" href="index.html">Home</a>
                                <ul class="sub-menu">
                                    <li><a href="index.html">Home 01</a></li>
                                    <li><a href="index-2.html">Home 02</a></li>
                                    <li><a href="index-3.html">Home 03</a></li>
                                    <li><a href="index-4.html">Home 04</a></li>
                                </ul>
                            </li>
                            <li><a class="pagess" href="#">About us</a>
                                <ul class="sub-menu">
                                    <li><a href="about.html">About us</a></li>
                                    <li><a href="team.html">Team</a></li>
                                    <li><a href="review.html">Review</a></li>
                                    <li><a href="faq.html">FAQ</a></li>
                                    <li><a href="error.html">Error</a></li>
                                </ul>
                            </li>
                            <li><a class="pagess" href="#">Services</a>
                                <ul class="sub-menu">
                                    <li><a href="services.html">All Services</a></li>
                                    <li><a href="single-service.html">Services Details</a></li>
                                </ul>
                            </li>
                            <li><a class="pagess" href="#">Projects</a>
                                <ul class="sub-menu">
                                    <li><a href="project-2.html">Project 2 Column</a></li>
                                    <li><a href="project-3.html">Project 3 Column</a></li>
                                    <li><a href="project-4.html">Project 4 Column</a></li>
                                    <li><a href="single-project.html">Single Project</a></li>
                                </ul>
                            </li>
                            <li><a class="pagess" href="#">Blog</a>
                                <ul class="sub-menu">
                                    <li><a href="blog.html">Blog grid</a></li>
                                    <li><a href="blog-sidebar.html">Blog Sidebar</a></li>
                                    <li><a href="blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="contact.html">contacts</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- mobile-menu-area end -->
