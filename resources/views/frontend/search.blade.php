@extends('frontend.home.layouts.master')
@section('contents')
    <div class="page-area">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb">
                        <div class="bread-inner">
                            <div class="section-headline white-headline">
                                <h2><span class="color">{{ $title }}</span></h2>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>{{ $title }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome service area start -->
    <div class="welcome-area bg-color-2 area-padding">
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
                @foreach($services as $service)
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

                    @foreach($blogs as $blog)
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
    </div>
    <!-- End Blog area -->

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
                <div>
                    <!-- single-awesome-project start -->
                    @foreach($projects as $project)
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
@endsection

