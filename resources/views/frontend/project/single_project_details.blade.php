@extends('frontend.home.layouts.master')
@section('contents')
    <!-- header end -->
    <!-- Start breadcumb Area -->
    <div class="page-area">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb">
                        <div class="bread-inner">
                            <div class="section-headline white-headline">
                                <h2>Project <span class="color">Details</span></h2>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Project Details</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcumb Area -->
    <!-- Start project Area -->
    <div class="project-single area-padding">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="project-inner project-carousel-2">
                        <div class="project-image">
                            <img src="{{ asset($project->image) }}" alt="">
                        </div>
                        @foreach($project_images as $project_image)
                        <div class="project-image">
                            <img src="{{ asset($project_image->image) }}" alt="">
                        </div>
                        @endforeach

                    </div>
                </div>
                <!-- End Column -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="project-history">
                        <div class="project-name">
                            <ul>
                                <li><span>Project</span>: {{ $project->title }}</li>
                                <li><span>Categories</span> : {{ $project->category }}</li>
                                <li><span>Status</span> : {{ $project->status }}</li>
                                <li><span>Client</span> : {{ $project->relClient->name }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="project-history">
                        <div class="project-new">
                            <h4>Are you Ready new project ?</h4>
                            <a class="hire-btn" href="{{ route('contacts') }}">Contact us</a>
                        </div>
                    </div>
                </div>
                <!-- End Column -->
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="project-details">
                        <h4>Project Overview</h4>
                        <p>{{ $project->description }}</p>

                    </div>
                </div>
                <!-- End single page -->
            </div>
        </div>
        <!-- End main content -->
    </div>
    <!-- End portfolio Area -->
    <!-- Start project Area -->
    <div class="project-area-2 bg-gray area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-headline text-center">
                        <h3>Related <span class="color">Projects</span></h3>
                        <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="project-all project-2">
                    @foreach($all_project as $project)
                    <div class="col-md-3 col-sm-6 col-xs-12">
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
                            <div class="project-dec">
                                <h4>{{ $project->category }}</h4>
                            </div>
                        </div>
                        <div>
                            <h4><a href="{{ route('project.details',$project->slug_title) }}"> {{ $project->title }}</a></h4>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- End main content -->
    </div>
@endsection

