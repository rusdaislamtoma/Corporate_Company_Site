@extends('frontend.home.layouts.master')
@section('contents')
    <!-- Start breadcumb Area -->
    <div class="page-area">
        <div class="breadcumb-overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="breadcrumb">
                        <div class="bread-inner">
                            <div class="section-headline white-headline">
                                <h2>Our <span class="color">Services</span></h2>
                            </div>
                            <ul class="breadcrumb-bg">
                                <li class="home-bread">Home</li>
                                <li>Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End breadcumb Area -->
    <!-- Welcome service area start -->
    <div class="welcome-area-2 area-padding">
        <div class="container">
            <div class="row">
                <div class="all-services-top">
                    <!-- single-well end-->
                    @foreach($all_service_marketing as $key=>$service)
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="well-services">
                            <span class="base"><i class="flaticon-graph-6" ></i></span>
                            <div class="well-icon">
                                <a href="{{ route('service.details',$service->slug_title) }}">{{ $key+1 }}</a>
                            </div>
                            <div class="well-content">
                                <h4><a href="{{ route('service.details',$service->slug_title) }}">{{ $service->title }}</a></h4>
                                <p><a href="{{ route('service.details',$service->slug_title) }}">{{ $service->short_description }}</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- Welcome service area End -->
    <!-- Welcome service area start -->
    <div class="welcome-area bg-color-2 area-padding">
        <div class="container">
            <div class="row">
                @foreach($all_service_business as $service)
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
                    @foreach($all_service as $service)
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
                </div>
            </div>
        </div>
    </div>
    <!-- End Service area -->
@endsection
