<?php session_start(); ?>
<aside class="sidebar" data-trigger="scrollbar">
    <!-- Sidebar Profile Start -->
    <div class="sidebar--profile">
        <div class="profile--img">
            <a href="#">
                <img src="" alt="" class="rounded-circle">
            </a>
        </div>

        <div class="profile--name">
            <a href="#" class="btn-link">{{ auth()->user()->name }}</a>
        </div>

        <div class="profile--nav">
            <ul class="nav">
                <li class="nav-item">
                    <a href="#" class="nav-link" title="User Profile">
                        <i class="fa fa-user"></i>
                    </a>
                </li>

                <li class="nav-item">

                </li>
            </ul>
        </div>
    </div>
    <!-- Sidebar Profile End -->

    <div class="sidebar--nav">
        <ul>
            <li>
                <ul>
                    <li class="active">
                        <a href="{{ route('dashboard') }}">
                            <i class="fa fa-home"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="#">
                            <i class="fa fa-user"></i>
                            <span>Update Admin</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('menu.index') }}">
                            <i class="fa fa-list"></i>
                            <span>Menu</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('sub_menu.index') }}">
                            <i class="fa fa-list"></i>
                            <span>SubMenu</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('client.index') }}">
                            <i class="fa fa-list"></i>
                            <span>Clients</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('project.index') }}">
                            <i class="fa fa-list"></i>
                            <span>Projects</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('projectImages.index') }}">
                            <i class="fa fa-list"></i>
                            <span>Project Images</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('blog.index') }}">
                            <i class="fa fa-list"></i>
                            <span>Blogs</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('service.index') }}">
                            <i class="fa fa-list"></i>
                            <span>Services</span>
                        </a>
                    </li>

                    <li class="active">
                        <a href="{{ route('contact_settings') }}">
                            <i class="fa fa-list"></i>
                            <span>Contacts</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('expert.index') }}">
                            <i class="fa fa-list"></i>
                            <span>Experts</span>
                        </a>
                    </li>
                    <li class="active">
                        <a href="{{ route('slider.index') }}">
                            <i class="fa fa-list"></i>
                            <span>Sliders</span>
                        </a>
                    </li>

                    <li>
                        <a href="#">
                            <i class="fa fa-shopping-cart"></i>
                            <span>Settings</span>
                        </a>

                        <ul>
                            <li><a href="{{ route('company_settings') }}">Company Settings</a></li>
                        </ul>
                    </li>


                </ul>
            </li>

            <li>

            </li>

            <li>

            </li>

            <li>

                <ul>
                    <li>

                    </li>
                    <li>

                    </li>
                    <li>

                    </li>
                </ul>
            </li>

        </ul>
    </div>
</aside>
