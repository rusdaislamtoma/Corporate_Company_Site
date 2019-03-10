@extends('frontend.home.layouts.master')
@section('contents')
    <!-- Start Slider Area -->
    <div class="intro-area">
        <div class="main-overly"></div>
        <div class="intro-carousel">
            @foreach($sliders as $slider)
            <div class="intro-content">
                <div class="slider-images">
                    <img src="{{ asset($slider->image) }}" alt="">
                </div>
                <div class="slider-content">
                    <div class="display-table">
                        <div class="display-table-cell">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- layer 1 -->
                                        <div class="layer-1-2">
                                            <h1 class="title2">{{ $slider->title }} <span class="color">{{ $slider->category }}</span></h1>
                                        </div>
                                        <!-- layer 2 -->
                                        <div class="layer-1-1 ">
                                            <p>{{ $slider->description }}</p>
                                        </div>
                                        <!-- layer 3 -->
                                        <div class="layer-1-3">
                                            <a href="{{route('services')}}" class="ready-btn left-btn" >Our Services</a>
                                            <a href="{{route('projects')}}" class="ready-btn right-btn">Our Projects</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
    <!-- End Slider Area -->
    <!-- Welcome service area start -->
    <div class="welcome-area bg-color-2 area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h4>Business consultant is offering world wide business planning. We are a solution oriented company and your needs are our greatest concern</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($services_last_3 as $service)
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="well-services">
                        <div class="services-img">
                            <img src="{{ asset($service->image) }}" alt="">
                            <span class="top-icon" ><i class="flaticon-graph-6" ></i></span>
                            <div class="image-layer">
                                <a href="{{ route('service.details',$service->slug_title) }}"><i class="flaticon-investment" ></i>Details</a>
                            </div>
                        </div>
                        <div class="main-services">
                            <div class="service-content">
                                <h4>{{ $service->title }}</h4>

                                <p>{{ $service->short_description }}</p>
                                {{--<a class="service-btn" href="#">read more</a>--}}

                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Welcome service area End -->
    <!-- about-area start -->
    <div class="about-area bg-color area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="about-image">
                        <img src="{{ asset('frontend/img/about/ab.jpg') }}" alt="">
                        <div class="video-content">
                            <a href="https://www.youtube.com/watch?v=O33uuBh6nXA" class="video-play vid-zone">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- column end -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="about-content">
                        <h4>The Present World Most Prestigious Consulting Firms In 2018.</h4>
                        <p class="hidden-sm">{{ $company->description }}</p>
                        <div class="about-details">
                            <div class="single-about">
                                <a href="#"><i class="icon icon-chart-bars"></i></a>
                                <div class="icon-text">
                                    {{ $company->achievement }}
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about-area end -->
    <!-- Start Service area -->
    <div class="services-area bg-color area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Our <span class="color">Services</span></h3>
                        <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="services-all">
                    <!-- Start services -->
                    @foreach($services_last_6 as $service)
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="single-services">
                            <div class="service-inner">
                                <a class="service-icon" href="#">
                                    <i class="flaticon-presentation-17"></i>
                                </a>
                                <div class="service-content">
                                    <h4><a href="{{ route('service.details',$service->slug_title) }}">{{ $service->title }}</a></h4>
                                    <p><a href="{{ route('service.details',$service->slug_title) }}">{{ $service->short_description }}</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-12 text-center">
                        <a class="load-more-btn" href="{{ route('services') }}">More services</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Service area -->
    <!-- Start Counter Area -->
    <div class="counter-area fix">
        <div class="container-full">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="fun-title">
                        <h3>This is our number of clients in worldwide. Clients wants to be work with us</h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="fun-content">
                        <div class="fun_text">
                            <i class="icon icon-smile"></i>
                            <span class="counter">{{ $total_client }}</span>
                            <h5>Happy Client</h5>
                        </div>
                        <!-- fun_text  -->
                        <div class="fun_text">
                            <i class="icon icon-license"></i>
                            <span class="counter">{{ $total_project }}</span>
                            <h5>Total project</h5>
                        </div>

                    </div>
                </div>
            </div>
            <!-- end Row -->
        </div>
    </div>
    <!-- End Counter Area -->
    <!-- Start project Area -->
    <div class="project-area bg-color-2 area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Our <span class="color">Projects</span></h3>
                        <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="project-carousel">
                    <!-- single-awesome-project start -->
                    @foreach($all_project as $project)
                        <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="single-awesome-project">
                            <div class="awesome-img">
                                <a href="#">
                                    <img src="{{ asset($project->image) }}" alt="" />
                                </a>
                                <div class="add-actions text-center">
                                    <a class="venobox" data-gall="myGallery" href="{{ asset($project->image) }}">
                                        <i class="port-icon icon icon-picture"></i>
                                    </a>
                                </div>
                            </div>
                            <div>
                                <h4><a href="{{ route('project.details',$project->slug_title) }}"> {{ $project->title }}</a></h4>
                                <p>{{ $project->short_description }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End main content -->
    </div>
    <!-- End project Area -->
    <!-- Start brand Banner area -->
    <div class="banner-area fix area-padding" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="banner-content">
                        <div class="banner-text text-center">
                            <h3> We are expert teams for all Consultant work platfrom. You wants to be any advices.</h3>
                            <div class="brand-items">
                                @foreach($clients as $client)
                                    <div class="single-brand-item">
                                        <a href="#"><img src="{{ asset($client->logo) }}" alt=""></a>
                                    </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
                <div style="margin-left: 30px;"><a class="hire-btn" href="{{ route('contacts') }}">Contact us</a></div>
            </div>
        </div>
    </div>
    <!-- End brand Banner area -->

    <div class="faq-area bg-color-2 area-padding">
        <div class="container">
            <div class="row">
                <!-- Start Column Start -->
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="company-faq">
                        <div class="sub-headline">
                            <h4>Important FAQ</h4>
                        </div>
                        <div class="faq-full">
                            <div class="faq-details">
                                <div class="panel-group" id="accordion">
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" class="active" data-parent="#accordion" href="#check1">
                                                    <span class="acc-icons"></span>How to successful our mission and vision
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check1" class="panel-collapse collapse in">
                                            <div class="panel-body">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check2">
                                                    <span class="acc-icons"></span>Clients satisfaction make company Value.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check2" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check3">
                                                    <span class="acc-icons"></span>World class creative design and development firm.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check3" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check4">
                                                    <span class="acc-icons"></span>We are the best online flatform
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check4" class="panel-collapse collapse ">
                                            <div class="panel-body">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                    <!-- Panel Default -->
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4 class="check-title">
                                                <a data-toggle="collapse" data-parent="#accordion" href="#check5">
                                                    <span class="acc-icons"></span>Clients satisfaction make company Value.
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="check5" class="panel-collapse collapse">
                                            <div class="panel-body">
                                                <p>
                                                    When replacing a multi-lined selection of text, the generated dummy text maintains the amount of lines. When replacing a selection of text within a single line, the amount of words is roughly being maintained.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Panel Default -->
                                </div>
                            </div>
                            <!-- End FAQ -->
                        </div>
                    </div>
                </div>
                <!-- End Column -->
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="faq-content">
                        <h4>Have a any qustion?</h4>
                        <div class="faq-quote">
                            <div class="row">
                                <div style="background-color: skyblue;">@include('frontend.home.layouts._messages')</div>
                                @include('frontend.home.layouts._validation_messages')
                                <form  class="contact-form" action="{{ route('question.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input class="form-control" type="text" name="user_name" placeholder="Name" />
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input class="form-control" type="email" name="user_email" placeholder="Email" />
                                        </div>
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <input class="form-control" type="text" name="subject" placeholder="Subject" />
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <textarea class="form-control" id="message-box" cols="30" rows="6" name="message" placeholder="Message"></textarea>
                                            <br/>
                                            <input style="background-color: #80c32f" class="add-btn contact-btn" type="submit" value="Submit" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Column -->
            </div>
        </div>
    </div>
    <!-- End FAQ area -->
    <div class="add-area area-padding parallax-bg" data-stellar-background-ratio="0.6">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="add-content">
                        <h4>Mentos consultant corporate company established since 1986</h4>
                        <div class="add-contact">
                            <span class="call-us"><i class="icon icon-phone-handset"></i>Toll free : {{ $contact->contactNo }}</span>
                            <span class="call-us mail-us"><i class="icon icon-envelope"></i>Mail us : {{ $contact->email }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Blog area -->
    <div class="blog-area bg-color area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Latest<span class="color"> News</span></h3>
                        <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-grid home-blog">

                    @foreach($last_3_blog as $blog)
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="single-blog">
                                <div class="blog-image">
                                    <a class="image-scale" href="#">
                                        <img src="{{ asset($blog->image) }}" alt="">
                                    </a>
                                </div>
                                <div class="blog-content">
                                    <div class="blog-category">
                                        <span>{{ $blog->category }}</span>
                                    </div>
                                    <div class="blog-title">
                                        <a href="{{ route('blog.details',$blog->slug_title) }}">
                                            <h4>{{ $blog->title }}</h4>
                                        </a>
                                    </div>
                                    <div class="blog-meta">
                                        <span class="date-type">
                                           <i class="fa fa-calendar"></i>
                                            {{ date('d M Y',strtotime($blog->date)) }}
                                        </span>
                                        <span class="comments-type">
                                            <i class="fa fa-comment-o"></i>
                                            {{ $total_comment }}
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

            </div>
            <!-- End row -->
        </div>
        <div style="margin-left: 100px;"><a class="hire-btn" href="{{ route('blog') }}">More News</a></div>
    </div>
    <!-- End Blog area -->
@endsection
