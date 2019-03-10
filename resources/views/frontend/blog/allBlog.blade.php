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
    <!-- End breadcumb Area -->
    <!-- Start Blog area -->
    <div class="blog-area bg-color area-padding">
        <div class="container">
            <div class="row">
                <div class="blog-grid">
                    <!-- Start single blog -->
                    @foreach($all_blog as $blog)
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
                                <div class="blog-text">
                                    <p>{{ $blog->short_description }}</p>
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
                    <!-- End single blog -->

                </div>
            </div>
            <!-- End row -->
        </div>
    </div>
@endsection
