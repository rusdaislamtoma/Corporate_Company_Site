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
                                <h2><span class="color">{{$title}}</span></h2>
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
    <!--Blog Area Start-->
    <div class="blog-page-area area-padding">
        <div class="container">
            <div class="row">
                <div class="blog-details">
                    <!-- Start single blog -->
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <!-- single-blog start -->
                        <article class="blog-post-wrapper">
                            <div class="blog-banner">
                                <a href="#" class="blog-images">
                                    <img src="{{ asset($blog->image) }}" alt="">
                                </a>
                                <div class="blog-content">
                                    <div class="blog-category">
                                        <span>{{ $blog->category }}</span>
                                    </div>
                                    <h4>{{ $blog->title }}</h4>
                                    <div class="blog-meta">
                                            <span class="date-type">
                                                 {{ date('d M Y',strtotime($blog->date)) }}
                                            </span>
                                        <span class="comments-type">
                                                <i class="fa fa-comment-o"></i>
                                                {{ $total_comment }}
                                            </span>
                                    </div>

                                    <p>{{ $blog->description }}</p>
                                </div>
                            </div>
                        </article>
                        <div class="clear"></div>
                        <div class="single-post-comments">
                            <div class="comments-area">
                                <div class="comments-heading">
                                    <h3>{{ $total_comment }} comments</h3>
                                </div>
                                <div class="comments-list">
                                    <ul>
                                        @foreach($comments as $comment)
                                            <li class="threaded-comments">
                                            <div class="comments-details">
                                                <div class="comments-list-img">
                                                    <img src="{{ asset('frontend/img/blog/b02.jpg') }}" alt="post-author">
                                                </div>
                                                <div class="comments-content-wrap">
                                                        <span>
                                                            <b>{{ $comment->name }}</b>

                                                            <span class="post-time">{{ date('d M Y',strtotime($comment->date))}}</span>
                                                        </span>
                                                    <p>{{ $comment->message }}</p>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="comment-respond">
                                <h3 class="comment-reply-title">Leave a Reply </h3>
                                <div style="background-color: skyblue;">@include('frontend.home.layouts._messages')</div>
                                @include('frontend.home.layouts._validation_messages')
                                <span class="email-notes">Your email address will not be published. Required fields are marked *</span>
                                <form action="{{ route('comment.store') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <p>Name *</p>
                                            <input type="text" name="name" />
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <p>Email *</p>
                                            <input type="email" name="email" />
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                            <p>Website</p>
                                            <input type="text" name="website" />
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                            <p>Message</p>
                                            <textarea id="message-box" cols="30" rows="10" name="message"></textarea>
                                            <input class="add-btn contact-btn" type="submit" value="Post Comment" />
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- single-blog end -->
                    </div>
                    <!-- End main column -->
                    <!-- End main column -->
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="left-head-blog">
                            <div class="left-blog-page">
                                <!-- search option start -->
                                <form action="{{ route('blog.details',$blog->slug_title)}}" method="GET">
                                    @csrf
                                    <div class="blog-search-option">
                                        <input type="text" name="title" placeholder="Search Recent Post">
                                        <button class="button" type="submit">
                                            <i class="fa fa-search"></i>
                                        </button>
                                    </div>
                                </form>
                                <!-- search option end -->
                            </div>
                            <div class="left-blog-page">
                                <!-- recent start -->
                                <div class="left-blog">
                                    <h4>recent post</h4>
                                    <div class="recent-post">
                                        <!-- start single post -->
                                        @foreach($last_5_blog as $blog)
                                        <div class="recent-single-post">
                                            <div class="post-img">
                                                <a href="#">
                                                    <img src="{{ asset($blog->image) }}" alt="">
                                                </a>
                                            </div>
                                            <div class="pst-content">
                                                <p><a href="{{ route('blog.details',$blog->slug_title) }}">{{ $blog->title }}</a>
                                                <div class="blog-meta">
                                                        <span class="date-type">
                                                           <i class="fa fa-calendar"></i>
                                                            {{ date('d M Y',strtotime($blog->date)) }}
                                                        </span>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                        <!-- End single post -->

                                    </div>
                                </div>
                                <!-- recent end -->
                            </div>
                            <div class="left-blog-page">
                                <div class="left-blog">
                                    <h4>categories</h4>
                                    <ul>
                                        @foreach($all_blog_distinct as $blog)
                                        <li><a href="{{ route('blog',$blog->category) }}">{{ $blog->category }}</a></li>
                                        @endforeach

                                    </ul>
                                </div>
                            </div>
                            <div class="left-blog-page">
                                <div class="left-tags blog-tags">
                                    <div class="popular-tag left-side-tags left-blog">
                                        <h4>popular tags</h4>
                                        <ul>
                                            @foreach($all_blog_distinct as $blog)
                                                <li><a href="{{ route('blog',$blog->category) }}">{{ $blog->category }}</a></li>
                                            @endforeach

                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End left sidebar -->
                </div>
                <!-- End row -->
            </div>
        </div>
    </div>
@endsection
