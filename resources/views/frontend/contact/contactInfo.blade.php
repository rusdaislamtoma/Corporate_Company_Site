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
    <!-- Start contact Area -->
    <div class="contact-page area-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="contact-head">
                        <h3>Contact <span class="color">Details</span></h3>
                        <p>{{ $contact->details }}</p>
                        <div class="contact-icon">
                            <div class="contact-inner">
                                <a href="#"><i class="icon icon-map"></i><span>{{ $contact->address }}</span></a>
                                <a href="#"><i class="icon icon-phone"></i><span>{{ $contact->contactNo }}</span></a>
                                <a href="#"><i class="icon icon-envelope"></i><span>{{ $contact->email }}</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End contact icon -->
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="comment-respond">
                        <h3 class="comment-reply-title" style="color:#80c32f">If you have any query tell us......</h3>
                        <div style="background-color: skyblue;">@include('frontend.home.layouts._messages')</div>
                        @include('frontend.home.layouts._validation_messages')
                        <form action="{{ route('question.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <p>Name *</p>
                                    <input type="text" name="user_name" />
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <p>Email *</p>
                                    <input type="email" name="user_email" />
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                    <p>Subject *</p>
                                    <input type="text" name="subject" />
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 comment-form-comment">
                                    <p>Message *</p>
                                    <textarea id="message-box" cols="30" rows="10" name="message"></textarea>
                                    <input class="add-btn contact-btn" type="submit" value="Submit" />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End contact Form -->
            </div>
        </div>
    </div>
    <!-- Start contact Area -->
    <div class="map-area area-padding bg-gray">
        <div class="container">
            <div class="row">
                <!-- Start contact icon column -->
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <!-- Start Map -->
                    <div class="map-area">
                        <div id="googleMap" style="width:100%;height:450px;"></div>
                    </div>
                    <!-- End Map -->
                </div>
            </div>
        </div>
    </div>
@endsection
