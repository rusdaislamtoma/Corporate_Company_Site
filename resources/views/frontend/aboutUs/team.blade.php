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
    <!-- Team area start -->
    <div class="team-area bg-color area-padding">
        <div class="container">
            <div class="row">
                <div class="team-member">
                   @foreach($experts as $expert)
                       <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="single-member">
                            <div class="team-img">
                                <a href="#">
                                    <img src="{{ $expert->image }}" alt="">
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
    </div>
@endsection
