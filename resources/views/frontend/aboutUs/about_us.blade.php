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

<div class="about-page-area area-padding">
    <div class="container">
        <div class="row">
            <div class="support-all">
             @foreach($last_3_service as $key=>$service)
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <div class="support-services">
                        <a class="support-images" href="{{ route('service.details',$service->slug_title) }}">{{ $key+1 }}</a>
                        <div class="support-content">
                            <h4><a href="{{ route('service.details',$service->slug_title) }}">{{ $service->title }}</a></h4>
                            <p>{{ $service->short_description }}</p>
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
<!-- about-area end -->
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
<!-- Start Add area -->
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
<!-- Team area start -->
<div class="team-area bg-color area-padding">
    <div class="container">
        <!-- section head -->
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-headline text-center">
                    <h3>Our<span class="color"> Experts</span></h3>
                    <p>Our development opt in to the projects they genuinely want to work on, committing wholeheartedly to delivering.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="team-member">
                @foreach($last_4_expert as $expert)
                    <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="single-member">
                        <div class="team-img">
                            <a href="#">
                                <img src="{{ asset($expert->image) }}" alt="">
                            </a>
                        </div>
                        <div class="team-content">
                            <h4><a href="#">{{ $expert->name }}</a></h4>
                            <p>{{ $expert->designation }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div style="margin-left: 100px;"><a class="hire-btn" href="{{ route('team') }}">Our Team</a></div>
</div>
@endsection
